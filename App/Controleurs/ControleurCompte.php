<?php
declare(strict_types=1);
namespace App\Controleurs;

use App\App;
class ControleurCompte
{
    public function __construct()
    {
    }
    public function connexion(){
        echo App::getBlade()->run("compte.connexion");
    }
    public function creation(){
        echo App::getBlade()->run("compte.creation");
    }
}