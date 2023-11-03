<?php

namespace App\Controleurs;

use App\Modeles\Livre;
use App\Modeles\Categories;
use App\App;
use App\Modeles\Participant;
use App\Modeles\Reconnaissance;
use App\Modeles\FilAriane;

class ControleurLivres
{
    public function __construct()
    {
    }

    public function index(){

        $filAriane=FilAriane::majFilArianne();

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
        if (isset($_GET['tri'])) {
            $triRecherche = $_GET['tri'];
            $urlTri="index.php?controleur=livre&action=index&tri=" . $_GET['tri'];
        }else{
            $triRecherche= 'nouveautes';
            $urlTri="index.php?controleur=livre&action=index";
        }

        $nbTotalLivres = Livre::compterNbLivres($categorieRecherchee);
        $nbParPages = 9;
        $nbTotalPages = ceil($nbTotalLivres / $nbParPages);

       if ($categorieRecherchee==0){
           $livres= Livre::paginer($pageCourante, $nbParPages, $triRecherche);
       } else{
           $livres= Livre::paginerParCategorie($pageCourante, $nbParPages, $categorieRecherchee, $triRecherche);
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
            "urlPagination" => $urlPagination,
            "urlTri" => $urlTri,
            "filAriane" => $filAriane
        );


        echo App::getBlade()->run("livres.liste", $tDonnees);
    }

    public function fiche(){
        $filAriane=FilAriane::majFilArianne();
        $idLivre = (int) $_GET["idLivre"];
        $livres = Livre::trouverParId($idLivre);
        $categories = Livre::trouverParId($idLivre)->getCategorieAssociee()->getLivresAssocies();
        $reconnaissance = Reconnaissance::trouverParLivre($idLivre);
        var_dump($reconnaissance);


        //PAGINATION
        $totalLivres = Livre::compterNbLivres(0);
        $nbPage = $totalLivres/5;
        $nombreTotalPages = ceil($nbPage);

        //$urlPagination="index.php?controleur=livre&action=fiche&idLivre=".$_GET["idLivre"]."&idCategorie=".$_GET['idCategorie'];
        $urlPagination="index.php?controleur=livre&action=fiche&idLivre=".$_GET["idLivre"];

        if(isset($_GET["page"]) === false){
            $numeroPage = 0;
        }else{
            $numeroPage = (int) $_GET["page"];
        }

        $livresPagination = Livre::paginerAutre($numeroPage, 3);
        //fin PAGINATION

        $tDonnees = array('lesLivres' => $livres, 'reconnaissances' => $reconnaissance, 'categories' => $categories, "livresPagination"=>$livresPagination, "nombreTotalPages"=>$nombreTotalPages, "numeroPage"=>$numeroPage, "urlPagination"=>$urlPagination, "filAriane" => $filAriane);

        echo App::getBlade()->run("livres.fiche", $tDonnees);
    }


}