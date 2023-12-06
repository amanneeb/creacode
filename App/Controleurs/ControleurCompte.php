<?php
declare(strict_types=1);
namespace App\Controleurs;

use App\App;
use App\Utilitaires\Validation;

class ControleurCompte
{
    public function __construct()
    {
    }
    public function connexion(){
        $tValidation = $_SESSION['valider'];
        $tDonnees = ["tValidation" => $tValidation];
        echo App::getBlade()->run("compte.connexion", $tDonnees);
    }
    public function creation(){
        $tValidation = $_SESSION['valider'];
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


    foreach ($tValidation as $k => $v) {
        var_dump($v['valide']);
        if($v['valide']==='true'){
            echo'ok';
        }else{
            echo 'non';
            header('Location:index.php?controleur=compte&action=creation');
        }
    }

//print_r($tValidation);
    $_SESSION['valider'] = $tValidation;

}

public function connecter():void{
    // Récupérer le contenu des messages en format JSON
    $contenuBruteFichierJson = file_get_contents("../ressources/lang/fr_CA.UTF-8/messagesInscriptionValidation.json");
    // Convertir en tableau associatif
    $tMessagesJson = json_decode($contenuBruteFichierJson, true);

    $tValidation=[];

    $tValidation['prenom']=Validation::validerString('prenom', $_POST['prenom'], $tMessagesJson, "[a-zA-ZÀ-ÿ -]+");
    $tValidation['nom']=Validation::validerString('nom', $_POST['nom'], $tMessagesJson, "[a-zA-ZÀ-ÿ -]+");


    foreach ($tValidation as $k => $v) {
        var_dump($v['valide']);
        if($v['valide']==='true'){
            echo'ok';
        }else{
            echo 'non';
            header('Location:index.php?controleur=inscription&action=creer');
        }
    }

//print_r($tValidation);
    $_SESSION['valider'] = $tValidation;
}
}