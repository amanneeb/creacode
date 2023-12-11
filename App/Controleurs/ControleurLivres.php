<?php

namespace App\Controleurs;

use App\Modeles\Livre;
use App\Modeles\Categories;
use App\App;
use App\Modeles\Panier;
use App\Modeles\Article;
use App\Modeles\Reconnaissance;
use App\Modeles\FilAriane;

class ControleurLivres
{
    public function __construct()
    {
    }

    public function index($idSession)
    {
        //Nombre d'article dans le panier
        $panier = Panier::trouverParIdSession($idSession);
        $nbArticle = sizeof(Article::trouverParPanier($panier->getId()));


        // Mise à jour du fil d'Ariane
        $filAriane = FilAriane::majFilArianne();

        // Récupération de la page courante pour la pagination
        if (isset($_GET['page'])) {
            $pageCourante = $_GET['page'];
        } else {
            $pageCourante = 0;
        }

        // Gestion des filtres de catégorie et de tri
        if (isset($_GET['idCategorie'])) {
            $categorieRecherchee = (int)$_GET['idCategorie'];
            $nomCategorieRecherchee = ucfirst(Categories::trouverParId($categorieRecherchee)->getNom());
        } else {
            $categorieRecherchee = 0;
            $nomCategorieRecherchee = 'Tous les genres';
        }

        if (isset($_GET['tri'])) {
            $triRecherche = $_GET['tri'];
            $urlTri = "index.php?controleur=livre&action=index&tri=" . $_GET['tri'];
        } else {
            $triRecherche = 'nouveautes';
            $urlTri = "index.php?controleur=livre&action=index";
        }

        // Calcul du nombre total de livres et de pages nécessaires pour la pagination
        $nbTotalLivres = Livre::compterNbLivres($categorieRecherchee);
        $nbParPages = 9;
        $nbTotalPages = ceil($nbTotalLivres / $nbParPages);

        // Récupération des livres pour la page courante, avec filtres de catégorie et de tri
        if ($categorieRecherchee == 0) {
            $livres = Livre::paginer($pageCourante, $nbParPages, $triRecherche);
        } else {
            $livres = Livre::paginerParCategorie($pageCourante, $nbParPages, $categorieRecherchee, $triRecherche);
        }

        // Construction de l'URL de pagination
        if ($categorieRecherchee == 0) {
            $urlPagination = "index.php?controleur=livre&action=index";
        } else {
            $urlPagination = "index.php?controleur=livre&action=index&idCategorie=" . $categorieRecherchee;
        }

        // Données à passer à la vue
        $tDonnees = array(
            "pdo" => App::getPDO(),
            "livres" => $livres,
            "nbTotalLivres" => $nbTotalLivres,
            "numeroPage" => $pageCourante,
            "nombreTotalPages" => $nbTotalPages,
            "urlPagination" => $urlPagination,
            "urlTri" => $urlTri,
            "filAriane" => $filAriane,
            "nomCategorieRecherchee" => $nomCategorieRecherchee,
            "panier" => $panier,
            "nbArticle" => $nbArticle
        );

        // Affichage de la vue avec Blade
        echo App::getBlade()->run("livres.liste", $tDonnees);
    }


    // Affichage de la fiche détaillée d'un livre
    public function fiche($idSession)
    {
        //Nombre d'article dans le panier
        $panier = Panier::trouverParIdSession($idSession);
        $nbArticle = sizeof(Article::trouverParPanier($panier->getId()));

        // Mise à jour du fil d'Ariane
        $filAriane = FilAriane::majFilArianne();

        // Récupération de l'ID du livre depuis les paramètres GET
        $idLivre = (int)$_GET['idLivre'];

        // Récupération des informations sur le livre et sa catégorie associée
        $livres = Livre::trouverParId($idLivre);
        $categories = $livres->getCategorieAssociee()->getLivresAssocies();
        $laCategorieDuLivre = $livres->getCategorieAssociee()->getId();
        $reconnaissances = Reconnaissance::trouverParLivre($idLivre);
        $livreIsbn = $livres->getIsbn_papier();
        $articles = Article::trouverParLivreEtPanier($panier->getId(), $idLivre);


        // Pagination des livres associés à la catégorie du livre
        $totalLivres = Livre::compterParCategorie($laCategorieDuLivre);
        $nbPage = $totalLivres / 5;
        $nombreTotalPages = ceil($nbPage);
        $urlPagination = 'index.php?controleur=livre&action=fiche&idLivre=' . $_GET['idLivre'];

        // Gestion de la page courante pour la pagination
        if (isset($_GET['page']) === false) {
            $numeroPage = 0;
        } else {
            $numeroPage = (int)$_GET['page'];
        }

        $livresPagination = Livre::paginerAutre($numeroPage, 3, $laCategorieDuLivre);
        //fin PAGINATION

        $tDonnees = array('lesLivres' => $livres,
            'reconnaissances' => $reconnaissances,
            'categories' => $laCategorieDuLivre,
            "livresPagination" => $livresPagination,
            "nombreTotalPages" => $nombreTotalPages,
            "numeroPage" => $numeroPage,
            "urlPagination" => $urlPagination,
            "filAriane" => $filAriane,
            "panier" => $panier,
            "nbArticle" => $nbArticle,
            "articles" => $articles
        );

        // Affichage de la vue avec Blade
        echo App::getBlade()->run('livres.fiche', $tDonnees);
    }
}
