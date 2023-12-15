<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\Actualites;
use App\Modeles\Article;
use App\Modeles\Evenements;
use App\Modeles\Livre;
use App\Modeles\Panier;

class ControleurAccueil
{

    public function __construct()
    {
    }

    public function accueil($idSession): void
    {
        //Nombre d'article dans le panier
        $panier = Panier::trouverParIdSession($idSession);
        $nbArticle = sizeof(Article::trouverParPanier($panier->getId()));

        $actualites = Actualites::trouverTout();
        $lancements = Evenements::trouverLancements();
        $evenements = Evenements::trouverEvenements();
        $nouveautes = Livre::trouverNouveautes();
        $aParaitres = Livre::trouverAParaitre();


        $tDonnees = array('actualites' => $actualites, 'lancements' => $lancements, 'evenements' => $evenements, 'nouveautes' => $nouveautes, 'aParaitres' => $aParaitres, 'nbArticle' => $nbArticle);
        echo App::getBlade()->run("accueil", $tDonnees);

    }
}