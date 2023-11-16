@extends('gabarit')

@section('contenu')
    <div class="conteneur conteneur_formulaire" id="contenu">
        <h2 class="h2reduit">Connexion</h2>
        <form action="index.php" method="post">
            <label for="email">Adresse E-Mail:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit" class="btnPrimaire">Connexion</button>
        </form>
        <p>Vous n'avez pas de compte?<a href="index.php?controleur=compte&action=creation"> S'inscire </a></p>
    </div>
@endsection