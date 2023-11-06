<?php
declare(strict_types=1);

namespace App\Modeles;

//Cas d'importation
use \PDO\PDOStatement;
use \PDO;
use App\App;
use App\Modeles\LivreAuteur;

class Auteur
{
    private int $id = 0;
    private string $nom = '';
    private string $prenom = '';
    private string $notice = '';
    private string $site_web = '';

    public function __construct()
    {

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getPrenomNom(): string
    {
        return $this->prenom . " " . $this->nom;
    }

    public function getNotice(): string
    {
        return $this->notice;
    }

    public function getSite_web(): string
    {
        return $this->site_web;
    }

    public function getLivresAuteursAssocies(): array
    {
        return LivreAuteur::trouverParAuteur($this->id);
    }

    public static function compter(): int
    {
        $chaineSql = "SELECT COUNT(*) AS total FROM  auteurs";
        $requetePreparee = App::getPDO()->prepare($chaineSql);
        $requetePreparee->setFetchMode(PDO::FETCH_OBJ);
        $requetePreparee->execute();
        $nbLivres = $requetePreparee->fetch();

        return $nbLivres->total;

    }

    public static function trouverParId(int $unIdAuteur): Auteur
    {
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM auteurs WHERE id=:idAuteur';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam(':idAuteur', $unIdAuteur, PDO::PARAM_INT);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Auteur');
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        return $requetePreparee->fetch();
    }

    public static function paginer(int $unNoDePage, int $unNbrParPage): array
    {
        $index = 9 * ($unNoDePage);

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM auteurs ORDER BY nom ASC LIMIT :index,' . $unNbrParPage;
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam(':index', $index, PDO::PARAM_INT);
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat sous forme de tableau
        return $requetePreparee->fetchAll(PDO::FETCH_CLASS, 'App\Modeles\Auteur');
    }

    public static function compterParLivre($idArtiste): int
    {
        $chaineSql = "SELECT COUNT(*) AS totalLivresAuteur FROM  livres
                        INNER JOIN livres_auteurs ON livres.id = livres_auteurs.livre_id
                        INNER JOIN auteurs ON auteurs.id = livres_auteurs.auteur_id
                        WHERE auteurs.id=".$idArtiste;
        $requetePreparee = App::getPDO()->prepare($chaineSql);
        $requetePreparee->setFetchMode(PDO::FETCH_OBJ);
        $requetePreparee->execute();
        $nbLivres = $requetePreparee->fetch();

        var_dump($nbLivres);
        return $nbLivres->totalLivresAuteur;

    }

    public static function paginerParLivre(int $unNoDePage, int $unNbParPage, int $idAuteur): array
    {

        $indexDepart = null;

        switch ($unNoDePage) {
            case 0:
                $indexDepart = 0;
                break;
            case 1:
                $indexDepart = 5;
                break;
            case 2:
                $indexDepart = 10;
                break;
            case 3:
                $indexDepart = 15;
                break;
            case 4:
                $indexDepart = 20;
                break;
            case 5:
                $indexDepart = 25;
                break;
        }

        $chaineSql = "SELECT * FROM livres 
                        INNER JOIN livres_auteurs ON livres.id = livres_auteurs.livre_id
                        INNER JOIN auteurs ON auteurs.id = livres_auteurs.auteur_id
                        WHERE auteurs.id=:idAuteur
        LIMIT " . $indexDepart . ", " . $unNbParPage;

        $requetePreparee = App::getPDO()->prepare($chaineSql);
        $requetePreparee->bindParam(":idAuteur", $idAuteur, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_ASSOC);
        $requetePreparee->execute();
        $participantsAAfficher = $requetePreparee->fetchAll();

        return $participantsAAfficher;
    }



}