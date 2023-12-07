<?php
declare(strict_types=1);

namespace App\Controleurs;

// Importation des classes nécessaires
use App\Modeles\Auteur;
use App\Modeles\Livre;
use \PDO;
use App\App;
use App\Modeles\LivreAuteur;
use App\Modeles\Reconnaissance;
use App\Modeles\FilAriane;

class ControleurArtistes
{
    // Méthode pour afficher la liste des artistes
    public function index()
    {
        // Mise à jour du fil d'Ariane
        $filAriane = FilAriane::majFilArianne();

        // Gestion de la pagination
        if (isset($_GET['page'])) {
            $pageCourante = (int)$_GET['page'];
        } else {
            $pageCourante = 0;
        }

        // Calcul du nombre total d'auteurs et de pages nécessaires pour la pagination
        $nbTotalAuteurs = Auteur::compter();
        $nbParPages = 9;
        $nbTotalPages = ceil($nbTotalAuteurs / $nbParPages);

        // Récupération des auteurs pour la page courante
        $auteurs = Auteur::paginer($pageCourante, $nbParPages);

        // Construction de l'URL de pagination
        $urlPagination = "index.php?controleur=artiste&action=index";

        // Données à passer à la vue
        $tDonnees = array(
            "pdo" => App::getPDO(),
            "auteurs" => $auteurs,
            "nbTotalAuteurs" => $nbTotalAuteurs,
            "numeroPage" => $pageCourante,
            "nombreTotalPages" => $nbTotalPages,
            "urlPagination" => $urlPagination,
            "filAriane" => $filAriane
        );

        // Affichage de la vue avec Blade
        echo App::getBlade()->run("artistes.liste", $tDonnees);
    }

    // Méthode pour afficher la fiche détaillée d'un artiste
    public function fiche()
    {
        // Mise à jour du fil d'Ariane
        $filAriane = FilAriane::majFilArianne();

        // Récupération de l'ID de l'auteur depuis les paramètres GET
        $idAuteur = (int)$_GET['idAuteur'];

        // Calcul des IDs pour les pages suivante et précédente
        $idSuivant = $idAuteur + 1;
        $idPrecedent = $idAuteur - 1;

        // Récupération des informations sur l'auteur et ses livres associés
        $auteurs = Auteur::trouverParId($idAuteur);
        $livresAuteurs = $auteurs->getLivresAuteursAssocies();

        // Pagination des livres associés à l'auteur
        $totalLivres = Auteur::compterParLivre($idAuteur);
        $nbPage = $totalLivres / 5;
        $nombreTotalPages = ceil($nbPage);
        $urlPagination = 'index.php?controleur=artiste&action=fiche&idAuteur=' . $_GET['idAuteur'];

        // Gestion de la page courante pour la pagination
        if (isset($_GET['page']) === false) {
            $numeroPage = 0;
        } else {
            $numeroPage = (int) $_GET['page'];
        }

        // Récupération des livres pour la page courante
        $livresPagination = $auteurs->getLivresAuteursAssocies();
        $livres = Auteur::paginerParLivre($numeroPage, 3, (int) $_GET['idAuteur']);

        // Récupération des reconnaissances pour chaque livre associé à l'auteur
        $arrReconnaissance = array();
        for ($cpt = 0; $cpt < count($livresAuteurs); $cpt++) {
            $idLivre = $livresAuteurs[$cpt]->getIdLivreId();
            $reconnaissance = Reconnaissance::trouverParLivre($idLivre);
            array_push($arrReconnaissance, $reconnaissance);
        }

        // Données à passer à la vue
        $tDonnees = array(
            'auteurs' => $auteurs,
            'reconnaissances' => $reconnaissance,
            'livresAuteurs' => $livresAuteurs,
            'idAuteur' => $idAuteur,
            'idSuivant' => $idSuivant,
            'idPrecedent' => $idPrecedent,
            "livresPagination" => $livresPagination,
            "nombreTotalPages" => $nombreTotalPages,
            "numeroPage" => $numeroPage,
            'livres' => $livres,
            "urlPagination" => $urlPagination,
            'filAriane' => $filAriane
        );

        // Affichage de la vue avec Blade
        echo App::getBlade()->run('artistes.fiche', $tDonnees);
    }
}
