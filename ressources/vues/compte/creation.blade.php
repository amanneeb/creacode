@extends('gabarit')

@section('contenu')
    <div class="conteneur conteneur_formulaire form_creation">
        <h2 class="h2Compte">Création d'un compte</h2>
    <form action="index.php?controleur=compte&action=inserer" method="post" novalidate>
        <label for="prenom">Prénom:</label><br>
        <input type="text" id="prenom" name="prenom" pattern="[a-zA-ZÀ-ÿ -]+" @if($tValidation !== null)
        value="{{$tValidation['prenom']['valeur']}}"
               @endif required>
        @if($tValidation !== null)
            @if($tValidation['prenom']['valide'] === 'false')
                <span class="error">{{$tValidation['prenom']['message']}}</span>
            @endif
        @endif
        <br>

        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" pattern="[a-zA-ZÀ-ÿ -]+" @if($tValidation !== null)
        value="{{$tValidation['nom']['valeur']}}"
               @endif required>
        @if($tValidation !== null)
            @if($tValidation['nom']['valide'] === 'false')
        <span class="error">{{$tValidation['nom']['message']}}</span>
            @endif
        @endif
        <br>

        <label for="courriel">Adresse E-Mail:</label><br>
        <input type="email" id="courriel" name="courriel" pattern="[\w-\.]+@([\w-]+\.)+[\w-]{2,4}" @if($tValidation !== null)
        value="{{$tValidation['courriel']['valeur']}}"
               @endif required>
        @if($tValidation !== null)
            @if($tValidation['courriel']['valide'] === 'false')
                <span class="error">{{$tValidation['courriel']['message']}}</span>
            @endif
        @endif
        <br>

        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" @if($tValidation !== null)
        value="{{$tValidation['password']['valeur']}}"
               @endif required>
        @if($tValidation !== null)
            @if($tValidation['password']['valide'] === 'false')
                <span class="error">{{$tValidation['password']['message']}}</span>
            @endif
        @endif
        <br>

        <label for="passwordConf">Confirmer le mot de passe:</label><br>
        <input type="password" id="passwordConf" name="passwordConf" @if($tValidation !== null)
        value="{{$tValidation['passwordConf']['valeur']}}"
               @endif required>
        @if($tValidation !== null)
            @if($tValidation['passwordConf']['valide'] === 'false')
                <span class="error">{{$tValidation['passwordConf']['message']}}</span>
            @endif
        @endif
        <br>

        <button class="btnPrimaire" type="submit">Créer un compte</button>
    </form>
    </div>
@endsection