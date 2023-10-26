<!DOCTTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./liaisons/css/styles.css">
    <script defer type="text/javascript" src="liaisons/js/tri.js"></script>
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




