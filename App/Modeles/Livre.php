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
    private /*string*/ $url_audio = '';
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

    public function getUrl_audio(): ?string
    {
        return $this->url_audio;
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

    public function getPrix_euro(): float
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

    public function getLivresAuteursAssocies(): array
    {
        return LivreAuteur::trouverParLivre($this->id);
    }

    public function getCategorieAssociee(): Categories
    {
        return Categories::trouverParId($this->categorie_id);
    }

    public function getImpressionAssociee(): Impression
    {
        return Impression::trouverParId($this->type_impression_id);
    }

    public function getCouvertureAssociee(): Couverture
    {
        return Couverture::trouverParId($this->type_couverture_id);
    }

    public function getReconnaissance(): array
    {
        return Reconnaissance::trouverParLivre($this->id);
    }



    public static function compterNbLivres(int $categorieRecherchee): int
    {
        // Définir la chaine SQL
        if ($categorieRecherchee == 0) {
            $chaineSQL = 'SELECT COUNT(*) as nbTotal FROM livres';
        } else {
            $chaineSQL = 'SELECT COUNT(*) as nbTotal FROM livres WHERE categorie_id=' . $categorieRecherchee;
        }
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




    public static function paginer(int $unNoDePage, int $unNbrParPage, $tri): array
    {
        $index = 10 * ($unNoDePage);

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM livres';
        switch ($tri) {
            case 'prixcroissant':
                $chaineSQL .= ' ORDER BY prix_can ASC';
                break;
            case 'prixdecroissant':
                $chaineSQL .= ' ORDER BY prix_can DESC';
                break;
            default:
                $chaineSQL .= ' ORDER BY date_parution_quebec DESC';
                break;
        }

        $chaineSQL .= ' LIMIT :index, :limit';


        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam(':index', $index, PDO::PARAM_INT);
        $requetePreparee->bindParam(':limit', $unNbrParPage, PDO::PARAM_INT);
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat sous forme de tableau
        return $requetePreparee->fetchAll(PDO::FETCH_CLASS, 'App\Modeles\Livre');

    }

    public static function paginerParCategorie(int $unNoDePage, int $unNbrParPage, int $categorieRecherchee, $tri): array
    {
        $index = $unNbrParPage * $unNoDePage;
        $chaineSQL = '';
        switch ($tri) {
            case 'prixcroissant':
                $chaineSQL .= ' SELECT * FROM livres WHERE categorie_id =:idCategorie ORDER BY prix_can ASC LIMIT :index, :limit';
                break;
            case 'prixdecroissant':
                $chaineSQL .= ' SELECT * FROM livres WHERE categorie_id =:idCategorie ORDER BY prix_can DESC LIMIT :index, :limit';
                break;
            case 'aparaitre':
                $chaineSQL .= ' SELECT * FROM livres WHERE categorie_id =:idCategorie ORDER BY date_parution_quebec DESC LIMIT :index, :limit';
                break;
            default:
                $chaineSQL .= ' SELECT * FROM livres WHERE categorie_id =:idCategorie AND date_parution_quebec <= CURDATE() ORDER BY date_parution_quebec DESC LIMIT :index, :limit';
                break;
        }

        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam(':idCategorie', $categorieRecherchee, PDO::PARAM_INT);
        $requetePreparee->bindParam(':index', $index, PDO::PARAM_INT);
        $requetePreparee->bindParam(':limit', $unNbrParPage, PDO::PARAM_INT);
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat sous forme de tableau
        return $requetePreparee->fetchAll(PDO::FETCH_CLASS, 'App\Modeles\Livre');

    }

    public static function trouverParId(int $idLivre): Livre
    {
        $chaineSQL = "SELECT * FROM livres WHERE id=:idLivre";

        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":idLivre", $idLivre, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Livre");
        $requetePreparee->execute();
        $livres = $requetePreparee->fetch();
        return $livres;
    }

    public static function trouverParCategorie($idCategorie): array
    {
        $chaineSQL = "SELECT titre FROM livres WHERE categorie_id =:idCategorie";
        $intId = (int)$idCategorie;
        //Bind
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":idCategorie", $intId, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Livre");
        $requetePreparee->execute();
        $categorie = $requetePreparee->fetchAll();

        return $categorie;
    }


    public static function compterParCategorie($idCategorie): int
    {
        $chaineSql = "SELECT COUNT(*) AS totalCategorie FROM  livres
                        WHERE categorie_id=:idCategorie";
        $requetePreparee = App::getPDO()->prepare($chaineSql);
        $requetePreparee->bindParam(':idCategorie', $idCategorie, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_OBJ);
        $requetePreparee->execute();
        $nbLivres = $requetePreparee->fetch();

        //var_dump($nbLivres);
        return $nbLivres->totalCategorie;

    }

    public static function paginerAutre(int $unNoDePage, int $unNbParPage, int $idCategorie): array
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

        $chaineSql = "SELECT * FROM  livres
        WHERE categorie_id = :idCategorie
        LIMIT " . $indexDepart . ", " . $unNbParPage;

        $requetePreparee = App::getPDO()->prepare($chaineSql);
        $requetePreparee->bindParam(':idCategorie', $idCategorie, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_ASSOC);
        $requetePreparee->execute();
        $participantsAAfficher = $requetePreparee->fetchAll();

        return $participantsAAfficher;
    }


    public static function trouverParAuteur($idAuteur): array
    {
        $chaineSQL = "SELECT * FROM livres 
                        INNER JOIN livres_auteurs ON livres.id = livres_auteurs.livre_id
                        INNER JOIN auteurs ON auteurs.id = livres_auteurs.auteur_id
                        WHERE auteurs.id=:idAuteur";
        $intId = (int)$idAuteur;
        //Bind
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":idAuteur", $intId, PDO::PARAM_INT);
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Livre");
        $requetePreparee->execute();
        $livres = $requetePreparee->fetchAll();

        return $livres;
    }

    //ACCUEIL//

    public static function trouverNouveautes(): array
    {
        $subJours=strtotime('-4 years');
        $dateMoins14 = date('Y-m-d', $subJours);
        $dateNow = date('Y-m-d');


        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM livres WHERE livres.date_parution_quebec >= :date14 AND livres.date_parution_quebec <= :dateNow ORDER BY livres.date_parution_quebec DESC  LIMIT 3 ';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":date14", $dateMoins14, PDO::PARAM_STR);
        $requetePreparee->bindParam(":dateNow", $dateNow, PDO::PARAM_STR);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Livre');
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $nouveautes = $requetePreparee->fetchAll();
        return $nouveautes;
    }

    public static function trouverAParaitre(): array
    {
        $subJours=strtotime('+2 years');
        $datePlus28 = date('Y-m-d', $subJours);
        $dateNow = date('Y-m-d');


        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM livres WHERE livres.date_parution_quebec <= :date28 AND livres.date_parution_quebec > :dateNow ORDER BY livres.date_parution_quebec DESC  LIMIT 3 ';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        $requetePreparee->bindParam(":date28", $datePlus28, PDO::PARAM_STR);
        $requetePreparee->bindParam(":dateNow", $dateNow, PDO::PARAM_STR);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, 'App\Modeles\Livre');
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $aParaitre = $requetePreparee->fetchAll();
        return $aParaitre;
    }

}


