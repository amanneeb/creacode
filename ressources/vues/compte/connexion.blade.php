@extends('gabarit')

@section('contenu')
    {{--Formulaire de connexion--}}
    <div class="conteneur conteneur_formulaire form_creation" id="contenu">
        <h2 class="h2Compte">Connexion</h2>
        <form action="index.php" method="post">
            <label for="email">Adresse E-Mail:</label><br>
            <input type="email" id="email" name="email" maxlength="40" required><br>

            <label for="password">Mot de passe:</label><br>
            <input type="password" id="password" maxlength="20" name="password" required><br>
            <button type="submit" class="btnPrimaire">Connexion</button>
        </form>
        <p class="lien_creation">Vous n'avez pas de compte?<a href="index.php?controleur=compte&action=creation">
                S'inscire </a></p>
    </div>
@endsection