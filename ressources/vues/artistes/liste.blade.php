@extends('gabarit')

@section('contenu')

<div class="conteneur" id="contenu">
    @include('fragments.filariane') <!-- Inclusion du fil d'Ariane -->
    <h2>Auteurs</h2>

    <div class="conteneur__boutons">
        <div class="boutons-switch">
            <!-- Boutons pour basculer entre la vue grille et liste -->
            <button id="bouton-grille" class="btn actif"><i class="fa-solid fa-grip fa-xl"></i></button>
            <button id="bouton-liste" class="btn"><i class="fa-solid fa-list fa-xl"></i></button>
        </div>
    </div>

    <ul class="liste-auteurs__items liste__items">
        @foreach ($auteurs as $auteur)
            <!-- Affichage des détails de chaque auteur -->
            <li class="auteur liste">
                <a href="index.php?controleur=artiste&action=fiche&idAuteur={{ $auteur->getId() }}">
                    <div class="ctnImg">
                        @php
                            // Récupération du chemin de l'image de l'auteur
                            $prenom = $auteur->getPrenom();
                            $nom = $auteur->getNom();
                            $cheminImage = null;

                            // Vérification de l'existence de l'image avec ou sans prénom
                            if ($prenom && file_exists("./liaisons/images/auteurs/{$prenom}{$nom}_w135.jpg")) {
                                $cheminImage = "./liaisons/images/auteurs/{$prenom}{$nom}";
                            } elseif (file_exists("./liaisons/images/auteurs/{$nom}_w135.jpg")) {
                                $cheminImage = "./liaisons/images/auteurs/{$nom}";
                            }
                        @endphp

                        @if ($cheminImage)
                            <!-- Affichage de l'image de l'auteur avec responsive images -->
                            <picture>
                                <source media="(max-width: 600px)" srcset="{{ $cheminImage }}_w135.jpg 1x, {{ $cheminImage }}_w270.jpg 2x">
                                <source media="(min-width: 601px)" srcset="{{ $cheminImage }}_w245.jpg 1x, {{ $cheminImage }}_w490.jpg 2x">
                                <img class="ctnImg__img image-item" src="{{ $cheminImage }}_w245.jpg" alt="portrait de {{ $auteur->getPrenomNom() }}">
                            </picture>
                        @else
                            <!-- Affichage d'une image de remplacement si l'image n'est pas disponible -->
                            <img class="ctnImg__img image-item" src="./liaisons/images/placeholder.svg" alt="portrait de {{ $auteur->getPrenomNom() }}" width="245px" height="auto">
                        @endif
                    </div>

                    <h3 class="auteur__nom">{{ $auteur->getPrenomNom() }}</h3>
                </a>
            </li>
        @endforeach
    </ul>

    <p>Nombre total d'auteurs : {{ $nbTotalAuteurs }}</p>

    @include('fragments.pagination') <!-- Inclusion de la pagination -->
</div>

@endsection
