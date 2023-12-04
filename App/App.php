<?php
declare(strict_types=1);

namespace App;

use App\Controleurs\ControleurLivres;
use App\Controleurs\ControleurAccueil;
use App\Controleurs\ControleurArtistes;
use App\Controleurs\ControleurCompte;
use App\Controleurs\ControleurPanier;
use App\Controleurs\ControleurArticle;
use App\Modeles\Panier;
use PDO\PDOStatement;
use PDO;
use eftec\bladeone\BladeOne;

class   App
{
    private static ?PDO $refPdo = null;
    private static ?BladeOne $refBlade = null;

    public function __construct()
    {
        error_reporting(E_ALL | E_STRICT);
        date_default_timezone_set('America/Montreal');
        $this->demarrerSession();
        $this->routerRequete();
    }

    public function demarrerSession(){
        session_start();
        $idSession = session_id();
        $date = time();
//        echo "id_session: ".$idSession." <br> date (unix): ".$date;
        $panier = Panier::trouverParIdSession($idSession);

        if($panier == false){
//            var_dump("creer");
            $nouveauPanier = new Panier();
            $nouveauPanier->setDate($date);
            $nouveauPanier->setIdSession($idSession);
            $nouveauPanier->inserer();
        }else{
//            var_dump("modifier");
            $panier->setDate($date);
            $panier->majPanier();
        }
    }

    public static function getServeur(): string
    {
        // Vérifier la nature du serveur (local VS production)
        $env = 'null';
        if ((substr($_SERVER['HTTP_HOST'], 0, 9) == 'localhost') ||
            (substr($_SERVER['HTTP_HOST'], 0, 7) == '199.202')){
            $env = 'serveur-local';
        } else {
            $env = 'serveur-production';
        }
        return $env;
    }

    public static function getPDO(): PDO
    {
        if (App::$refPdo === null) {
            if(App::getServeur() === 'serveur-local'){
                $serveur = 'localhost';
                $utilisateur = 'root';
                $motDePasse = 'root';
                $nomBd = '23_rpni3_creacode';
            }elseif (App::getServeur() === 'serveur-production'){
                $serveur = 'localhost';
                $utilisateur = '23_rpni3_creacode';
                $motDePasse = '.gqgDSLnef9vo5)9';
                $nomBd = '23_rpni3_creacode';
            }
            $chaineDSN = "mysql:dbname=$nomBd;host=$serveur";

            App::$refPdo = new PDO($chaineDSN, $utilisateur, $motDePasse);

            App::$refPdo->exec("SET NAMES utf8");

            App::$refPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return App::$refPdo;
    }


    public static function getBlade(): BladeOne
    {
        if (App::$refBlade === null) {
            $cheminDossierVues = '../ressources/vues';
            $cheminDossierCache = '../ressources/cache';
            App::$refBlade = new BladeOne($cheminDossierVues, $cheminDossierCache, BladeOne::MODE_AUTO);
        }
        return App::$refBlade;

    }

    public function routerRequete(): void
    {
        // Variables locales
        $nomControleur = 'site'; // Nom du controleur par défaut
        $nomAction = 'accueil'; // Nom de l'action par défaut
        $objControleur = null; // Instance du controleur

        // Si disponible, affecter le nom du controleur de la requête
        if (isset($_GET['controleur'])) {
            $nomControleur = $_GET['controleur'];
        }

        // Si disponible, affecter le nom l'action de la requête
        if (isset($_GET['action'])) {
            $nomAction = $_GET['action'];
        }

        if (isset($_GET['id'])){
            $id = (int) $_GET['id'];
        }

        if (isset($_GET['panier'])){
            $idPanier = (int) $_GET['panier'];
        }

        if (isset($_GET['livre_id'])){
            $id = (int) $_GET['livre_id'];
        }

        // Instancier le bon controleur et executer la bonne action
        if ($nomControleur === 'site') {
            $objControleur = new ControleurAccueil();
            switch ($nomAction) {
                case 'accueil':
                    $objControleur->accueil();
                    break;
                default:
                    echo 'Erreur 404 - Page introuvable.';
            }

        } else if ($nomControleur === 'livre') {
            $objControleur = new ControleurLivres();
            switch ($nomAction) {
                case 'index':
                    $objControleur->index();
                    break;
                case 'fiche':
                    $objControleur->fiche();
                    break;
                default:
                    echo 'Erreur 404 - Page introuvable.';
            }
        } else if ($nomControleur === 'artiste') {
            $objControleur = new ControleurArtistes();
            switch ($nomAction) {
                case 'index':
                    $objControleur->index();
                    break;
                case 'fiche':
                    $objControleur->fiche();
                    break;
                default:
                    echo 'Erreur 404 - Page introuvable.';
            }

        }else if ($nomControleur === 'compte') {
            $objControleur = new ControleurCompte();
            switch ($nomAction) {
                case 'connexion':
                    $objControleur->connexion();
                    break;
                case 'creation':
                    $objControleur->creation();
                    break;
                case 'inserer':
                    $objControleur->inserer();
                    header('Location:index.php');
                    break;
                default:
                    echo 'Erreur 404 - Page introuvable.';
            }
        }else if($nomControleur === 'panier'){
            $objControleur = new ControleurPanier();
            switch ($nomAction) {
                case 'fiche':
                    $objControleur->fiche($id);
                    break;
                case 'transaction':
                    $objControleur->transaction();
                    break;
                default:
                    echo 'Erreur 404 - Page introuvable.';
            }
        }else if($nomControleur === 'article'){
            $objControleur = new ControleurArticle();
            switch ($nomAction) {
                case 'enregistrer':
                    $objControleur->choisirAction($_COOKIE["PHPSESSID"]);
                    break;
                case 'creer':
                    $objControleur->inserer($_COOKIE["PHPSESSID"]);
                    break;
                case 'mettreAJour':
                    $objControleur->modifier($id, $_COOKIE["PHPSESSID"]);
                    break;
                case 'supprimer':
                    $objControleur->supprimer($id, $idPanier);
                    break;
                default:
                    echo 'Erreur 404 - Page introuvable.';
            }
        }

    }
}