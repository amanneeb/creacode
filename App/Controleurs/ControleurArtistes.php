<?php
declare(strict_types=1);

namespace App\Controleurs;

//Cas d'importation
use App\Modeles\Auteur;
use \PDO;
use App\App;
use App\Modeles\LivreAuteur;


class ControleurArtistes
{

    public function index(){

    }

    public function fiche(){
        $idArtiste = (int) $_GET["idArtiste"];
        $idSuivant = $idArtiste +1;
        $idPrecedent=$idArtiste -1;
        $artistes = Auteur::trouverParId($idArtiste);
        $livresAuteurs = LivreAuteur::trouverParAuteur($idArtiste);

        $tDonnees = array('artistes' => $artistes, 'livresAuteurs' => $livresAuteurs, 'idArtiste' => $idArtiste, 'idSuivant' => $idSuivant, 'idPrecedent' => $idPrecedent);

        echo App::getBlade()->run("artistes.fiche", $tDonnees);

    }
}