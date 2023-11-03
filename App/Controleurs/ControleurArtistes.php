<?php
declare(strict_types=1);

namespace App\Controleurs;


//Cas d'importation
use App\Modeles\Auteur;
use \PDO;
use App\App;
use App\Modeles\LivreAuteur;
use App\Modeles\Reconnaissance;
use App\Modeles\FilAriane;

class ControleurArtistes
{

    public function index()
    {
        $filAriane = FilAriane::majFilArianne();

        if (isset($_GET['page'])) {
            $pageCourante = (int)$_GET['page'];
        } else {
            $pageCourante = 0;
        }
        $nbTotalAuteurs = Auteur::compter();
        $nbParPages = 9;
        $nbTotalPages = ceil($nbTotalAuteurs / $nbParPages);

        $auteurs = Auteur::paginer($pageCourante, $nbParPages);

        $urlPagination = "index.php?controleur=artiste&action=index";

        $tDonnees = array(
            "pdo" => App::getPDO(),
            "auteurs" => $auteurs,
            "nbTotalAuteurs" => $nbTotalAuteurs,
            "numeroPage" => $pageCourante,
            "nombreTotalPages" => $nbTotalPages,
            "urlPagination" => $urlPagination,
            "filAriane" => $filAriane
        );

        echo App::getBlade()->run("artistes.liste", $tDonnees);
    }


    public function fiche()
    {
        $idArtiste = (int)$_GET["idArtiste"];
        $idSuivant = $idArtiste + 1;
        $idPrecedent = $idArtiste - 1;
        $artistes = Auteur::trouverParId($idArtiste);
        $livresAuteurs = Auteur::trouverParId($idArtiste)->getLivresAuteursAssocies();
        //$livresAuteurs = LivreAuteur::trouverParAuteur($idArtiste);


        $tDonnees = array('artistes' => $artistes, 'livresAuteurs' => $livresAuteurs, 'idArtiste' => $idArtiste, 'idSuivant' => $idSuivant, 'idPrecedent' => $idPrecedent);

        echo App::getBlade()->run("artistes.fiche", $tDonnees);

    }
}