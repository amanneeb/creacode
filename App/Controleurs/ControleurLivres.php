<?php

namespace App\Controleurs;

use App\Modeles\Livre;
use App\Modeles\Categories;
use App\App;

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
        $nbTotalLivres= Livre::compterNbLivres();

        $nbParPages= ceil($nbTotalLivres/10);

        $tDonnees = array(
            "pdo" => App::getPDO(),
            "livres" => Livre::paginer($pageCourante, $nbParPages, $categorieRecherchee),
            "nbTotalLivres" => $nbTotalLivres,
            "numeroPage" => $pageCourante,
            "nombreTotalPages" => 10,
            "urlPagination" => "index.php?controleur=livre&action=index"
        );


        echo App::getBlade()->run("livres.liste", $tDonnees);
    }

    public function fiche(){
        $idLivre = (int) $_GET["idLivre"];
        $idCategorie = (int) $_GET['idCategorie'];

        $livres = Livre::trouverParId($idLivre);
        $categories = Categories::trouverParId($idCategorie)->getLivresAssocies();

        $tDonnees = array('livres' => $livres, 'categories' => $categories);

        echo App::getBlade()->run("livres.fiche", $tDonnees);
    }
}