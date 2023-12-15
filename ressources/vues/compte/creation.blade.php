@extends('gabarit')

@section('contenu')
    {{--    Formulaire de creation de compte--}}
    <div class="conteneur conteneur_formulaire form_creation">
        <h2 class="h2Compte">Création d'un compte</h2>
        <form action="index.php?controleur=compte&action=inserer" method="post" novalidate>
            <div class="divFrom">
                <label for="prenom">Prénom:</label><br>
                <input type="text" id="prenom" name="prenom" maxlength="20" pattern="[a-zA-ZÀ-ÿ -]+"
                       @if($tValidation !== null)
                       value="{{$tValidation['prenom']['valeur']}}"
                       @endif required><br>
                @if($tValidation !== null)
                    @if($tValidation['prenom']['valide'] === 'false')
                        <span class="error"><i class="fa-solid fa-circle-xmark" style="color: #8b0000;"></i>{{$tValidation['prenom']['message']}}</span>
                    @endif
                @endif
            </div>
            <br>

            <div class="divFrom">
                <label for="nom">Nom:</label><br>
                <input type="text" id="nom" name="nom" maxlength="20" pattern="[a-zA-ZÀ-ÿ -]+"
                       @if($tValidation !== null)
                       value="{{$tValidation['nom']['valeur']}}"
                       @endif required><br>
                @if($tValidation !== null)
                    @if($tValidation['nom']['valide'] === 'false')
                        <span class="error"><i class="fa-solid fa-circle-xmark" style="color: #8b0000;"></i>{{$tValidation['nom']['message']}}</span>
                    @endif
                @endif
            </div>
            <br>

            <div class="divFrom">
                <label for="courriel">Adresse E-Mail:</label><br>
                <input type="email" id="courriel" name="courriel" maxlength="30"
                       pattern="[\w-\.]+@([\w-]+\.)+[\w-]{2,4}" @if($tValidation !== null)
                       value="{{$tValidation['courriel']['valeur']}}"
                       @endif required><br>
                @if($tValidation !== null)
                    @if($tValidation['courriel']['valide'] === 'false')
                        <span class="error"><i class="fa-solid fa-circle-xmark" style="color: #8b0000;"></i>{{$tValidation['courriel']['message']}}</span>
                    @endif
                @endif
            </div>
            <br>

            <div class="divFrom">
                <label for="password">Mot de passe:</label><br>
                <input type="password" id="password" name="password" minlength="8" maxlength="20"
                       pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                       @if($tValidation !== null)
                       value="{{$tValidation['password']['valeur']}}"
                       @endif required><br>
                @if($tValidation !== null)
                    @if($tValidation['password']['valide'] === 'false')
                        <span class="error"><i class="fa-solid fa-circle-xmark" style="color: #8b0000;"></i>{{$tValidation['password']['message']}}   </span>
                    @endif
                @endif
            </div>
            <br>

            <div class="divFrom">
                <label for="passwordConf">Confirmer le mot de passe:</label><br>
                <input type="password" id="passwordConf" minlength="8" maxlength="20" name="passwordConf"
                       @if($tValidation !== null)
                       value="{{$tValidation['passwordConf']['valeur']}}"
                       @endif required><br>
                @if($tValidation !== null)
                    @if($tValidation['passwordConf']['valide'] === 'false')
                        <span class="error"><i class="fa-solid fa-circle-xmark" style="color: #8b0000;"></i>{{$tValidation['passwordConf']['message']}}</span>
                    @endif
                @endif
            </div>
            <br>

            <button class="btnPrimaire" type="submit">Créer un compte</button>
        </form>
    </div>
@endsection