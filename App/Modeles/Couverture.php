<?php

declare(strict_types=1);
namespace App\Modeles;

use App\App;
use \PDO;

class Couverture
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

    public static function trouverParId($idCouverture):Couverture{
        $chaineSQL = "SELECT * FROM type_impression WHERE id = :idCouverture";
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(':idCouverture', $idCouverture, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Couverture');
        $requetePreparee->execute();
        $couverture = $requetePreparee->fetch();
        return $couverture;
    }


}