@extends('gabarit')

@section('contenu')
    <div class="conteneur conteneur_formulaire from_creation">
    <form action="" method="post">
        <h2 class="h2Compte">Création d'un compte</h2>
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required>
        <span class="error" hidden></span>
        <br>

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <span class="error" hidden></span>
        <br>

        <label for="email">Adresse E-Mail:</label>
        <input type="email" id="email" name="email" required>
        <span class="error" hidden></span>
        <br>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
        <span class="error" hidden></span>
        <br>

        <label for="password">Confirmer le mot de passe:</label>
        <input type="password" id="password" name="password" required>
        <span class="error" hidden></span>
        <br>

        <button class="btnPrimaire" type="submit">Créer un compte</button>
    </form>
    </div>
@endsection