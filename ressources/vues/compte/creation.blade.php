@extends('gabarit')

@section('contenu')
    <div class="conteneur conteneur_formulaire form_creation">
        <h2 class="h2Compte">Création d'un compte</h2>
    <form action="" method="post">
        <label for="prenom">Prénom:</label><br>
        <input type="text" id="prenom" name="prenom" required>
        <span class="error" hidden></span>
        <br>

        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" required>
        <span class="error" hidden></span>
        <br>

        <label for="email">Adresse E-Mail:</label><br>
        <input type="email" id="email" name="email" required>
        <span class="error" hidden></span>
        <br>

        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password" required>
        <span class="error" hidden></span>
        <br>

        <label for="password">Confirmer le mot de passe:</label><br>
        <input type="password" id="password" name="password" required>
        <span class="error" hidden></span>
        <br>

        <button class="btnPrimaire" type="submit">Créer un compte</button>
    </form>
    </div>
@endsection