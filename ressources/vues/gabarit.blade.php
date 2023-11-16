<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(isset($_GET['controleur'])&& isset($_GET['action']))
        @if($_GET['controleur']==='livre' && $_GET['action']==='index' )
            <title>Nos Livres | La Pastèque </title>
            <meta name="description"
                  content="Découvrez notre librairie en ligne chez La Pastèque. Explorez notre collection unique de livres à vendre, offrant une palette littéraire variée. Des classiques intemporels aux dernières nouveautés, plongez dans des récits captivants. Trouvez votre prochaine lecture chez La Pastèque. ">
            <script defer src="liaisons/js/tri.js"></script>
            <script defer src="liaisons/js/affichage_grille_liste.js"></script>
            <script defer src="liaisons/js/controler_affichage.js"></script>
            <script defer src="liaisons/js/ajoutClasseSelectedGenre.js"></script>
        @elseif($_GET['controleur']==='artiste' && $_GET['action']==='index' )
            <title>Auteurs | La Pastèque </title>
        <meta name="description"
        content="Découvrez nos auteurs chez La Pastèque. Plongez dans des histoires variées, des plumes émergentes aux maîtres confirmés. Explorez la richesse littéraire de chaque écrivain. Votre prochaine lecture vous attend parmi nos pages d'auteurs. La Pastèque, votre destination littéraire incontournable. ">
            <script defer src="liaisons/js/affichage_grille_liste.js"></script>
        @elseif($_GET['controleur']==='livre' && $_GET['action']==='fiche' )
            <title> {{$lesLivres->getTitre()}} | Livres | La Pastèque </title>
            <meta name="description"
                  content="Découvrez le livre {{$lesLivres->getTitre()}} chez La Pastèque. Plongez dans cette œuvre captivante, mêlant intrigue et émotion.  Disponible dès maintenant pour enrichir votre bibliothèque. Achetez votre exemplaire sur La Pastèque.">
            <script defer src="liaisons/js/onglets.js"></script>
            <script defer src="liaisons/js/ajoutPanier.js"></script>
            <script defer src="liaisons/js/modaleLivre.js"></script>
        @elseif($_GET['controleur']==='artiste' && $_GET['action']==='fiche' )
            <meta name="description"
            content="Découvrez l'auteur {{$artistes->getPrenomNom()}}  chez La Pastèque. Explorez sa carrière littéraire, ses œuvres marquantes, et plongez dans l'univers captivant de sa plume. Des débuts prometteurs aux chef-d'œuvres incontournables, chaque page dévoile une histoire unique. Ajoutez l'essence de {{$artistes->getPrenomNom()}} à votre collection littéraire. ">
            <title> {{$artistes->getPrenomNom()}} | Artistes | La Pastèque </title>
        @endif
    @else
        <title>La Pastèque | Techniques d’intégration multimédia – Cégep de Sainte-Foy</title>
    @endif
    <meta name="keywords" content="Livres à vendre en ligne, Littérature diversifiée, Auteurs renommés, Nouveautés littéraires, Librairie en ligne francophone">
    <script src="https://kit.fontawesome.com/5482d63b2f.js" crossorigin="anonymous"></script>
    <script defer src="liaisons/js/menu.js"></script>
    <link rel="stylesheet" href="liaisons/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>
<header role="banner">
    @include('fragments.entete')
</header>

<main>
    @yield('contenu')
</main>

<footer role="contentinfo">
    @include('fragments.pieddepage')
</footer>
</body>
</html>




