@extends('gabarit')

@section('contenu')
    @include('fragments.filariane')
    <section class="liste-livres">
        <label class="liste-livres__titre">Trier par :</label>
        <!-- Liste déroulante pour trier -->
        <select name="tri" id="triSelect" class="liste-livres__tri">
            <option value="nouveautes" class="liste-livres__tri-option">Nouveautés</option>
            <option value="prixcroissant" class="liste-livres__tri-option">Prix croissant</option>
            <option value="prixdecroissant" class="liste-livres__tri-option">Prix décroissant</option>
        </select>

        <label class="liste-livres__titre">Filtrer par genre :</label>
        <!-- Liste de filtrage par genre -->
        <ul class="liste-livres__tri">
            <li class="liste-livres__tri-option"><a class="" href="{{ $urlTri }}&idCategorie=1">Bandes dessinées</a></li>
            <li class="liste-livres__tri-option"><a class="" href="{{ $urlTri }}&idCategorie=2">BD jeunesse</a></li>
            <li class="liste-livres__tri-option"><a class="" href="{{ $urlTri }}&idCategorie=3">Livres illustrés</a></li>
            <li class="liste-livres__tri-option"><a class="" href="{{ $urlTri }}&idCategorie=4">Albums jeunesse</a></li>
            <li class="liste-livres__tri-option"><a class="" href="{{ $urlTri }}&idCategorie=5">Documentaires</a></li>
            <li class="liste-livres__tri-option"><a class="" href="{{ $urlTri }}&idCategorie=6">Divers</a></li>
        </ul>
    </section>

    <h2>livres</h2>
    <ul class="liste-livres__items">
        @foreach ($livres as $livre)
            <li class="livre">
                <a href="index.php?controleur=livre&action=fiche&idLivre={{ $livre->getId() }}">
                    <img
                            {{--                            src="livre{{ $livre->getId() }}.jpg"--}}
                            src="./liaisons/images/operatique_couv.jpg" width="150px" height="200px"
                            alt="{{ $livre->getTitre() }}" class="livre__image">
                    <h3 class="livre__titre">{{ $livre->getTitre() }}</h3>
                </a>
                <ul>
                    @foreach($livre->getLivresAuteursAssocies() as $livreAuteur)
                        <a href="index.php?controleur=artistes&action=fiche&idArtiste={{ $livreAuteur->getAuteurAssocie()->getId() }}">
                            <li>{{ $livreAuteur->getAuteurAssocie()->getPrenomNom() }}</li>
                        </a>
                    @endforeach
                </ul>
                <p class="livre__prix">{{ $livre->getPrix_can() }}</p>
            </li>
        @endforeach
    </ul>
    <p>Nombre total de livres : {{ $nbTotalLivres }}</p>
    @include('fragments.pagination')
@endsection

