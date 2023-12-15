<?php
declare(strict_types=1);

namespace App\Modeles;

//Cas d'importation
use \PDO;
use \PDO\PDOStatement;
use App\App;


class Reconnaissance
{
    private int $id = 0;
    private string $la_reconnaissance = "";
    private int $livre_id = 0;

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
        $chaineSQL = "SELECT * FROM reconnaissances
                        WHERE livre_id=:idLivre";
        $intId = (int)$idLivre;
        //Bind
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":idLivre", $intId, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Reconnaissance");
        $requetePreparee->execute();
        $reconnaissance = $requetePreparee->fetchAll();
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