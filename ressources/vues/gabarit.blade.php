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
        @elseif($_GET['controleur']==='artiste' && $_GET['action']==='index' )
            <script defer src="liaisons/js/affichage_grille_liste.js"></script>
        @elseif($_GET['controleur']==='livre' && $_GET['action']==='fiche' )
            <title>La Pastèque | Livres | {{$lesLivres->getTitre()}}</title>
            <meta name="description" content="Description du livre {{$lesLivres->getTitre()}} écrit par @foreach($lesLivres->getLivresAuteursAssocies() as $auteurs){{$auteurs->getAuteurAssocie()->getPrenom()." ". $auteurs->getAuteurAssocie()->getNom()." "}}@endforeach">
            <meta name="keywords" content="livre, fiche, librairie, La Pastèque, {{$lesLivres->getTitre()}},
            @foreach($lesLivres->getLivresAuteursAssocies() as $auteurs)
            {{$auteurs->getAuteurAssocie()->getPrenom()." ". $auteurs->getAuteurAssocie()->getNom().", "}}
            @endforeach">
            <script defer src="liaisons/js/onglets.js"></script>
            <script defer src="liaisons/js/ajoutPanier.js"></script>
            <script defer src="liaisons/js/modaleLivre.js"></script>
        @elseif($_GET['controleur']==='artiste' && $_GET['action']==='fiche' )
            <title>La Pastèque | Auteurs | {{$auteurs->getPrenom()}} {{$auteurs->getNom()}}</title>
            <meta name="description" content="Fiche auteur de {{$auteurs->getPrenom()}} {{$auteurs->getNom()}}">
            <meta name="keywords" content="auteur, librairie, La Pastèque, {{$auteurs->getPrenom()}} {{$auteurs->getNom()}}">
        @endif
    @endif
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




