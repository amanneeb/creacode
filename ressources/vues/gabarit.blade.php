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
        @elseif($_GET['controleur']==='artiste' && $_GET['action']==='index' )
            <title>Auteurs | La Pastèque </title>
            <meta name="description"
            content="Découvrez nos auteurs chez La Pastèque. Plongez dans des histoires variées, des plumes émergentes aux maîtres confirmés. Explorez la richesse littéraire de chaque écrivain. Votre prochaine lecture vous attend parmi nos pages d'auteurs. La Pastèque, votre destination littéraire incontournable. ">
            <script defer src="liaisons/js/affichage_grille_liste.js"></script>
        @elseif($_GET['controleur']==='livre' && $_GET['action']==='fiche' )
            <title> {{$lesLivres->getTitre()}} | Livres | La Pastèque </title>
            <meta name="description" content="Description du livre {{$lesLivres->getTitre()}} écrit par @foreach($lesLivres->getLivresAuteursAssocies() as $auteurs){{$auteurs->getAuteurAssocie()->getPrenom()." ". $auteurs->getAuteurAssocie()->getNom()." "}}@endforeach">
            <meta name="keywords" content="livre, fiche, librairie, La Pastèque, {{$lesLivres->getTitre()}},
            @foreach($lesLivres->getLivresAuteursAssocies() as $auteurs)
            {{$auteurs->getAuteurAssocie()->getPrenom()." ". $auteurs->getAuteurAssocie()->getNom().", "}}
            @endforeach">
            <script defer src="liaisons/js/onglets.js"></script>
            <script defer src="liaisons/js/ajoutPanier.js"></script>
            <script defer src="liaisons/js/modaleLivre.js"></script>
            <script defer src="liaisons/js/animPanier.js"></script>
        @elseif($_GET['controleur']==='artiste' && $_GET['action']==='fiche' )
            <title> {{$auteurs->getPrenomNom()}} | Artistes | La Pastèque </title>
            <meta name="description"
            content="Découvrez l'auteur {{$auteurs->getPrenomNom()}}  chez La Pastèque. Explorez sa carrière littéraire, ses œuvres marquantes, et plongez dans l'univers captivant de sa plume. Des débuts prometteurs aux chef-d'œuvres incontournables, chaque page dévoile une histoire unique. Ajoutez l'essence de {{$auteurs->getPrenomNom()}} à votre collection littéraire. ">
            <meta name="keywords" content="auteur, librairie, La Pastèque, {{$auteurs->getPrenom()}} {{$auteurs->getNom()}}">
        @elseif($_GET['controleur']==='compte' && $_GET['action']==='connexion' )
            <title> La Pastèque | Connexion au compte</title>
        @elseif($_GET['controleur']==='compte' && $_GET['action']==='creation' )
            <title> La Pastèque | Création du  compte</title>
        @elseif($_GET['controleur']==='panier' && $_GET['action']==='fiche' )
            <title> Votre panier | La Pastèque </title>
            <meta name="description" content=" ">
            <meta name="keywords" content="panier, librairie, La Pastèque">
            <script defer src="liaisons/js/gestion_panier.js"></script>
        @elseif($_GET['controleur']==='panier' && $_GET['action']==='transaction' )
            <script defer src="liaisons/js/formulaireTransaction.js">
                stepLeft.chargeJSON("liaisons/js/objJSONMessages.json");
            </script>
        @endif
    @else
        <title>La Pastèque | Techniques d’intégration multimédia – Cégep de Sainte-Foy</title>
    @endif
    <meta name="keywords" content="Livres à vendre en ligne, Littérature diversifiée, Auteurs renommés, Nouveautés littéraires, Librairie en ligne francophone">
    <script src="https://kit.fontawesome.com/5482d63b2f.js" crossorigin="anonymous"></script>
    <script defer src="liaisons/js/menu.js"></script>
    <link rel="stylesheet" href="liaisons/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="icon" type="image/png" href="liaisons/images/favicon-32x32.png">
</head>
<body>
<header>
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




