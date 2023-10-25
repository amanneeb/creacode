<?php
declare(strict_types=1);

namespace App;

use App\Controleurs\ControleurLivres;
use App\Controleurs\ControleurAccueil;
use App\Controleurs\ControleurArtistes;
use PDO\PDOStatement;
use PDO;
use eftec\bladeone\BladeOne;

class App
{
    private static ?PDO $refPdo = null;
    private static ?BladeOne $refBlade = null;

    public function __construct()
    {
        error_reporting(E_ALL | E_STRICT);
        date_default_timezone_set('America/Montreal');
        $this->routerRequete();
    }

    public static function getPDO(): PDO
    {
        if (App::$refPdo === null) {
            $serveur = 'localhost';
            $utilisateur = 'root';
            $motDePasse = 'root';
            $nomBd = '23_rpni3_creacode';
            $chaineDSN = 'mysql:dbname=' . $nomBd . ';host=' . $serveur;

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

        // Instantier le bon controleur et executer la bonne action
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
        }
    }
}