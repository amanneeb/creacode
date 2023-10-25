<?php

namespace App\Modeles;

use app\App;
use PDO;

class Evenements
{
    private int $id = 0;
    private string $titre = '';
    private string $l_evenement = '';
    private string $date = '';

    public function __construct()
    {
    }

    public static function trouverLancements(): array
    {
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM evenements WHERE evenements.id IN (7, 8, 9)';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Evenements');
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $lancements = $requetePreparee->fetchAll();
        return $lancements;
    }


    public static function trouverEvenements():array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM evenements WHERE evenements.id IN (1, 2, 3, 4, 5, 6)';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Evenements');
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $evnements = $requetePreparee->fetchAll();
        return $evnements;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getTexte(): string
    {
        return $this->l_evenement;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}