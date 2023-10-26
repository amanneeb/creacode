<?php
declare(strict_types=1);
namespace App\Controleurs;
use App\Modeles\Actualites;

use App\App;
use App\Modeles\Evenements;
use App\Modeles\Livre;

class ControleurAccueil
{

    public function __construct()
    {
    }

    public function accueil(): void
    {
        $actualites = Actualites::trouverTout();
        $lancements = Evenements::trouverLancements();
        $evenements = Evenements::trouverEvenements();
        $nouveautes = Livre::trouverNouveautes();
        $aParaitres = Livre::trouverAParaitre();

        $tDonnees = array('actualites'=>$actualites, 'lancements'=>$lancements, 'evenements'=>$evenements, 'nouveautes'=>$nouveautes, 'aParaitres'=>$aParaitres);
        echo App::getBlade()->run("accueil",$tDonnees); // /ressource/vues/accueil.blade.php doit exister...
    }






}