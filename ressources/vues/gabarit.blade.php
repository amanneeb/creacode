<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>La Pastèque</title>
    @if(isset($_GET['controleur'])&& isset($_GET['action']))
        @if($_GET['controleur']==='livre' && $_GET['action']==='index' )
            <script defer src="liaisons/js/tri.js"></script>
            <script defer src="liaisons/js/ajout_active_livres.js"></script>
        @elseif($_GET['controleur']==='livre' && $_GET['action']==='fiche' )
            <script defer src="liaisons/js/onglets.js"></script>
        @endif
    @endif
    <script defer src="liaisons/js/menu.js"></script>
    <link rel="stylesheet" href="liaisons/css/styles.css">
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




