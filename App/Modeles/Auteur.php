<?php
declare(strict_types=1);

namespace App\Modeles;

//Cas d'importation
use \PDO\PDOStatement;
use \PDO;
use App\App;

class Auteur
{
    private $id = 0;
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

    public static function trouverParLivre(int $unIdLivre):Auteur{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT auteurs.nom, auteurs.prenom FROM auteurs
         INNER JOIN livres_auteurs 
         ON livres_auteurs.auteur_id = auteurs.id WHERE livres_auteurs.livre_id=:idLivre';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam(':idLivre', $unIdLivre,PDO::PARAM_INT );
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Auteur');
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $auteur = $requetePreparee->fetch();
        return $auteur;
    }

}