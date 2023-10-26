@extends('gabarit')

@section('contenu')

    <section class="liste-livres">
        <h2 class="liste-livres__titre">Trier par :</h2>
        <!-- Liste déroulante pour trier -->
        <select name="tri" id="triSelect" class="liste-livres__tri">
            <option value="nouveautes" class="liste-livres__tri-option">Nouveautés</option>
            <option value="prixcroissant" class="liste-livres__tri-option">Prix croissant</option>
            <option value="prixdecroissant" class="liste-livres__tri-option">Prix décroissant</option>
        </select>

        <h2 class="liste-livres__titre">Filtrer par genre :</h2>
        <!-- Liste de filtrage par genre -->
        <ul class="liste-livres__tri">
            <li class="liste-livres__tri-option" ><a href="{{ $urlTri }}&idCategorie=1">Bandes dessinées</a></li>
            <li class="liste-livres__tri-option" ><a href="{{ $urlTri }}&idCategorie=2">BD jeunesse</a></li>
            <li class="liste-livres__tri-option" ><a href="{{ $urlTri }}&idCategorie=3">Livres illustrés</a></li>
            <li class="liste-livres__tri-option" ><a href="{{ $urlTri }}&idCategorie=4">Albums jeunesse</a></li>
            <li class="liste-livres__tri-option" ><a href="{{ $urlTri }}&idCategorie=5">Documentaires</a></li>
            <li class="liste-livres__tri-option" ><a href="{{ $urlTri }}&idCategorie=6">Divers</a></li>
        </ul>
    </section>

    <h1>Page Liste des livres</h1>
    <ul class="liste-livres__items">
        @foreach ($livres as $livre)
            <li class="livre">
                <a href="index.php?controleur=livre&action=fiche&idLivre={{ $livre->getId() }}">
                    <img src="livre{{ $livre->getId() }}.jpg" alt="{{ $livre->getTitre() }}" class="livre__image">
                    <h3 class="livre__titre">{{ $livre->getTitre() }}</h3>
                </a>
                <ul>
                    @foreach($livre->getLivresAuteursAssocies() as $livreAuteur)
                        <li>{{ $livreAuteur->getAuteurAssocie()->getPrenomNom() }}</li>
                    @endforeach
                </ul>
                <p class="livre__prix">{{ $livre->getPrix_can() }}</p>
            </li>
        @endforeach
    </ul>
    <p>Nombre total de livres : {{ $nbTotalLivres }}</p>
    @include('fragments.pagination')
@endsection

