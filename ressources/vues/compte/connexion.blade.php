@extends('gabarit')

@section('contenu')
    <form action="" method="post">
        <h2>Connexion</h2>
        <label for="email">Adresse E-Mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Connexion</button>
    </form>
@endsection