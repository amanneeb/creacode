<?php
declare(strict_types=1);

namespace App\Controleurs;


//Cas d'importation
use App\Modeles\Auteur;
use App\Modeles\Livre;
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
        $filAriane=FilAriane::majFilArianne();
        $idArtiste = (int)$_GET['idArtiste'];
        $idSuivant = $idArtiste + 1;
        $idPrecedent = $idArtiste - 1;
        $artistes = Auteur::trouverParId($idArtiste);
        $livresAuteurs = Auteur::trouverParId($idArtiste)->getLivresAuteursAssocies();


        //PAGINATION
        $totalLivres = Auteur::compterParLivre($idArtiste);
        $nbPage = $totalLivres/5;
        $nombreTotalPages = ceil($nbPage);
        $urlPagination='index.php?controleur=artiste&action=fiche&idArtiste='.$_GET['idArtiste'];
        if(isset($_GET['page']) === false){
            $numeroPage = 0;
        }else{
            $numeroPage = (int) $_GET['page'];
        }
        $livresPagination = Auteur::trouverParId($idArtiste)->getLivresAuteursAssocies();
        $livres = Auteur::paginerParLivre($numeroPage, 3, (int) $_GET['idArtiste']);
        //FIN PAGINATION


        $arrReconnaissance = array();
        for($cpt = 0; $cpt<count($livresAuteurs); $cpt++){
            $idLivre = $livresAuteurs[$cpt]->getIdLivreId();
            $reconnaissance = Reconnaissance::trouverParLivre($idLivre);
            array_push($arrReconnaissance, $reconnaissance);
        }

        $tDonnees = array('artistes' => $artistes,
                            'reconnaissances' => $reconnaissance,
                            'livresAuteurs' => $livresAuteurs,
                            'idArtiste' => $idArtiste,
                            'idSuivant' => $idSuivant,
                            'idPrecedent' => $idPrecedent,
                            "livresPagination"=>$livresPagination,
                            "nombreTotalPages"=>$nombreTotalPages,
                            "numeroPage"=>$numeroPage,
                            'livres' => $livres,
                            "urlPagination"=>$urlPagination,
                            'filAriane' => $filAriane);

        echo App::getBlade()->run('artistes.fiche', $tDonnees);

    }
}