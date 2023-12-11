@extends('gabarit')
@section('contenu')
    <div id="contenu">
    <div class="ctnFilAriane--artiste">
    @include('fragments.filariane')
    </div>
    <h1 class="nomAuteur">{{$auteurs->getPrenom()}} {{$auteurs->getNom()}}</h1>

    <div class="ctnPage texte">
        <div class="ctnAuteur texte">
            <div class="ctnImgLien">
                <div class="ctnImg">
                    @if($auteurs->getPrenom())
                        @if(file_exists("./liaisons/images/auteurs/{$auteurs->getPrenom()}{$auteurs->getNom()}_w135.jpg"))
                            <picture>
                                <source media="(max-width:600px)" srcset="./liaisons/images/auteurs/{{$auteurs->getPrenom()}}{{$auteurs->getNom()}}_w328.jpg">
                                <source media="(min-width:601px)" srcset="./liaisons/images/auteurs/{{$auteurs->getPrenom()}}{{$auteurs->getNom()}}_w656.jpg">
                                <img class="ctnImg__img" src="./liaisons/images/{{$auteurs->getPrenom()}}{{$auteurs->getNom()}}_w656.jpg" alt="portrait de {{$auteurs->getPrenom()}} {{$auteurs->getNom()}}" >
                            </picture>
                            @else
                                <img class="ctnImg__img" src="./liaisons/images/placeholder.svg" alt="portrait de {{$auteurs->getPrenom()}} {{$auteurs->getNom()}}">
                        @endif
                    @else
                        @if(file_exists("./liaisons/images/auteurs/{$auteurs->getNom()}_w135.jpg"))
                            <picture>
                                <source media="(min-width:300px)" srcset="./liaisons/images/auteurs/{{$auteurs->getNom()}}_w328.jpg">
                                <source media="(min-width:800px)" srcset="./liaisons/images/auteurs/{{$auteurs->getNom()}}_w656.jpg">
                                <img class="ctnImg__img" src="./liaisons/images/auteurs/{{$auteurs->getNom()}}_w656.jpg" alt="portrait de {{$auteurs->getNom()}}" >
                            </picture>
                        @else
                            <img class="ctnImg__img" src="./liaisons/images/placeholder.svg" alt="portrait de {{$auteurs->getPrenom()}} {{$auteurs->getNom()}}" >
                        @endif
                    @endif
                </div>
            </div>
            <div class="ctnAuteurBio">
                <section class="ctnBio">
                    @if($auteurs->getSite_web() !== '')
                        <a class="ctnBio__lien hyperlien" href="{{$auteurs->getSite_web()}}">Site de l'auteur</a>
                    @endif

                    <p class="ctnBio__p">{!! $auteurs->getNotice() !!}</p>

                        @if($reconnaissances)
                            <p>Reconnaissances de l'auteur</p>
                            <ul>
                                @foreach($reconnaissances as $reconnaissance)
                                    @foreach($reconnaissance as $lareconnaissance)
                                        <li>{!! $lareconnaissance->getLaReconnaissance() !!}</li>
                                    @endforeach
                                @endforeach
                            </ul>
                        @endif

                    @if($idPrecedent>1)
                        <a class="ctnBio__precedent hyperlien" href="index.php?controleur=artiste&action=fiche&idAuteur={{$idPrecedent}}">&#9664; auteur précédent</a>
                    @else
                        <a class="ctnBio__precedent hyperlien" href="index.php?controleur=artiste&action=fiche&idAuteur={{$idPrecedent}}">&#9664; auteur précédent</a>
                    @endif
                    @if($idSuivant<$auteurs->compter())
                        <a class="ctnBio__suivant lienSuivant hyperlien" href="index.php?controleur=artiste&action=fiche&idAuteur={{$idSuivant}}">auteur suivant &#9654;</a>
                    @else
                        <a class="ctnBio__suivant lienSuivant hyperlien" href="index.php?controleur=artiste&action=fiche&idAuteur={{$idSuivant}}">auteur suivant &#9654;</a>
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
                                    <source media="(max-width:600px)" srcset="./liaisons/images/livres/{{$livre->getLivreAssocie()->getCategorie_id()}}/{{$livre->getLivreAssocie()->getIsbn_papier()}}_w135.jpg">
                                    <source media="(min-width:601px)" srcset="./liaisons/images/livres/{{$livre->getLivreAssocie()->getCategorie_id()}}/{{$livre->getLivreAssocie()->getIsbn_papier()}}_w270.jpg">
                                    <img class="ctnImg__img" src="./liaisons/images/livres/{{$livre->getLivreAssocie()->getCategorie_id()}}/{{$livre->getLivreAssocie()->getIsbn_papier()}}_w270.jpg" alt="couverture {{$livre->getLivreAssocie()->getTitre()}}">
                                </picture>
                            </div>
                            <figcaption class="livre__titre">{{$livre->getLivreAssocie()->getTitre()}}</figcaption>
                        </figure>
                    </a>
                </li>
            @endforeach

        </ul>
        @include('fragments.paginationFicheAuteur')
    </div>

    </div>
@endsection