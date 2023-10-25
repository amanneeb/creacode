<?php
declare(strict_types=1);

namespace App\Modeles;

//Cas d'importation
use \PDO\PDOStatement;
use \PDO;
use App\App;

class LivreAuteur
{
    private int $id = 0;
    private int $livre_id = 0;
    private int $auteur_id = 0;

    public function __construct()
    {

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIdLivreId(): int
    {
        return $this->livre_id;
    }

    public function getIdAuteurId(): int
    {
        return $this->auteur_id;
    }

    public function getLivreAssocie(): Livre
    {
        return Livre::trouverParId($this->livre_id);
    }

    public function getAuteurAssocie(): Auteur
    {
        return Auteur::trouverParId($this->auteur_id);
    }

    public static function trouverParAuteur(int $unIdAuteur): array
    {
        // Définir la chaine SQL
        $chaineSQL = 'SELECT livre_id FROM livres_auteurs WHERE auteur_id=' . $unIdAuteur;
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        return $requetePreparee->fetchAll(PDO::FETCH_CLASS, 'App\Modeles\LivreAuteur');
    }

    public static function trouverParLivre(int $unIdLivre): array
    {
        // Définir la chaine SQL
        //$chaineSQL = 'SELECT auteur_id FROM livres_auteurs WHERE livre_id=' . $unIdLivre;
        $chaineSQL = 'SELECT * FROM livres_auteurs WHERE livre_id=' . $unIdLivre;
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        return $requetePreparee->fetchAll(PDO::FETCH_CLASS, 'App\Modeles\LivreAuteur');
    }
}