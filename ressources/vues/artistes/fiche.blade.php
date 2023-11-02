@extends('gabarit')
@section('contenu')
    <div class="ctnAuteur">
        <h1 class="ctnAuteur__nomAuteur">{{$artistes->getPrenom()}} {{$artistes->getNom()}}</h1>
        <div class="ctnImgLien">
            <div class="ctnImg">
                @if($artistes->getPrenom())
                    @if(file_exists("./liaisons/images/{$artistes->getPrenom()}{$artistes->getNom()}.jpg"))
                        <img class="ctnImg__img" src="./liaisons/images/{{$artistes->getPrenom()}}{{$artistes->getNom()}}.jpg" alt="portrait de {{$artistes->getPrenom()}} {{$artistes->getNom()}}" width="200px">
                    @else
                        <img class="ctnImg__img" src="./liaisons/images/placeholder.svg" alt="portrait de {{$artistes->getPrenom()}} {{$artistes->getNom()}}" width="200px">
                    @endif
                @else
                    @if(file_exists("./liaisons/images/{$artistes->getNom()}.jpg"))
                        <img class="ctnImg__img" src="./liaisons/images/{{$artistes->getNom()}}.jpg" alt="portrait de {{$artistes->getNom()}}" width="200px">
                    @else
                        <img class="ctnImg__img" src="./liaisons/images/placeholder.svg" alt="portrait de {{$artistes->getPrenom()}} {{$artistes->getNom()}}" width="200px">
                    @endif
                @endif
            </div>
            @if($artistes->getSite_web() !== '')
                <a class="ctnImgLien__lien hyperlien" href="{{$artistes->getSite_web()}}">Site de l'auteur</a>
            @endif
        </div>
    </div>
    <div class="ctnPage">
        <section class="ctnBio">
            @if($artistes->getSite_web() !== '')
                <a class="ctnBio__lien hyperlien" href="{{$artistes->getSite_web()}}">Site de l'auteur</a>
            @endif
            <p class="ctnBio__p">{{$artistes->getNotice()}}</p>
        </section>

    </div>

  <!--  <ul>
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
    </ul> -->


    <ul class="livresSimilaires">
        @foreach($livresAuteurs as $livre)
            <li class="livresSimilaires__item">
                <a class="livresSimilaires__lien" href='index.php?controleur=livre&action=fiche&idLivre={{$livre->getLivreAssocie()->getId()}}'>
                    <figure class="livre">
                        <div class="ctnImg">
                            <img class="ctnImg__img" src="./liaisons/images/operatique_couv.jpg" alt="couverture Operatique">
                        </div>
                        <!--<img class="livre__couverture" src="./liaisons/images/operatique_couv.jpg" alt="couverture Operatique" width="100px"-->
                        <figcaption class="livre__titre">{{$livre->getLivreAssocie()->getTitre()}}</figcaption>
                    </figure>
                </a>
            </li>
        @endforeach
    </ul>


    @if($idPrecedent>1)
    <a class="hyperlien" href="index.php?controleur=artiste&action=fiche&idArtiste={{$idPrecedent}}">artiste precedent</a>
    @else
        <a class="hyperlien" href="">artiste precedent</a>
    @endif
    @if($idSuivant<$artistes->compter())
        <a class="hyperlien" href="index.php?controleur=artiste&action=fiche&idArtiste={{$idSuivant}}">artiste suivant</a>
    @else
        <a class="hyperlien" href="">artiste suivant</a>
    @endif
@endsection