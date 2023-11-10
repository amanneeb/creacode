@extends('gabarit')
@section('contenu')
    @include('fragments.filariane')
    <h1 class="nomAuteur">{{$artistes->getPrenom()}} {{$artistes->getNom()}}</h1>

    <div class="ctnPage texte">
        <div class="ctnAuteur texte">
            <div class="ctnImgLien">
                <div class="ctnImg">
                    @if($artistes->getPrenom())
                        @if(file_exists("./liaisons/images/auteurs/{$artistes->getPrenom()}{$artistes->getNom()}_w135.jpg"))
                            <picture>
                                <source media="(min-width:300px)" srcset="./liaisons/images/auteurs/{{$artistes->getPrenom()}}{{$artistes->getNom()}}_w328.jpg">
                                <source media="(min-width:800px)" srcset="./liaisons/images/auteurs/{{$artistes->getPrenom()}}{{$artistes->getNom()}}_w656.jpg">
                                <img class="ctnImg__img" src="./liaisons/images/{{$artistes->getPrenom()}}{{$artistes->getNom()}}_w814.jpg" alt="portrait de {{$artistes->getPrenom()}} {{$artistes->getNom()}}" >
                            </picture>
                            @else
                                <img class="ctnImg__img" src="./liaisons/images/placeholder.svg" alt="portrait de {{$artistes->getPrenom()}} {{$artistes->getNom()}}">
                        @endif
                    @else
                        @if(file_exists("./liaisons/images/auteurs/{$artistes->getNom()}_w135.jpg"))
                            <picture>
                                <source media="(min-width:300px)" srcset="./liaisons/images/auteurs/{{$artistes->getNom()}}_w328.jpg">
                                <source media="(min-width:800px)" srcset="./liaisons/images/auteurs/{{$artistes->getNom()}}_w656.jpg">
                                <img class="ctnImg__img" src="./liaisons/images/auteurs/{{$artistes->getNom()}}_w814.jpg" alt="portrait de {{$artistes->getNom()}}" >
                            </picture>
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
                        <a class="ctnBio__precedent hyperlien" href="index.php?controleur=artiste&action=fiche&idArtiste={{$idPrecedent}}">&#9664; auteur précédent</a>
                    @else
                        <a class="ctnBio__precedent hyperlien" href="index.php?controleur=artiste&action=fiche&idArtiste={{$idPrecedent}}">&#9664; auteur précédent</a>
                    @endif
                    @if($idSuivant<$artistes->compter())
                        <a class="ctnBio__suivant lienSuivant hyperlien" href="index.php?controleur=artiste&action=fiche&idArtiste={{$idSuivant}}">auteur suivant &#9654;</a>
                    @else
                        <a class="ctnBio__suivant lienSuivant hyperlien" href="index.php?controleur=artiste&action=fiche&idArtiste={{$idSuivant}}">auteur suivant &#9654;</a>
                    @endif
                </section>
            </div>
        </div>

        <h4 class="autresLivres__titre">Livres du même auteur</h4>
        <ul class="livresSimilaires texte">
            @foreach($livresPagination as $livre)
                <li class="livresSimilaires__item">
                    <a class="livresSimilaires__lien" href="index.php?controleur=livre&action=fiche&idLivre={{$livre->getIdLivreId()}}">
                        <figure class="livre">
                            <div class="ctnImg">
                                <picture>
                                    <source media="(min-width:300px)" srcset="./liaisons/images/livres/{{$livre->getLivreAssocie()->getCategorie_id()}}/{{$livre->getLivreAssocie()->getIsbn_papier()}}_w328.jpg">
                                    <source media="(min-width:800px)" srcset="./liaisons/images/livres/{{$livre->getLivreAssocie()->getCategorie_id()}}/{{$livre->getLivreAssocie()->getIsbn_papier()}}_w490.jpg">
                                    <img class="ctnImg__img" src="./liaisons/images/livres/{{$livre->getLivreAssocie()->getCategorie_id()}}/{{$livre->getLivreAssocie()->getIsbn_papier()}}_w490.jpg" alt="couverture {{$livre->getLivreAssocie()->getTitre()}}">
                                </picture>
                            </div>
                            <figcaption class="livre__titre">{{$livre->getLivreAssocie()->getTitre()}}</figcaption>
                        </figure>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    @include('fragments.paginationFicheAuteur')
@endsection