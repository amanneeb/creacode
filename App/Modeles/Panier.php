<?php

namespace App\Modeles;

use App\Modeles\Livre;
use \PDO;
use App\App;

class Panier
{
    private $id = 0;
    private $id_session = "";
    private $date_unix_dernier_acces = 0;

    public function __construct()
    {
    }

    public static function trouverParId($idPanier) {
        $chaineSQL='SELECT * FROM paniers
            WHERE id=:id';
        $requetePreparee=App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":id", $idPanier, PDO::PARAM_STR_CHAR);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Panier");
        $requetePreparee->execute();
        return $requetePreparee->fetch();
    }

    public static function trouverParIdSession($idSession) {
        $chaineSQL='SELECT * FROM paniers
            WHERE id_session=:id_session';
        $requetePreparee=App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":id_session", $idSession, PDO::PARAM_STR_CHAR);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Panier");
        $requetePreparee->execute();
        return $requetePreparee->fetch();
    }

    public function getArticlesAssocies(){
        return Article::trouverParPanier($this->id);
    }

    public function inserer(){
        $chaineSQL =  "INSERT INTO paniers (id_session, date_unix_dernier_acces)  
                        VALUES (:id_session, :date_unix_dernier_acces)";
        $requetePreparee=App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":id_session", $this->id_session, PDO::PARAM_STR);
        $requetePreparee->bindParam(":date_unix_dernier_acces", $this->date_unix_dernier_acces, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_OBJ);
        $requetePreparee->execute();
    }

    public function majPanier(){
        $chaineSQL = "UPDATE paniers SET id=:id, id_session=:id_session, date_unix_dernier_acces=:date_unix_dernier_acces WHERE id_session=:id_session";
        $requetePreparee=App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":id", $this->id, PDO::PARAM_INT);
        $requetePreparee->bindParam(":id_session", $this->id_session, PDO::PARAM_STR_CHAR);
        $requetePreparee->bindParam(":date_unix_dernier_acces", $this->date_unix_dernier_acces, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_OBJ);
        $requetePreparee->execute();
    }

    public function getId(){
        return $this->id;
    }

    public function getIdSession(){
        return $this->id_session;
    }

    public function getDate(){
        return $this->date_unix_dernier_acces;
    }


    public function setIdSession($id_session){
        $this->id_session = $id_session;
    }

    public function setDate($dateTime){
        $this->date_unix_dernier_acces = $dateTime;
    }

}