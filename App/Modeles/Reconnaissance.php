<?php
declare(strict_types=1);

namespace App\Modeles;

//Cas d'importation
use \PDO;
use \PDO\PDOStatement;
use App\App;


class Reconnaissance
{
    private $id = 0;
    private $la_reconnaissance = "";
    private $livre_id = 0;

    function __construct(){ }

    public static function trouverParId(int $idReconnaissance): Livre
    {
        $chaineSQL = "SELECT * FROM reconnaissances WHERE id=:idReconnaissance";

        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":idReconnaissance", $idReconnaissance, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Reconnaissance");
        $requetePreparee->execute();
        $reconnaissance = $requetePreparee->fetch();
        return $reconnaissance;
    }

    public static function trouverParLivre($idLivre): array
    {
        /*$chaineSQL = "SELECT * FROM reconnaissances
                        INNER JOIN livres ON reconnaissances.livre_id = livres.id
                        WHERE livre_id =:idLivre";*/
        $chaineSQL = "SELECT la_reconnaissance FROM reconnaissances
                        INNER JOIN livres ON livres.id = reconnaissances.livre_id
                        INNER JOIN livres_auteurs ON livres_auteurs.livre_id = livres.id
                        INNER JOIN auteurs ON auteurs.id = livres_auteurs.livre_id
                        WHERE livres.id=:idLivre";
        $intId = (int)$idLivre;
        //Bind
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":idLivre", $intId, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Reconnaissance");
        $requetePreparee->execute();
        $reconnaissance = $requetePreparee->fetchAll();
        //var_dump($reconnaissance);

        return $reconnaissance;
    }



    public function getId(): int
    {
        return $this->id;
    }

    public function getLaReconnaissance(): string
    {
        return $this->la_reconnaissance;
    }

    public function getLivreId(): int
    {
        return $this->livre_id;
    }

}