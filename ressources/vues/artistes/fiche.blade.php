@extends('gabarit')
@section('contenu')

    <h1 class="">{{$artistes->getPrenom()}} {{$artistes->getNom()}}</h1>

    <a href="{{$artistes->getSite_web()}}">Site de l'auteur</a>

    <p>{{$artistes->getNotice()}}</p>

    <ul>
        @foreach($livresAuteurs as $livre)
            <li class="livresSimilaires__item">
                <a href='index.php?controleur=livre&action=fiche&idLivre={{$livre->getLivreAssocie()->getId()}}&idCategorie={{$livre->getLivreAssocie()->getCategorie_id()}}'>
                    <figure>
                        <img class="livre__couverture" src="./liaisons/images/operatique_couv.jpg" alt="couverture Operatique" width="100px">
                        <figcaption class="livre__titre">{{$livre->getLivreAssocie()->getTitre()}}</figcaption>
                    </figure>
                </a>
            </li>
        @endforeach
    </ul>

    @if($idPrecedent>1)
    <a href="index.php?controleur=artiste&action=fiche&idArtiste={{$idPrecedent}}">artiste precedent</a>
    @else
        <a href="">artiste precedent</a>
    @endif
    @if($idSuivant<$artistes->compter())
        <a href="index.php?controleur=artiste&action=fiche&idArtiste={{$idSuivant}}">artiste suivant</a>
    @else
        <a href="">artiste suivant</a>
    @endif
@endsection