<?php

namespace App\Controleurs;

use App\App;
use App\Modeles\Article;
use App\Modeles\Panier;

class ControleurPanier
{

    public function fiche($idPanier){
        $panier = Panier::trouverParId($idPanier);
        $articlesAssocies = Panier::trouverParId($idPanier)->getArticlesAssocies();
//        var_export($articlesAssocies);
        $tDonnees = array("panier"=>$panier, "articles"=>$articlesAssocies);
        echo App::getBlade()->run("panier.fiche", $tDonnees);
    }
    public function transaction(){
        echo App::getBlade()->run("panier.transaction");
    }


}