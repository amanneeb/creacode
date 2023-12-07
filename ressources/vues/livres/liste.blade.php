@extends('gabarit')

@section('contenu')

<div class="conteneur" id="contenu">
    @include('fragments.filariane') <!-- Inclusion du fil d'Ariane -->

    <h2>livres</h2>

    <section class="liste-livres">
        <div class="conteneur-tri">
            <label class="liste-livres__titre"><i class="fa-solid fa-filter fa-xl"></i>Trier par:</label><br>
            <select name="tri" id="triSelect" class="liste-livres__tri">
                <!-- Options de tri -->
                <option value="nouveautes" class="liste-livres__tri-option">Nouveautés</option>
                <option value="aparaitre" class="liste-livres__tri-option">À paraître</option>
                <option value="prixcroissant" class="liste-livres__tri-option">Prix croissant</option>
                <option value="prixdecroissant" class="liste-livres__tri-option">Prix décroissant</option>
            </select>
        </div>

        <div class="conteneur-filtre">
            <label class="liste-livres__titre">Genres</label>
            <!-- Liste de filtrage par genre -->
            <div class="liste-livres__filtre" id="categorieList">
                <!-- Liens pour filtrer par catégorie -->
                <a class="liste-livres__tri-option" href="{{ $urlTri }}&idCategorie=1">Bandes dessinées</a>
                <a class="liste-livres__tri-option" href="{{ $urlTri }}&idCategorie=2">BD jeunesse</a>
                <a class="liste-livres__tri-option" href="{{ $urlTri }}&idCategorie=3">Livres illustrés</a>
                <a class="liste-livres__tri-option" href="{{ $urlTri }}&idCategorie=4">Albums jeunesse</a>
                <a class="liste-livres__tri-option" href="{{ $urlTri }}&idCategorie=5">Documentaires</a>
                <a class="liste-livres__tri-option" href="{{ $urlTri }}&idCategorie=6">Divers</a>
            </div>
        </div>

        <h3>{{ $nomCategorieRecherchee }}</h3>
    </section>

    <div class="conteneur__boutons">
        <div class="boutons-switch">
            <!-- Boutons pour basculer entre la vue grille et liste -->
            <button id="bouton-grille" class="btn actif"><i class="fa-solid fa-grip fa-xl"></i></button>
            <button id="bouton-liste" class="btn"><i class="fa-solid fa-list fa-xl"></i></button>
        </div>
    </div>

    <ul class="liste-livres__items liste__items">
        @if($nbTotalLivres==0)
            <!-- Affichage d'un message si aucun livre n'est disponible -->
            <p>Il n'y a aucun livre dans cette catégorie !</p>
        @endif

        @foreach ($livres as $livre)
            <!-- Affichage des détails de chaque livre -->
            <li class="livre item">
                <a href="index.php?controleur=livre&action=fiche&idLivre={{ $livre->getId() }}">
                    <div class="ctnImg">
                        @php
                            // Récupération du chemin de l'image du livre
                            $isbn = $livre->getIsbn_papier();
                            $cheminImage = null;
                            $id_categorie = $livre->getCategorie_id();

                            if (file_exists("./liaisons/images/livres/{$id_categorie}/{$isbn}_w135.jpg")) {
                                $cheminImage = "./liaisons/images/livres/{$id_categorie}/{$isbn}";
                            }
                        @endphp

                        @if ($cheminImage)
                            <!-- Affichage de l'image du livre avec responsive images -->
                            <picture class="ctnImg__picture">
                                <source media="(max-width: 600px)"
                                        srcset="{{ $cheminImage }}_w135.jpg 1x, {{ $cheminImage }}_w270.jpg 2x">
                                <source media="(min-width: 601px)"
                                        srcset="{{ $cheminImage }}_w245.jpg 1x, {{ $cheminImage }}_w490.jpg 2x">
                                <img class="ctnImg__img item-img " src="{{ $cheminImage }}_w245.jpg"
                                     alt="{{ $livre->getTitre() }}">
                            </picture>
                        @else
                            <!-- Affichage d'une image de remplacement si l'image n'est pas disponible -->
                            <img class="ctnImg__img" src="./liaisons/images/placeholder.svg"
                                 alt="livre {{ $livre->getTitre() }}" width="245px" height="auto">
                        @endif
                    </div>

                    <h3 class="livre__titre">{{ $livre->getTitre() }}</h3>
                </a>

                <ul>
                    <!-- Affichage des auteurs associés à chaque livre -->
                    @foreach($livre->getLivresAuteursAssocies() as $livreAuteur)
                        <li><a href="index.php?controleur=artiste&action=fiche&idArtiste={{ $livreAuteur->getAuteurAssocie()->getId() }}">
                                {{ $livreAuteur->getAuteurAssocie()->getPrenomNom() }}
                            </a></li>
                    @endforeach
                </ul>

                <p class="livre__prix">{{ $livre->getPrix_can() }}$</p>
            </li>
        @endforeach
    </ul>

    <p>Nombre total de livres : {{ $nbTotalLivres }}</p>

    @include('fragments.pagination') <!-- Inclusion de la pagination -->
</div>

@endsection
