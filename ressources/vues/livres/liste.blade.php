@extends('gabarit')

@section('contenu')
    <div class="conteneur">
        @include('fragments.filariane')
        <section class="liste-livres">
            <div class="conteneur-tri">
                <label class="liste-livres__titre">Trier par</label><br>
                <select name="tri" id="triSelect" class="liste-livres__tri">
                    <option value="nouveautes" class="liste-livres__tri-option">Nouveautés</option>
                    <option value="prixcroissant" class="liste-livres__tri-option">Prix croissant</option>
                    <option value="prixdecroissant" class="liste-livres__tri-option">Prix décroissant</option>
                </select>
            </div>
            <label class="liste-livres__titre">Filtrer par genre :</label>
            <!-- Liste de filtrage par genre -->
            <ul class="liste-livres__filtre">
                <li class="liste-livres__tri-option"><a class="" href="{{ $urlTri }}&idCategorie=1">Bandes dessinées</a>
                </li>
                <li class="liste-livres__tri-option"><a class="" href="{{ $urlTri }}&idCategorie=2">BD jeunesse</a></li>
                <li class="liste-livres__tri-option"><a class="" href="{{ $urlTri }}&idCategorie=3">Livres illustrés</a>
                </li>
                <li class="liste-livres__tri-option"><a class="" href="{{ $urlTri }}&idCategorie=4">Albums jeunesse</a>
                </li>
                <li class="liste-livres__tri-option"><a class="" href="{{ $urlTri }}&idCategorie=5">Documentaires</a>
                </li>
                <li class="liste-livres__tri-option"><a class="" href="{{ $urlTri }}&idCategorie=6">Divers</a></li>
            </ul>
        </section>

        <h2>livres</h2>
        <div class="conteneur__boutons">
            <div class="boutons-switch">
                <button id="bouton-grille" class="btn actif">Grille</button>
                <button id="bouton-liste" class="btn">Liste</button>
            </div>
        </div>

        <ul class="liste-livres__items liste__items">
            @foreach ($livres as $livre)
                <li class="livre item">
                    <a href="index.php?controleur=livre&action=fiche&idLivre={{ $livre->getId() }}">
{{--                        <div class="ctnImg">--}}
{{--                        <img class="item-img ctnImg__img"--}}
{{--                             src="./liaisons/images/operatique_couv.jpg" width="150px" height="200px"--}}
{{--                             alt="{{ $livre->getTitre() }}" class="livre__image">--}}
{{--                        </div>--}}
                        <div class="ctnImg">
                            @php
                                $isbn = $livre->getIsbn_papier();
                                $cheminImage = null;
                                $id_categorie = $livre->getCategorie_id();

                                if (file_exists("./liaisons/images/livres/{$id_categorie}/{$isbn}_w135.jpg")) {
                                    $cheminImage = "./liaisons/images/livres/{$id_categorie}/{$isbn}";
                                }
                            @endphp

                            @if ($cheminImage)
                                <picture>
                                    <source media="(max-width: 600px)" srcset="{{ $cheminImage }}_w135.jpg 1x, {{ $cheminImage }}_w270.jpg 2x">
                                    <source media="(min-width: 601px)" srcset="{{ $cheminImage }}_w245.jpg 1x, {{ $cheminImage }}_w490.jpg 2x">
                                    <img class="ctnImg__img item-img " src="{{ $cheminImage }}_w245.jpg" alt="{{ $livre->getTitre() }}">
                                </picture>
                            @else
                                <img class="ctnImg__img" src="./liaisons/images/placeholder.svg" alt="livre {{ $livre->getTitre() }}" width="245px" height="auto">
                            @endif
                        </div>

                        <h3 class="livre__titre">{{ $livre->getTitre() }}</h3>
                    </a>
                    <ul>
                        @foreach($livre->getLivresAuteursAssocies() as $livreAuteur)
                            <a href="index.php?controleur=artiste&action=fiche&idArtiste={{ $livreAuteur->getAuteurAssocie()->getId() }}">
                                <li>{{ $livreAuteur->getAuteurAssocie()->getPrenomNom() }}</li>
                            </a>
                        @endforeach
                    </ul>
                    <p class="livre__prix">{{ $livre->getPrix_can() }}$</p>
                </li>
            @endforeach
        </ul>
        <p>Nombre total de livres : {{ $nbTotalLivres }}</p>
        @include('fragments.pagination')
    </div>
@endsection

