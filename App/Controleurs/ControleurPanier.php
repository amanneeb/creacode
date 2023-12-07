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
        $nbArticle = sizeof(Article::trouverParPanier($panier->getId()));
        //var_export($articlesAssocies);
        $tDonnees = array("panier"=>$panier,
                            "articles"=>$articlesAssocies,
                            "nbArticle" => $nbArticle);
        echo App::getBlade()->run("panier.fiche", $tDonnees);
    }


}