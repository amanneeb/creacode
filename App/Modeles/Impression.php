<?php

declare(strict_types=1);
namespace App\Modeles;

use App\App;
use \PDO;

class Impression
{

    private int $id = 0;
    private string $nom = '';

    public function __construct(){

    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public static function trouverParId($idImpression):Impression{
        $chaineSQL = "SELECT * FROM type_impression WHERE id = :idImpression";
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(':idImpression', $idImpression, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Impression');
        $requetePreparee->execute();
        $impression = $requetePreparee->fetch();
        return $impression;
    }


}