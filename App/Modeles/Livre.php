<?php
declare(strict_types=1);

namespace App\Modeles;

//Cas d'importation
use \PDO;
use \PDO\PDOStatement;
use App\App;

//Classe modèle
class Livre
{
    private $id = 0;
    private string $isbn_papier = '';
    private string $isbn_pdf = '';
    private string $isbn_epub = '';
    private $url_audio = null;
    private string $titre = '';
    private string $le_livre = '';
    private string $arguments_commerciaux = '';
    private int $statut = 0;
    private int $pagination = 0;
    private int $age_min = 0;
    private string $format = '';
    private int $tirage = 0;
    private float $prix_can = 0;
    private float $prix_euro = 0;
    private string $date_parution_quebec = '';
    private string $date_parution_france = '';
    private int $categorie_id = 0;
    private int $type_impression_id = 0;
    private int $type_couverture_id = 0;

    public function __construct()
    {

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsbn_papier(): string
    {
        return $this->isbn_papier;
    }

    public function getIsbn_pdf(): string
    {
        return $this->isbn_pdf;
    }

    public function getIsbn_epub(): string
    {
        return $this->isbn_epub;
    }


    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getLe_livre(): string
    {
        return $this->le_livre;
    }

    public function getArguments_commerciaux(): string
    {
        return $this->arguments_commerciaux;
    }

    public function getStatut(): int
    {
        return $this->statut;
    }

    public function getPagination(): int
    {
        return $this->pagination;
    }

    public function getAge_min(): int
    {
        return $this->age_min;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function getTirage(): float
    {
        return $this->tirage;
    }

    public function getPrix_can(): float
    {
        return $this->prix_can;
    }

    public function getPrix_euro(): int
    {
        return $this->prix_euro;
    }

    public function getDate_parution_quebec(): string
    {
        return $this->date_parution_quebec;
    }

    public function getDate_parution_france(): string
    {
        return $this->date_parution_france;
    }

    public function getCategorie_id(): int
    {
        return $this->categorie_id;
    }

    public function getType_impression_id(): int
    {
        return $this->type_impression_id;
    }

    public function getType_couverture_id(): int
    {
        return $this->type_couverture_id;
    }
    public function getLivresAuteursAssocies():array{
        return LivreAuteur::trouverParLivre($this->id);
    }


    public static function compterNbLivres(): int{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT COUNT(*) as nbTotal FROM livres';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_OBJ);
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $nbTotalLivres = $requetePreparee->fetch();
        return $nbTotalLivres->nbTotal;
    }

    public static function paginer(int $unNoDePage, int $unNbrParPage, int $categorieRecherchee): array{

        $index = 10 * ($unNoDePage);

        // Définir la chaine SQL
        if ($categorieRecherchee==0){
        $chaineSQL = 'SELECT * FROM livres LIMIT :index,' . $unNbrParPage;
        }else{
            $chaineSQL = 'SELECT * FROM livres WHERE categorie_id=:idCategorie LIMIT :index,' . $unNbrParPage;
        }
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam(':index', $index, PDO::PARAM_INT);
        $requetePreparee->bindParam(':idCategorie', $categorieRecherchee, PDO::PARAM_INT);
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat sous forme de tableau
        return $requetePreparee->fetchAll(PDO::FETCH_CLASS, 'App\Modeles\Livre');
    }

    public static function trouverParId(int $unIdLivre): Livre{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM livres WHERE id=:idLivre';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam(':idLivre', $unIdParticipant, PDO::PARAM_INT);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Livre');
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        return $requetePreparee->fetch();
    }
//    public static function filtrerParCategorie(int $unIdCategorie): array{
//        // Définir la chaine SQL
//        $chaineSQL = 'SELECT * FROM livres WHERE $categorie_id=:idCategorie';
//        // Préparer la requête (optimisation)
//        $requetePreparee = App::getPDO()->prepare($chaineSQL);
//        // BindParam
//        $requetePreparee->bindParam(':idCategorie', $unIdCategorie, PDO::PARAM_INT);
//        // Exécuter la requête
//        $requetePreparee->execute();
//        // Récupérer le résultat
//        return $requetePreparee->fetchAll(PDO::FETCH_CLASS, 'App\Modeles\Livre');
//    }
}