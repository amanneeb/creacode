<?php
declare(strict_types=1);
namespace App\Modeles;

use App\App;
use \PDO;

class Categories
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

    public function getLivresAssocies():array{
        return Livre::trouverParCategorie($this->id);
    }

    public static function trouverParId($idCategorie):Categories{
        $chaineSQL = "SELECT * FROM categories WHERE id = :idCategorie";
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(':idCategorie', $idCategorie, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Categories');
        $requetePreparee->execute();
        $categories = $requetePreparee->fetch();
        return $categories;
    }

}