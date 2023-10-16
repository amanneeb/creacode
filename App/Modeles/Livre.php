<?php
declare(strict_types=1);
namespace App\Modeles;

//Cas d'importation
use \PDO\PDOStatement;
use \PDO;
use App\App;

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

    public function getId():int{
        return $this->id;
    }

    public function getIsbn_papier():int{
        return $this->isbn_papier;
    }

    public function getIsbn_pdf():int{
        return $this->isbn_pdf;
    }

    public function getIsbn_epub():int{
        return $this->isbn_epub;
    }
    public function getUrl_audio():string{
        return $this->url_audio;
    }

    public function getTitre():string{
        return $this->titre;
    }

    public function getLe_livre():string{
        return $this->le_livre;
    }

    public function getArguments_commerciaux():string{
        return $this->arguments_commerciaux;
    }

    public function getStatut():int{
        return $this->statut;
    }
    public function getPagination():int{
        return $this->pagination;
    }
    public function getAge_min():int{
        return $this->age_min;
    }
    public function getFormat():string{
        return $this->format;
    }
    public function getTirage():float{
        return $this->tirage;
    }
    public function getPrix_can():float{
        return $this->prix_can;
    }
    public function getPrix_euro():int{
        return $this->prix_euro;
    }
    public function getDate_parution_quebec():string{
        return $this->date_parution_quebec;
    }
    public function getDate_parution_france():string{
        return $this->date_parution_france;
    }
    public function getCategorie_id():int{
        return $this->categorie_id;
    }
    public function getType_impression_id():int{
        return $this->type_impression_id;
    }
    public function getType_couverture_id():int{
        return $this->type_couverture_id;
    }
//    public function getActiviteAssociee($pdo):Activites{
//        return Activites::trouverParId($this->activite_id, $pdo);
//    }
//    public function getVilleAssociee($pdo):Ville{
//        return Ville::trouverParId($this->ville_id, $pdo);
//    }

    public static function compterNbLivres():int{
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
    public static function paginer(int $unNoDePage, int $unNbrParPage):array{

        $index=5*($unNoDePage);

        // Définir la chaine SQL
        $chaineSQL = 'SELECT titre, prix_can FROM livres LIMIT :index,'. $unNbrParPage;
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam(':index', $index, PDO::PARAM_INT);
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat sous forme de tableau
      $livresQuiApparaissent = $requetePreparee->fetchAll(PDO::FETCH_CLASS, 'App\Modeles\Livre');
//      var_dump($livresQuiApparaissent);
   return $livresQuiApparaissent;
    }

}