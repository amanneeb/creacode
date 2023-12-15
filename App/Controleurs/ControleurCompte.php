<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;
use App\Modeles\Article;
use App\Modeles\Panier;
use App\Utilitaires\Validation;

class ControleurCompte
{
    public function __construct()
    {

    }

    public function connexion($idSession)
    {
        //Nombre d'article dans le panier
        $panier = Panier::trouverParIdSession($idSession);
        $nbArticle = sizeof(Article::trouverParPanier($panier->getId()));

        $tDonnees = ['nbArticle' => $nbArticle];
        echo App::getBlade()->run("compte.connexion", $tDonnees);
    }

    public function creation($idSession)
    {
        //Nombre d'article dans le panier
        $panier = Panier::trouverParIdSession($idSession);
        $nbArticle = sizeof(Article::trouverParPanier($panier->getId()));

        if (isset($_SESSION['valider'])) {
            $tValidation = $_SESSION['valider'];
        } else {
            $tValidation = null;
        }

        $tDonnees = ["tValidation" => $tValidation, 'nbArticle' => $nbArticle];
        echo App::getBlade()->run("compte.creation", $tDonnees);
    }


    public function inserer(): void
    {
        // Récupérer le contenu des messages en format JSON
        $contenuBruteFichierJson = file_get_contents("../ressources/messagesInscriptionValidation.json");
        // Convertir en tableau associatif
        $tMessagesJson = json_decode($contenuBruteFichierJson, true);

        $tValidation = [];

        $tValidation['prenom'] = Validation::validerString('prenom', $_POST['prenom'], $tMessagesJson, "[a-zA-ZÀ-ÿ -]+");
        $tValidation['nom'] = Validation::validerString('nom', $_POST['nom'], $tMessagesJson, "[a-zA-ZÀ-ÿ -]+");
        $tValidation['courriel'] = Validation::validerString('courriel', $_POST['courriel'], $tMessagesJson, ".+\@.+\..+");
        $tValidation['password'] = Validation::validerString('password', $_POST['password'], $tMessagesJson, "(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$");
        $tValidation['passwordConf'] = Validation::validerMDP('password', $_POST['passwordConf'], $tMessagesJson, $_POST['password']);


        $tValide = [];
        foreach ($tValidation as $k => $v) {

            array_push($tValide, $v['valide']);

            if (in_array('false', $tValide, true)) {
                header('Location:index.php?controleur=compte&action=creation');

            } else {
                header('Location:index.php');
            }

        }
        $_SESSION['valider'] = $tValidation;

    }

}