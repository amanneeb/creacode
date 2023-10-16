@extends('gabarit')

@section('contenu')

    <section class="liste-livres">
        <input class="entete__recherche" type="text" placeholder="Rechercher des livres">
        <h2 class="liste-livres__titre">Trier par :</h2>
        <!-- Liste déroulante pour trier -->
        <select class="liste-livres__tri">
            <option value="nouveautes" class="liste-livres__tri-option">Nouveautés</option>
            <option value="coupdecoeur" class="liste-livres__tri-option">Coup de cœur</option>
            <option value="prixcroissant" class="liste-livres__tri-option">Prix croissant</option>
            <option value="prixdecroissant" class="liste-livres__tri-option">Prix décroissant</option>
        </select>

        <h2 class="liste-livres__titre">Filtrer par genre :</h2>
        <!-- Liste de filtrage par genre -->
        <select class="liste-livres__tri">
            <option value="bandesdessinees" class="liste-livres__tri-option">Bandes dessinées</option>
            <option value="bdjeunesse" class="liste-livres__tri-option">BD jeunesse</option>
            <option value="livresillustrés" class="liste-livres__tri-option">Livres illustrés</option>
            <option value="albumsjeunesse" class="liste-livres__tri-option">Albums jeunesse</option>
            <option value="documentaires" class="liste-livres__tri-option">Documentaires</option>
            <option value="divers" class="liste-livres__tri-option">Divers</option>
        </select>
    </section>

    <h1>Page Liste des livres</h1>
    <ul class="liste-livres__items">
        @foreach ($livres as $livre)
            <img src="livre{{ $livre->getId() }}.jpg" alt="{{ $livre->getTitre() }}" class="livre__image">
            <li class="livre">
                <a href="index.php?controleur=livre&action=fiche&idLivre={{ $livre->getId() }}">
                    <h3 class="livre__titre">{{ $livre->getTitre() }}</h3>
                </a>
                <p class="livre__auteur">Nom auteur</p>
                <p class="livre__prix">{{ $livre->getPrix_can() }}</p>
            </li>
        @endforeach
    </ul>
    <p>Nombre total de livres : {{ $nbTotalLivres }}</p>
    @include('fragments.pagination')
@endsection
