<!DOCTTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>La Pastèque</title>
    @if(isset($_GET['controleur'])&& isset($_GET['action']))
        @if($_GET['controleur']==='livre' && $_GET['action']==='index' )
            <script defer type="text/javascript" src="liaisons/js/tri.js"></script>
            @endif
        @endif
    <script defer type="text/javascript" src="liaisons/js/menu.js"></script>
</head>
<body>
<header >
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




