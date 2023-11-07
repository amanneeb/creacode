@extends('gabarit')

@section('contenu')
    <div class="conteneur">
    @include('fragments.filariane')
    <h2>Auteurs</h2>
        <div class="conteneur__boutons">
            <div class="boutons-switch">
                <button id="bouton-grille" class="btn actif">Grille</button>
                <button id="bouton-liste" class="btn">Liste</button>
            </div>
        </div>
    <ul class="liste-auteurs__items liste__items">
        @foreach ($auteurs as $auteur)
            <li class="auteur">
                <a href="index.php?controleur=artiste&action=fiche&idArtiste={{ $auteur->getId() }}">
                    <img class="item-img" src="liaisons/images/placeholder.svg" alt="{{ $auteur->getPrenomNom() }}">
                    <h3 class="auteur__nom">{{ $auteur->getPrenomNom() }}</h3>
                </a>
            </li>
        @endforeach
    </ul>
    <p>Nombre total d'auteurs: {{ $nbTotalAuteurs }}</p>
    @include('fragments.pagination')
    </div>
@endsection

