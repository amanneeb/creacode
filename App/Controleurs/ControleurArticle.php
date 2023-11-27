<?php

namespace App\Controleurs;

use App\Modeles\Article;
use App\Modeles\Panier;

class ControleurArticle
{

    public function choisirAction($session){
        $panier = Panier::trouverParIdSession($session);
        $idPanier = $panier->getId();
        $article = Article::trouverParLivreEtPanier($idPanier, $_POST["livre_id"]);

        if($article == false){
            $nouvelArticle = new Article();
            $nouvelArticle->setQuantite($_POST["quantite"]);
            $nouvelArticle->setLivreId($_POST["livre_id"]);
            $nouvelArticle->setPanierId($idPanier);
            $nouvelArticle->inserer();
        }else{
            $article->setQuantite($_POST["quantite"]);
            $article->setLivreId($_POST["livre_id"]);
            $article->modifier();
        }
        header("Location: index.php?controleur=panier&action=fiche&id=".$idPanier);
        exit;
    }

    public function inserer($session){
        $panier = Panier::trouverParIdSession($session);
        $idPanier = $panier->getId();

        $nouvelArticle = new Article();
        $nouvelArticle->setQuantite($_POST["quantite"]);
        $nouvelArticle->setLivreId($_POST["livre_id"]);
        $nouvelArticle->setPanierId($idPanier);
        $nouvelArticle->inserer();

        header("Location: index.php?controleur=panier&action=fiche&id=".$idPanier);
        exit;
    }

    public function modifier($idArticle, $session){
        $panier = Panier::trouverParIdSession($session);
        $idPanier = $panier->getId();
        $article = Article::trouverParId($idArticle);

        $article->setQuantite($_POST["quantite"]);
        $article->setLivreId($_POST["livre_id"]);
        $article->modifier();

        header("Location: index.php?controleur=panier&action=fiche&id=".$idPanier);
        exit;
    }

    public function supprimer($idArticle, $idPanier){
        $article = Article::trouverParId($idArticle);
        $article->supprimer();
        header("Location: index.php?controleur=panier&action=fiche&id=".$idPanier);
        exit;
    }

}