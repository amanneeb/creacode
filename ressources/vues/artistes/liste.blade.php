@extends('gabarit')

@section('contenu')
    @include('fragments.filariane')
    <h2>Auteurs</h2>
    <ul class="liste-auteurs__items">
        @foreach ($auteurs as $auteur)
            <li class="auteur">
                <a href="index.php?controleur=artiste&action=fiche&idArtiste={{ $auteur->getId() }}">
                    <img src="auteur{{ $auteur->getId() }}.jpg" alt="{{ $auteur->getPrenomNom() }}" class="auteur__image">
                    <h3 class="auteur__nom">{{ $auteur->getPrenomNom() }}</h3>
                </a>
            </li>
        @endforeach
    </ul>
    <p>Nombre total d'auteurs: {{ $nbTotalAuteurs }}</p>
    @include('fragments.pagination')
@endsection

