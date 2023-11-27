<?php
declare(strict_types=1);
namespace App\Modeles;

use \PDO;
use App\App;
use App\Modeles\Livre;

class Article
{
    private $id = 0;
    private $quantite = 0;
    private $livre_id = 0;
    private $panier_id = 0;

    public function __construct()
    {
    }

    public static function trouverParId($idArticle){
        $chaineSQL='SELECT * FROM articles
            WHERE id=:id';
        $id = (int) $idArticle;
        $requetePreparee=App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":id", $id, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Article");
        $requetePreparee->execute();
        return $requetePreparee->fetch();
    }

    public static function trouverParLivreEtPanier($panier, $id){
        $chaineSQL='SELECT * FROM articles
            WHERE panier_id=:panier_id AND livre_id=:livre_id';
        $requetePreparee=App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":panier_id", $panier, PDO::PARAM_INT);
        $requetePreparee->bindParam(":livre_id", $id, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Article");
        $requetePreparee->execute();
        return $requetePreparee->fetch();
    }

    public static function trouverParPanier($id){
        $chaineSQL='SELECT * FROM articles
            WHERE panier_id=:id';
        $requetePreparee=App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":id", $id, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Article");
        $requetePreparee->execute();
        return $requetePreparee->fetchAll();
    }

    public function inserer(){
        $chaineSQL = "INSERT INTO articles (quantite, livre_id, panier_id)
                VALUES (:quantite, :livre_id, :panier_id)";
        $requetePreparee=App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":quantite", $this->quantite, PDO::PARAM_INT);
        $requetePreparee->bindParam(":livre_id", $this->livre_id, PDO::PARAM_INT);
        $requetePreparee->bindParam(":panier_id", $this->panier_id, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_OBJ);
        $requetePreparee->execute();
    }

    public function modifier(){
        $chaineSQL = "UPDATE articles
                    SET quantite=:quantite, livre_id=:livre_id, panier_id=:panier_id 
                    WHERE id=:id";
        $requetePreparee=App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":id", $this->id, PDO::PARAM_INT);
        $requetePreparee->bindParam(":quantite", $this->quantite, PDO::PARAM_INT);
        $requetePreparee->bindParam(":livre_id", $this->livre_id, PDO::PARAM_INT);
        $requetePreparee->bindParam(":panier_id", $this->panier_id, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_OBJ);
        $requetePreparee->execute();
    }

    public function supprimer(){
        $chaineSQL  = "DELETE FROM articles WHERE id=:id";
        $requetePreparee=App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":id", $this->id, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_OBJ);
        $requetePreparee->execute();
        $requetePreparee->fetch();
    }

    public function getLivreAssocie(){
        return Livre::trouverParId($this->livre_id);
    }

    public function getId(){
        return $this->id;
    }

    public function getQuantite(){
        return $this->quantite;
    }

    public function getLivreId(){
        return $this->livre_id;
    }

    public function getPanierId(){
        return $this->panier_id;
    }


    public function setQuantite($quantite){
        $this->quantite = $quantite;
    }

    public function setLivreId($livreId){
        $this->livre_id = $livreId;
    }

    public function setPanierId($panierId){
        $this->panier_id = $panierId;
    }


}