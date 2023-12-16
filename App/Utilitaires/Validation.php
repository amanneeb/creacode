<?php

namespace App\Utilitaires;

class Validation
{
    public function __construct()
    {

    }
    //validation champ texte
    public static function validerString($nom, $valeur, $message, $reg){
        $regString = '/'. $reg . '/';
        if(preg_match($regString, $valeur)) {
            $tString = ['valeur' => $valeur, 'valide' => 'true', 'message' => 'null'];
        }else{
            if($valeur === ""){
                $tString = ['valeur' => $valeur, 'valide' => 'false', 'message' => $message[$nom]['vide']];
            }else{
                $tString = ['valeur' => $valeur, 'valide' => 'false', 'message' => $message[$nom]['pattern']];
            }
        }
        return $tString;
    }

    //valider mot de passe identique
    public static function validerMDP($nomConf, $valeur, $message, $valeurPasswordInitial){
        if($valeur === $valeurPasswordInitial) {
            $tMdpConf = ['valeur' => $valeur, 'valide' => 'true', 'message' => 'null'];
        }else{
            if($valeur === ""){
                $tMdpConf = ['valeur' => $valeur, 'valide' => 'false', 'message' => $message[$nomConf]['videConf']];
            }else{
                $tMdpConf = ['valeur' => $valeur, 'valide' => 'false', 'message' => $message[$nomConf]['confirmation']];
            }
        }
        return $tMdpConf;
    }

}