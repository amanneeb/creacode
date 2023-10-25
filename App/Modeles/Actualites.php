<?php
namespace App\Modeles;
use app\App;
use PDO;
class Actualites
{
    private int $id = 0;
    private string $titre = '';
    private string $l_actualite = '';
    private string $date = '';
    public function __construct()
    {
    }

    public static function trouverTout():array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM actualites';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Actualites');
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $actualites = $requetePreparee->fetchAll();
        return $actualites;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getActualite(): string
    {
        return $this->l_actualite;
    }
    public function getDate(): string
    {
        return $this->date;
    }
}