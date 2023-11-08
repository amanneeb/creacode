@extends('gabarit')
@section('contenu')
    @include('fragments.filariane')
    <h1 class="nomAuteur">{{$artistes->getPrenom()}} {{$artistes->getNom()}}</h1>
    <div class="ctnAuteur texte">
        <div class="ctnImgLien">
            <div class="ctnImg">
                @if($artistes->getPrenom())
                    @if(file_exists("./liaisons/images/{$artistes->getPrenom()}{$artistes->getNom()}.jpg"))
                        <img class="ctnImg__img" src="./liaisons/images/{{$artistes->getPrenom()}}{{$artistes->getNom()}}.jpg" alt="portrait de {{$artistes->getPrenom()}} {{$artistes->getNom()}}" >
                    @else
                        <img class="ctnImg__img" src="./liaisons/images/placeholder.svg" alt="portrait de {{$artistes->getPrenom()}} {{$artistes->getNom()}}" >
                    @endif
                @else
                    @if(file_exists("./liaisons/images/{$artistes->getNom()}.jpg"))
                        <img class="ctnImg__img" src="./liaisons/images/{{$artistes->getNom()}}.jpg" alt="portrait de {{$artistes->getNom()}}" >
                    @else
                        <img class="ctnImg__img" src="./liaisons/images/placeholder.svg" alt="portrait de {{$artistes->getPrenom()}} {{$artistes->getNom()}}" >
                    @endif
                @endif
            </div>
        </div>
        <div class="ctnAuteurBio">
            <section class="ctnBio">
                @if($artistes->getSite_web() !== '')
                    <a class="ctnBio__lien hyperlien" href="{{$artistes->getSite_web()}}">Site de l'auteur</a>
                @endif

                <p class="ctnBio__p">{!! $artistes->getNotice() !!}</p>

                    @if($reconnaissances)
                        <p>Reconnaissances de l'auteur</p>
                        <ul>
                            @foreach($reconnaissances as $reconnaissance)
                                <li>{!! $reconnaissance->getLaReconnaissance() !!}</li>
                            @endforeach
                        </ul>
                    @endif

                @if($idPrecedent>1)
                    <a class="ctnBio__precedent hyperlien" href="index.php?controleur=artiste&action=fiche&idArtiste={{$idPrecedent}}">&#9664; artiste precedent</a>
                @else
                    <a class="ctnBio__precedent hyperlien" href="">artiste precedent</a>
                @endif
                @if($idSuivant<$artistes->compter())
                    <a class="ctnBio__suivant lienSuivant hyperlien" href="index.php?controleur=artiste&action=fiche&idArtiste={{$idSuivant}}">artiste suivant &#9654;</a>
                @else
                    <a class="ctnBio__suivant lienSuivant hyperlien" href="">artiste suivant</a>
                @endif
            </section>
        </div>
    </div>

    <h4 class="autresLivres__titre">Livres du même auteur</h4>
    <ul class="livresSimilaires texte">
        @foreach($livresPagination as $livre)
            <li class="livresSimilaires__item">
                <a class="livresSimilaires__lien" href='index.php?controleur=livre&action=fiche&idLivre={{$livre->getId()}}'>
                    <figure class="livre">
                        <div class="ctnImg">
                            <img class="ctnImg__img" src="./liaisons/images/operatique_couv.jpg" alt="couverture Operatique">
                        </div>
                        <figcaption class="livre__titre">{{$livre->getTitre()}}</figcaption>
                    </figure>
                </a>
            </li>
        @endforeach
    </ul>

    @include('fragments.paginationFicheAuteur')
@endsection