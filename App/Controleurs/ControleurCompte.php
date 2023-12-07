<?php
declare(strict_types=1);
namespace App\Controleurs;

use App\App;
use App\Utilitaires\Validation;

class ControleurCompte
{
//    private $tMessagesJson =null;
    public function __construct()
    {
//        $contenuBruteFichierJson = file_get_contents("../ressources/messagesInscriptionValidation.json");
//        // Convertir en tableau associatif
//        $this->tMessagesJson = json_decode($contenuBruteFichierJson, true);

    }
    public function connexion(){
//        $tValidation = $_SESSION['valider'];
//        $tDonnees = ["tValidation" => $tValidation];
        echo App::getBlade()->run("compte.connexion");
    }
    public function creation(){
//        var_dump($this->tMessagesJson);
        $tValidation = $_SESSION['valider'];
//        $contenuBruteFichierJson = file_get_contents("../ressources/messagesInscriptionValidation.json");
//        // Convertir en tableau associatif
//        $tMessagesJson = json_decode($contenuBruteFichierJson, true);

//        $tValide = [];
//        foreach ($tValidation as $k => $v) {
//
//            array_push($tValide,$v['valide'] );
//
//                if (in_array('false', $tValide, true)) {
//                    echo 'non';
//
//                } else {
//                    echo 'ok';
//
//                }
//
//        }




//            $tValidation = $_SESSION['valider'];
//        $_SESSION['valider'] = null;
        $tDonnees = ["tValidation" => $tValidation];
        echo App::getBlade()->run("compte.creation", $tDonnees);
    }


    public function inserer(): void
    {
        // Récupérer le contenu des messages en format JSON
        $contenuBruteFichierJson = file_get_contents("../ressources/messagesInscriptionValidation.json");
        // Convertir en tableau associatif
        $tMessagesJson = json_decode($contenuBruteFichierJson, true);

        $tValidation=[];

        $tValidation['prenom']=Validation::validerString('prenom', $_POST['prenom'], $tMessagesJson, "[a-zA-ZÀ-ÿ -]+");
        $tValidation['nom']=Validation::validerString('nom', $_POST['nom'], $tMessagesJson, "[a-zA-ZÀ-ÿ -]+");
        $tValidation['courriel']=Validation::validerString('courriel', $_POST['courriel'], $tMessagesJson, ".+\@.+\..+");
        $tValidation['password']=Validation::validerString('password', $_POST['password'], $tMessagesJson, "(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$");
        $tValidation['passwordConf']=Validation::validerMDP('password', $_POST['passwordConf'], $tMessagesJson, $_POST['password'] );


        $tValide = [];
        foreach ($tValidation as $k => $v) {

            array_push($tValide,$v['valide'] );

            if (in_array('false', $tValide, true)) {
                echo 'non';
                header('Location:index.php?controleur=compte&action=creation');

            } else {
                echo 'ok';
                header('Location:index.php');
            }

        }

//        if($tValidation['password']['valide']===true){
//            header('Location:index.php');
//        }else{
//            header('Location:index.php?controleur=compte&action=creation');
//        }

//print_r($tValidation);
        $_SESSION['valider'] = $tValidation;

    }

}