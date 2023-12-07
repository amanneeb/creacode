@extends('gabarit')

@section('contenu')


    <div class="main conteneur">
        <section class="actualites">
            <h2 class="h2Accueil">Actualités</h2>
            <span class="underline"></span>
            @foreach($actualites as $actualite)
                <div class="bloc">
                    <h3 class="h3">{{$actualite->getTitre()}}</h3>
                    <p class="date">{{$actualite->getDate()}}</p>
                    <div class="content">
                        @php
                            $nomSection = 'actu';
                            $cheminImageDebut = null;
                            $cheminImageFin = null;

                            if (file_exists("liaisons/images/accueil/w300/{$nomSection}_{$actualite->getId()}.jpg")) {
                                $cheminImageDebut = "liaisons/images/accueil/";
                                $cheminImageFin = "/{$nomSection}_{$actualite->getId()}.jpg";
                            }
                        @endphp
                        <span class="idAP" hidden></span>
                        @if ($cheminImageDebut)
                            <picture class="ctnImg__picture">
                                <source media="(max-width: 600px)"
                                        srcset="{{ $cheminImageDebut }}w185{{ $cheminImageFin }} 1x, {{ $cheminImageDebut }}w370{{ $cheminImageFin }} 2x">
                                <source media="(min-width: 601px)"
                                        srcset="{{ $cheminImageDebut }}w300{{ $cheminImageFin }} 1x, {{ $cheminImageDebut }}w600{{ $cheminImageFin }} 2x">
                                <img class="imgEv" src="{{ $cheminImageDebut }}w300{{ $cheminImageFin }}"
                                     alt="{{ $actualite->getTitre() }}">
                            </picture>
                        @else
                            <img class="imgEv" src="liaisons/images/placeholder.svg"
                                 alt="livre {{ $actualite->getTitre() }}" width="245px" height="auto">
                        @endif
                        <p class="texte">{{$actualite->getActualite()}}</p>
                    </div>
                    <a href="*" class="consulter">Consulter ></a>
                </div>
            @endforeach
        </section>

        {{--       DATE AUJOURD'HUI MOINS 14 JOURS--}}
        <section class="nouveautes">
            <h2 class="h2Accueil">Nouveautés</h2>
            <span class="underline"></span>
            <a href="index.php?controleur=livre&action=index&idTri=nouveaute" class="voirTout">Voir tout ></a>
            <div class="livres">
                @foreach($nouveautes as $nouveaute)
                    <div class="vignetteLivre">
                        <div class="ctnImg">
                            @php
                                $isbn = $nouveaute->getIsbn_papier();
                                $cheminImage = null;
                                $id_categorie = $nouveaute->getCategorie_id();

                                if (file_exists("liaisons/images/livres/{$id_categorie}/{$isbn}_w135.jpg")) {
                                    $cheminImage = "liaisons/images/livres/{$id_categorie}/{$isbn}";
                                }
                            @endphp
                            <span class="idNouv" hidden></span>
                            <a href="index.php?controleur=livre&action=fiche&idLivre={{ $nouveaute->getId() }}">
                                @if ($cheminImage)
                                    <picture class="ctnImg__picture">
                                        <source media="(max-width: 600px)"
                                                srcset="{{ $cheminImage }}_w135.jpg 1x, {{ $cheminImage }}_w270.jpg 2x">
                                        <source media="(min-width: 601px)"
                                                srcset="{{ $cheminImage }}_w245.jpg 1x, {{ $cheminImage }}_w490.jpg 2x">
                                        <img class="ctnImg__img imgLivre" src="{{ $cheminImage }}_w245.jpg"
                                             alt="{{ $nouveaute->getTitre() }}">
                                    </picture>
                                @else
                                    <img class="ctnImg__img imgLivre" src="liaisons/images/placeholder.svg"
                                         alt="livre {{ $nouveaute->getTitre() }}" width="245px" height="auto">
                                @endif

                            </a></div>
                        <div class="contenuTexte">
                            <h3 class="h3"><a
                                        href="index.php?controleur=livre&action=fiche&idLivre={{ $nouveaute->getId() }}">{{$nouveaute->getTitre()}}</a>
                            </h3>
                            @foreach($nouveaute->getLivresAuteursAssocies() as $livreAuteur)
                                <h4 class="h4"><a
                                            href="index.php?controleur=artiste&action=fiche&idArtiste={{$livreAuteur->getAuteurAssocie()->getId()}}"
                                            class="">{{$livreAuteur->getAuteurAssocie()->getPrenomNom()}}</a></h4>
                            @endforeach

                            <p class="texte">{{$nouveaute->getCategorieAssociee()->getNom()}}</p>
                            <p class="texte">{{$nouveaute->getPrix_can()}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        {{--        DATE PLUS LOIN QUE DATE AUJOURD'HUI--}}
        <section class="AParaitre">
            <h2 class="h2Accueil">À paraitre</h2>
            <span class="underline"></span>
            <a href="index.php?controleur=livre&action=index&idTri=aParaitre" class="voirTout">Voir tout ></a>
            <div class="livres">
                @foreach($aParaitres as $aParaitre)
                    <div class="vignetteLivre">
                        <div class="ctnImg">
                            @php
                                $isbn = $aParaitre->getIsbn_papier();
                                $cheminImage = null;
                                $id_categorie = $aParaitre->getCategorie_id();

                                if (file_exists("liaisons/images/livres/{$id_categorie}/{$isbn}_w135.jpg")) {
                                    $cheminImage = "liaisons/images/livres/{$id_categorie}/{$isbn}";
                                }
                            @endphp
                            <span class="idAP" hidden></span>
                            <a href="index.php?controleur=livre&action=fiche&idLivre={{ $aParaitre->getId() }}">
                                @if ($cheminImage)
                                    <picture class="ctnImg__picture">
                                        <source media="(max-width: 600px)"
                                                srcset="{{ $cheminImage }}_w135.jpg 1x, {{ $cheminImage }}_w270.jpg 2x">
                                        <source media="(min-width: 601px)"
                                                srcset="{{ $cheminImage }}_w245.jpg 1x, {{ $cheminImage }}_w490.jpg 2x">
                                        <img class="ctnImg__img imgLivre" src="{{ $cheminImage }}_w245.jpg"
                                             alt="{{ $aParaitre->getTitre() }}">
                                    </picture>
                                @else
                                    <img class="ctnImg__img imgLivre" src="liaisons/images/placeholder.svg"
                                         alt="livre {{ $aParaitre->getTitre() }}" width="245px" height="auto">
                                @endif

                            </a></div>
                        <div class="contenuTexte">
                            <h3 class="h3"><a
                                        href="index.php?controleur=livre&action=fiche&idLivre={{ $aParaitre->getId() }}">{{$aParaitre->getTitre()}}</a>
                            </h3>
                            @foreach($aParaitre->getLivresAuteursAssocies() as $livreAuteur)
                                <h4 class="h4"><a
                                            href="index.php?controleur=artiste&action=fiche&idArtiste={{$livreAuteur->getAuteurAssocie()->getId()}}">{{$livreAuteur->getAuteurAssocie()->getPrenomNom()}}</a>
                                </h4>
                            @endforeach
                            <p class="texte">{{$aParaitre->getCategorieAssociee()->getNom()}}</p>
                            <p class="texte">{{$aParaitre->getPrix_can()}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="lancement">
            <h2 class="h2Accueil">Lancements</h2>
            <span class="underline"></span>
            @foreach($lancements as $lancement)
                <div class="bloc">
                    <h3 class="h3">{{$lancement->getTitre()}}</h3>
                    <p class="date">{{$lancement->getDate()}}</p>
                    <div class="content">
                            @php
                                $nomSection = 'lan';
                                $cheminImageDebut = null;
                                $cheminImageFin = null;

                                if (file_exists("liaisons/images/accueil/w300/{$nomSection}_{$lancement->getId()}.jpg")) {
                                    $cheminImageDebut = "liaisons/images/accueil/";
                                    $cheminImageFin = "/{$nomSection}_{$lancement->getId()}.jpg";
                                }
                            @endphp
                            <span class="idAP" hidden></span>
                                @if ($cheminImageDebut)
                                    <picture class="ctnImg__picture">
                                        <source media="(max-width: 600px)"
                                                srcset="{{ $cheminImageDebut }}w185{{ $cheminImageFin }} 1x, {{ $cheminImageDebut }}w370{{ $cheminImageFin }} 2x">
                                        <source media="(min-width: 601px)"
                                                srcset="{{ $cheminImageDebut }}w300{{ $cheminImageFin }} 1x, {{ $cheminImageDebut }}w600{{ $cheminImageFin }} 2x">
                                        <img class="imgEv" src="{{ $cheminImageDebut }}w300{{ $cheminImageFin }}"
                                             alt="{{ $lancement->getTitre() }}">
                                    </picture>
                                @else
                                    <img class="imgEv" src="liaisons/images/placeholder.svg"
                                         alt="livre {{ $lancement->getTitre() }}" width="245px" height="auto">
                                @endif
                        <p class="texte">{{$lancement->getTexte()}}</p>
                    </div>
                    <a href="*" class="consulter">Consulter ></a>
                </div>
                <span class="separator"></span>
            @endforeach
        </section>

        <section class="evenements">
            <h2 class="h2Accueil">Événements</h2>
            <span class="underline"></span>

            @foreach($evenements as $evenement)
                <div class="bloc">
                    <h3 class="h3">{{$evenement->getTitre()}}</h3>
                    <p class="date">{{$evenement->getDate()}}</p>
                    <div class="content">
                        @php
                            $nomSection = 'ev';
                            $cheminImageDebut = null;
                            $cheminImageFin = null;

                            if (file_exists("liaisons/images/accueil/w300/{$nomSection}_{$evenement->getId()}.jpg")) {
                                $cheminImageDebut = "liaisons/images/accueil/";
                                $cheminImageFin = "/{$nomSection}_{$evenement->getId()}.jpg";
                            }
                        @endphp
                        <span class="idAP" hidden></span>
                        @if ($cheminImageDebut)
                            <picture class="ctnImg__picture">
                                <source media="(max-width: 600px)"
                                        srcset="{{ $cheminImageDebut }}w185{{ $cheminImageFin }} 1x, {{ $cheminImageDebut }}w370{{ $cheminImageFin }} 2x">
                                <source media="(min-width: 601px)"
                                        srcset="{{ $cheminImageDebut }}w300{{ $cheminImageFin }} 1x, {{ $cheminImageDebut }}w600{{ $cheminImageFin }} 2x">
                                <img class="imgEv" src="{{ $cheminImageDebut }}w300{{ $cheminImageFin }}"
                                     alt="{{ $evenement->getTitre() }}">
                            </picture>
                        @else
                            <img class="imgEv" src="liaisons/images/placeholder.svg"
                                 alt="livre {{ $evenement->getTitre() }}" width="245px" height="auto">
                        @endif
                        <p class="texte">{{$evenement->getTexte()}}</p>
                    </div>
                    <a href="*" class="consulter">Consulter ></a>
                </div>
            @endforeach
        </section>

    </div>
@endsection



<!--
* Border around books DONE
* Images DONE
* links for "see all" and books DONE
* thumbnail books
* css account DONE
*



-->

