<?php
declare(strict_types=1);
namespace App\Controleurs;
use App\Modeles\Actualites;

use App\App;
use App\Modeles\Lancements;

class ControleurAccueil
{

    public function __construct()
    {
    }

    public function accueil(): void
    {
        $actualites = Actualites::trouverTout();
        $lancements = Lancements::trouverTout();

        $tDonnees = array('actualites'=>$actualites, 'lancements'=>$lancements);
        echo App::getBlade()->run("accueil",$tDonnees); // /ressource/vues/accueil.blade.php doit exister...
    }






}