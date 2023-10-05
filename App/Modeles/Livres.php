<?php
declare(strict_types=1);
namespace App\Modeles;

//Cas d'importation
use \PDO\PDOStatement;
use \PDO;

//Classe modèle
class Livre
{
    private $id = 0 ;
    private int $isbn_papier = 0;
    private int $isbn_pdf = 0;
    private int $isbn_epub = 0;
    private string $url_audio = '';
    private string $titre = '';
    private string $le_livre = '';
    private string $arguments_commerciaux = '';
    private int $statut = 0;
    private int $pagination = 0;
    private int $age_min = 0;
    private string $format = '';



    public function __construct()
    {

    }

    public function getId():int{
        return $this->id;
    }

    public function getNom():string{
        return $this->nom;
    }

    public function getPrenom():string{
        return $this->prenom;
    }

    public function getPrenomNom():string{
        return $this->prenom . " " . $this->nom;
    }
    public function getSexe():string{
        return $this->sexe;
    }

    public function getNaissance():string{
        return $this->naissance;
    }

    public function getTelephone():string{
        return $this->telephone;
    }

    public function getActiviteId():int{
        return $this->activite_id;
    }

    public function getVilleId():int{
        return $this->ville_id;
    }
    public function getAge():string{
        $naissance= $this->naissance;
        $aujourdui=date("Y-m-d");
        $diff=date_diff(date_create($naissance), date_create($aujourdui));
        return $diff->format('%y');
    }
    public function getActiviteAssociee($pdo):Activites{
        return Activites::trouverParId($this->activite_id, $pdo);
    }
    public function getVilleAssociee($pdo):Ville{
        return Ville::trouverParId($this->ville_id, $pdo);
    }
    public static function trouverTout($pdo): array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM participants';
        // Préparer la requête (optimisation)
        $requetePreparee = $pdo->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Participant');
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $participants = $requetePreparee->fetchAll();
        return $participants;
    }
    public static function compterNbParticipants($pdo):int{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT COUNT(*) as nbTotal FROM participants';
        // Préparer la requête (optimisation)
        $requetePreparee = $pdo->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_OBJ);
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $nbTotalParticipants = $requetePreparee->fetch();
        return $nbTotalParticipants->nbTotal;
    }

    public static function trouverParId(int $unIdParticipant, $pdo):Participant{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM participants WHERE id=:idParticipant';
        // Préparer la requête (optimisation)
        $requetePreparee = $pdo->prepare($chaineSQL);

        // BindParam
        $requetePreparee->bindParam(':idParticipant', $unIdParticipant,PDO::PARAM_INT );

        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Participant');
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        return $requetePreparee->fetch();
    }
    public static function trouverParVille(int $unIdVille, $pdo):array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM participants WHERE ville_id='.$unIdVille;
        // Préparer la requête (optimisation)
        $requetePreparee = $pdo->prepare($chaineSQL);
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat sous forme de tableau
        return $requetePreparee->fetchAll(PDO::FETCH_CLASS, 'App\Modeles\Participant');
    }
    public static function trouverParActivite(int $unIdActivite, $pdo):array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM participants WHERE activite_id='.$unIdActivite;
        // Préparer la requête (optimisation)
        $requetePreparee = $pdo->prepare($chaineSQL);
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat sous forme de tableau
        return $requetePreparee->fetchAll(PDO::FETCH_CLASS, 'App\Modeles\Participant');
    }

}