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


        $filAriane = FilAriane::majFilArianne();

        if (isset($_GET['page'])) {
            $pageCourante = $_GET['page'];
        } else {
            $pageCourante = 0;
        }

        if (isset($_GET['idCategorie'])) {
            $categorieRecherchee = (int)$_GET['idCategorie'];

            $nomCategorieRecherchee = Categories::trouverParId($categorieRecherchee);
            $nomCategorieRecherchee = ucfirst($nomCategorieRecherchee->getNom());


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
        $nbTotalLivres = Livre::compterNbLivres($categorieRecherchee);
        $nbParPages = 9;
        $nbTotalPages = ceil($nbTotalLivres / $nbParPages);
        if ($categorieRecherchee == 0) {
            $livres = Livre::paginer($pageCourante, $nbParPages, $triRecherche);
        } else {
            $livres = Livre::paginerParCategorie($pageCourante, $nbParPages, $categorieRecherchee, $triRecherche);
        }
        if ($categorieRecherchee == 0) {
            $urlPagination = "index.php?controleur=livre&action=index";
        } else {
            $urlPagination = "index.php?controleur=livre&action=index&idCategorie=" . $categorieRecherchee;
        }
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
        echo App::getBlade()->run("livres.liste", $tDonnees);
    }

    public function fiche($idSession)
    {
        //Nombre d'article dans le panier
        $panier = Panier::trouverParIdSession($idSession);
        $nbArticle = sizeof(Article::trouverParPanier($panier->getId()));

        $filAriane = FilAriane::majFilArianne();
        $idLivre = (int)$_GET['idLivre'];
        $livres = Livre::trouverParId($idLivre);
        $categories = Livre::trouverParId($idLivre)->getCategorieAssociee()->getLivresAssocies();
        $laCategorieDuLivre = Livre::trouverParId($idLivre)->getCategorieAssociee()->getId();
        $reconnaissance = Reconnaissance::trouverParLivre($idLivre);
        $livreIsbn = $livres->getIsbn_papier();
        $articles = Article::trouverParLivreEtPanier($panier->getId(), $idLivre);


        //PAGINATION
        $totalLivres = Livre::compterParCategorie($laCategorieDuLivre);
        $nbPage = $totalLivres / 5;
        $nombreTotalPages = ceil($nbPage);
        $urlPagination = 'index.php?controleur=livre&action=fiche&idLivre=' . $_GET['idLivre'];
        if (isset($_GET['page']) === false) {
            $numeroPage = 0;
        } else {
            $numeroPage = (int)$_GET['page'];
        }
        $livresPagination = Livre::paginerAutre($numeroPage, 3, $laCategorieDuLivre);
        //fin PAGINATION

        $tDonnees = array('lesLivres' => $livres,
            'reconnaissances' => $reconnaissance,
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

        echo App::getBlade()->run('livres.fiche', $tDonnees);
    }


}