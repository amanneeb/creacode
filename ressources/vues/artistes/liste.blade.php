@extends('gabarit')

@section('contenu')
    <div class="conteneur" id="contenu">
        @include('fragments.filariane')
        <h2>Auteurs</h2>
        <div class="conteneur__boutons">
            <div class="boutons-switch">
                <button id="bouton-grille" class="btn actif"><i class="fa-solid fa-grip fa-xl"></i></button>
                <button id="bouton-liste" class="btn"><i class="fa-solid fa-list fa-xl"></i></button>
            </div>
        </div>
        <ul class="liste-auteurs__items liste__items">
            @foreach ($auteurs as $auteur)
                <li class="auteur">
                    <a href="index.php?controleur=artiste&action=fiche&idAuteur={{ $auteur->getId() }}">
                        <div class="ctnImg">
                            @php
                                $prenom = $auteur->getPrenom();
                                $nom = $auteur->getNom();
                                $cheminImage = null;

                                if ($prenom && file_exists("./liaisons/images/auteurs/{$prenom}{$nom}_w135.jpg")) {
                                    $cheminImage = "./liaisons/images/auteurs/{$prenom}{$nom}";
                                } elseif (file_exists("./liaisons/images/auteurs/{$nom}_w135.jpg")) {
                                    $cheminImage = "./liaisons/images/auteurs/{$nom}";
                                }
                            @endphp

                            @if ($cheminImage)
                                <picture>
                                    <source media="(max-width: 600px)" srcset="{{ $cheminImage }}_w135.jpg 1x, {{ $cheminImage }}_w270.jpg 2x">
                                    <source media="(min-width: 601px)" srcset="{{ $cheminImage }}_w245.jpg 1x, {{ $cheminImage }}_w490.jpg 2x">
                                    <img class="ctnImg__img" src="{{ $cheminImage }}_w245.jpg" alt="portrait de {{ $auteur->getPrenomNom() }}">
                                </picture>
                            @else
                                <img class="ctnImg__img" src="./liaisons/images/placeholder.svg" alt="portrait de {{ $auteur->getPrenomNom() }}" width="245px" height="auto">
                            @endif
                        </div>
                        <h3 class="auteur__nom">{{ $auteur->getPrenomNom() }}</h3>
                    </a>
                </li>
            @endforeach
        </ul>
        <p>Nombre total d'auteurs: {{ $nbTotalAuteurs }}</p>
        @include('fragments.pagination')
    </div>
@endsection

