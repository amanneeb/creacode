<?php
declare(strict_types=1);
namespace App\Controleurs;

use App\App;
class ControleurSite
{
    public function __construct()
    {
    }

    public function accueil(): void
    {
        $tDonnees = array("message"=>"Je suis la page d'accueil...");
        echo App::getBlade()->run("accueil",$tDonnees); // /ressource/vues/accueil.blade.php doit exister...
    }

}