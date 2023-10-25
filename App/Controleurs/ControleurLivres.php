<?php

namespace App\Controleurs;

use App\Modeles\Livre;
use App\Modeles\Categories;
use App\App;
use App\Modeles\Participant;

class ControleurLivres
{
    public function __construct()
    {
    }

    public function index(){

        if (isset($_GET['page'])) {
            $pageCourante = $_GET['page'];
        }else{
            $pageCourante= 0;
        }

        if (isset($_GET['idCategorie'])) {
            $categorieRecherchee = $_GET['idCategorie'];
        }else{
            $categorieRecherchee= 0;
        }

        $nbTotalLivres = Livre::compterNbLivres($categorieRecherchee);
        $nbParPages = 9;
        $nbTotalPages = ceil($nbTotalLivres / $nbParPages);

       if ($categorieRecherchee==0){
           $livres= Livre::paginer($pageCourante, $nbParPages);
       } else{
           $livres= Livre::paginerParCategorie($pageCourante, $nbParPages, $categorieRecherchee);
       }
        if ($categorieRecherchee==0){
            $urlPagination= "index.php?controleur=livre&action=index";
        } else{
            $urlPagination= "index.php?controleur=livre&action=index&idCategorie=" . $categorieRecherchee;
        }

        $tDonnees = array(
            "pdo" => App::getPDO(),
            "livres" => $livres,
            "nbTotalLivres" => $nbTotalLivres,
            "numeroPage" => $pageCourante,
            "nombreTotalPages" => $nbTotalPages,
            "urlPagination" => $urlPagination
        );


        echo App::getBlade()->run("livres.liste", $tDonnees);
    }

    public function fiche(){
        $idLivre = (int) $_GET["idLivre"];
        $idCategorie = (int) $_GET['idCategorie'];
        $livres = Livre::trouverParId($idLivre);
        $categories = Categories::trouverParId($idCategorie)->getLivresAssocies();

        //PAGINATION
        $totalLivres = Livre::compterNbLivres();
        $nbPage = $totalLivres/5;
        $nombreTotalPages = ceil($nbPage);

        $urlPagination="index.php?controleur=livre&action=fiche&idLivre=".$_GET["idLivre"]."&idCategorie=".$_GET['idCategorie'];

        if(isset($_GET["page"]) === false){
            $numeroPage = 0;
        }else{
            $numeroPage = (int) $_GET["page"];
        }

        $livresPagination = Livre::paginerAutre($numeroPage, 5);
        //fin PAGINATION

        $tDonnees = array('lesLivres' => $livres, 'categories' => $categories, "livresPagination"=>$livresPagination, "nombreTotalPages"=>$nombreTotalPages, "numeroPage"=>$numeroPage, "urlPagination"=>$urlPagination);

        echo App::getBlade()->run("livres.fiche", $tDonnees);
    }
}