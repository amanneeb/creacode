<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Pastèque</title>
    @if(isset($_GET['controleur'])&& isset($_GET['action']))
        @if($_GET['controleur']==='livre' && $_GET['action']==='index' )
            <script defer src="liaisons/js/tri.js"></script>
            <script defer src="liaisons/js/affichage_grille_liste.js"></script>
            <script defer src="liaisons/js/controler_affichage.js"></script>
            <script defer src="liaisons/js/ajoutClasseSelectedGenre.js"></script>
        @elseif($_GET['controleur']==='artiste' && $_GET['action']==='index' )
            <script defer src="liaisons/js/affichage_grille_liste.js"></script>
        @elseif($_GET['controleur']==='livre' && $_GET['action']==='fiche' )
            <script defer src="liaisons/js/onglets.js"></script>
            <script defer src="liaisons/js/ajoutPanier.js"></script>
            <script defer src="liaisons/js/modaleLivre.js"></script>
        @endif
    @endif
    <script src="https://kit.fontawesome.com/5482d63b2f.js" crossorigin="anonymous"></script>
    <script defer src="liaisons/js/menu.js"></script>
    <link rel="stylesheet" href="liaisons/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>
<header>
    @include('fragments.entete')
</header>

<main>
    @yield('contenu')
</main>

<footer>
    @include('fragments.pieddepage')
</footer>
</body>
</html>




