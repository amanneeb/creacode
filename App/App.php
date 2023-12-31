<?php
declare(strict_types=1);

namespace App;

use App\Controleurs\ControleurLivres;
use App\Controleurs\ControleurAccueil;
use App\Controleurs\ControleurArtistes;
use App\Controleurs\ControleurCompte;
use App\Controleurs\ControleurPanier;
use App\Controleurs\ControleurArticle;
use App\Modeles\Article;
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
        $panier = Panier::trouverParIdSession($idSession);
        $nbArticle = 0;

        if($panier == false){
            $nouveauPanier = new Panier();
            $nouveauPanier->setDate($date);
            $nouveauPanier->setIdSession($idSession);
            $nouveauPanier->inserer();
        }else{
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
                    if(is_null($_COOKIE["PHPSESSID"]) ){
                        $objControleur->accueil(session_id());
                    }else{
                        $objControleur->accueil($_COOKIE["PHPSESSID"]);
                    }
                    break;
                default:
                    echo 'Erreur 404 - Page introuvable.';
            }

        } else if ($nomControleur === 'livre') {
            $objControleur = new ControleurLivres();
            switch ($nomAction) {
                case 'index':
                    $objControleur->index($_COOKIE["PHPSESSID"]);
                    break;
                case 'fiche':
                    $objControleur->fiche($_COOKIE["PHPSESSID"]);
                    break;
                default:
                    echo 'Erreur 404 - Page introuvable.';
            }
        } else if ($nomControleur === 'artiste') {
            $objControleur = new ControleurArtistes();
            switch ($nomAction) {
                case 'index':
                    $objControleur->index($_COOKIE["PHPSESSID"]);
                    break;
                case 'fiche':
                    $objControleur->fiche($_COOKIE["PHPSESSID"]);
                    break;
                default:
                    echo 'Erreur 404 - Page introuvable.';
            }

        }else if ($nomControleur === 'compte') {
            $objControleur = new ControleurCompte();
            switch ($nomAction) {
                case 'connexion':
                    $objControleur->connexion(session_id());
                    break;
                case 'creation':
                    $objControleur->creation(session_id());
                    break;
                case 'inserer':
                    $objControleur->inserer();
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