<?php
declare(strict_types=1);

namespace App\Modeles;

//Cas d'importation
use \PDO\PDOStatement;
use \PDO;
use App\App;

class Auteur
{
    private int  $id = 0;
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
    public function getLivresAuteursAssocies():array{
        return LivreAuteur::trouverParAuteur($this->id);
    }

    public static function trouverParId(int $unIdAuteur): Auteur{
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

}