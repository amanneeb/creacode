@extends('gabarit')
@section('contenu')
    <div id="contenu">
        <div class="ctnFilAriane--livre">
            @include('fragments.filariane')
        </div>
        <div class="ctnTitre">
            <h1 class="titreLivre">{{$lesLivres->getTitre()}}</h1>
        </div>

        <section class="ctnPage texte">
            <section class="modaleAjoutPanier visuallyhidden">
                <div class="ctnContenu">
                    <img class="ctnContenu__img"
                             src="./liaisons/images/livres/{{$lesLivres->getCategorie_id()}}/{{$lesLivres->getIsbn_papier()}}_w270.jpg"
                             alt="couverture {{$lesLivres->getTitre()}}">
                    <div>
                        <p>{{$lesLivres->getTitre()}}</p>
                        <p><span class="nbLivreChoisi"></span> x {{$lesLivres->getPrix_can()}}$</p>
                        <form action="./index.php?controleur=panier&action=fiche&id={{$panier->getId()}}"
                              onsubmit="cacherLaModale()" method="POST">
                            <input class="btnPanier btnPrimaire" type="submit" value="Voir mon panier">
                        </form>
                        <form action="./index.php?controleur=livre&action=fiche&idLivre={{$lesLivres->getId()}}"
                              method="POST" onsubmit="cacherLaModale()">
                            <button type="submit" class="btnLivre btnSecondaire">Retourner aux livres</button>
                        </form>
                        <p><span><i class="fa-solid fa-circle-check fa-xl"></i></span> Le livre a été ajouté au panier.
                        </p>
                    </div>
                </div>
            </section>
            <section class="infoPrincipal">
                <section class="images">
                    <div class="ctnImg">
                        <picture>
                            <source media="(max-width: 600px)" srcset="./liaisons/images/livres/{{$lesLivres->getCategorie_id()}}/{{$lesLivres->getIsbn_papier()}}_w490.jpg">
                            <source media="(min-width: 601px)" srcset="./liaisons/images/livres/{{$lesLivres->getCategorie_id()}}/{{$lesLivres->getIsbn_papier()}}_w980.jpg">
                            <img class="ctnImg__img"
                                 src="./liaisons/images/livres/{{$lesLivres->getCategorie_id()}}/{{$lesLivres->getIsbn_papier()}}_w980.jpg"
                                 alt="couverture {{$lesLivres->getTitre()}}" width="400">
                        </picture>
                    </div>
                    <div class="ctnVisioExtraits">
                        @if(file_exists("./liaisons/images/livres/{$lesLivres->getCategorie_id()}/{$lesLivres->getIsbn_papier()}_001_w135.png") || file_exists("./liaisons/images/livres/{$lesLivres->getCategorie_id()}/{$lesLivres->getIsbn_papier()}_001_w135.jpg"))
                            @for($cpt = 1; $cpt<=3; $cpt++)
                                <img class="ctnVisioExtraits__img "
                                         src="./liaisons/images/livres/{{$lesLivres->getCategorie_id()}}/{{$lesLivres->getIsbn_papier()}}_00{{$cpt}}_w328.png"
                                         alt="couverture {{$lesLivres->getTitre()}}">
                            @endfor
                        @endif
                        <section class="ctnModale cache">
                            <button class="ctnModale__btn btnPrimaire"><i class="fa-solid fa-x"></i></button>
                            <img class="ctnModale__img"
                                     src="./liaisons/images/livres/{{$lesLivres->getCategorie_id()}}/{{$lesLivres->getIsbn_papier()}}_w328.png"
                                     alt="couverture {{$lesLivres->getTitre()}}" width="300">
                            <section class="ctnVisionneuse">
                                <button type="button" class="ctnVisionneuse__precedent btnPrimaire" ><i class="fa-solid fa-chevron-left"></i></button>
                                <ul class="ctnVisionneuse__liste">
                                    <li class="ctnVisionneuse__item"><img id="0" class="ctnVisionneuse__img"
                                                                          src="./liaisons/images/livres/{{$lesLivres->getCategorie_id()}}/{{$lesLivres->getIsbn_papier()}}_w328.jpg"
                                                                          alt="couverture {{$lesLivres->getTitre()}}">
                                    </li>
                                    @for($cpt = 1; $cpt<=3; $cpt++)
                                        <li class="ctnVisionneuse__item">
                                            <img id="{{$cpt}}" class="ctnVisionneuse__img"
                                                     src="./liaisons/images/livres/{{$lesLivres->getCategorie_id()}}/{{$lesLivres->getIsbn_papier()}}_00{{$cpt}}_w328.png"
                                                     alt="couverture {{$lesLivres->getTitre()}}">
                                        </li>
                                    @endfor
                                </ul>
                                <button type="button" class="ctnVisionneuse__suivant btnPrimaire" ><i class="fa-solid fa-chevron-right"></i></button>
                            </section>
                        </section>
                    </div>
                    <div class="defilement">
                        <a class="defilement__lienPrecedent hyperlien"
                           href="index.php?controleur=livre&action=fiche&idLivre={{$lesLivres->getId() - 1}}">&#9664;
                            Livre précédent</a>
                        <a class="defilement__lienSuivant hyperlien"
                           href="index.php?controleur=livre&action=fiche&idLivre={{$lesLivres->getId() + 1}}">Livre
                            suivant &#9654;</a>
                    </div>
                </section>
                <section class="ctnInfoPanier">
                    <div class="livrePanier">
                        <p class="livrePanier__theme">{{$lesLivres->getCategorieAssociee()->getNom()}}</p>
                        <h3 class="livrePanier__auteur">
                            @foreach($lesLivres->getLivresAuteursAssocies() as $auteurs)
                                <a class="livrePanier__auteurLien"
                                   href="index.php?controleur=artiste&action=fiche&idAuteur={{$auteurs->getAuteurAssocie()->getId()}}">{{$auteurs->getAuteurAssocie()->getPrenom()." ". $auteurs->getAuteurAssocie()->getNom()}}</a>
                                <br>
                            @endforeach
                        </h3>
                        <p class="livrePanier__audio">ISBN: <span
                                    class="livrePanier__isbnSpan">{{$lesLivres->getIsbn_papier()}}</span></p>
                        @if($lesLivres->getUrl_audio())
                            <p class="livrePanier__audio">Audio:<span
                                        class="livrePanier__audioSpan">{{$lesLivres->getUrl_audio()}}</span></p>
                        @endif
                        @if($lesLivres->getIsbn_epub())
                            <p class="livrePanier__epub">E-pub: <span
                                        class="livrePanier__epubSpan">{{$lesLivres->getIsbn_epub()}}</span></p>
                        @endif
                        @if($lesLivres->getIsbn_pdf())
                            <p class="livrePanier__pdf">PDF: <span
                                        class="livrePanier__pdfSpan">{{$lesLivres->getIsbn_pdf()}}</span></p>
                        @endif
                        <p class="livrePanier__prixCan"><span
                                    class="livrePanier__SpanPrixCan">{{$lesLivres->getPrix_can()}}</span>$</p>
                        <p class="livrePanier__prixFr"><span
                                    class="livrePanier__SpanPrixFr">{{$lesLivres->getPrix_euro()}}</span>€</p>
                    </div>
                    <form class="ajoutPanier" method="POST" action="index.php?controleur=article&action=enregistrer">
                        <input class="ajoutPanier__livreId" name="livre_id" value="{{$lesLivres->getId()}}" hidden>
                        <input class="ajoutPanier__moins btnPrimaire" type="button" id="moins" value="-">
                        @if($articles)
                            <input class="ajoutPanier__nbLivre" name="quantite" value="{{$articles->getQuantite()}}">
                        @else
                            <input class="ajoutPanier__nbLivre" name="quantite" value="1">
                        @endif
                        <input class="ajoutPanier__plus btnPrimaire" type="button" id="plus" value="+"><br>
                        <button class="ajoutPanier__btnPanier btnPrimaire" type="submit" id="ajoutPanier"><i
                                    class="fa-solid fa-cart-shopping fa-lg" style="color: #ffffff;"></i>Ajouter au
                            panier
                        </button>
                        <br>
                        <button class="ajoutPanier__btnSouhait btnSecondaire" type="button" name="ajoutSouhait"
                                id="ajoutSouhait"><i class="fa-solid fa-heart fa-lg" style="color: #c64542;"></i>Ajouter
                            à ma liste
                        </button>
                    </form>
                </section>
            </section>
            <section class="infoSupplementaires">
                <section class="typeInfos">
                    <input class="typeInfos__input onglets" type="radio" name="informations" id="resume">
                    <label class="typeInfos__label" for="resume">Résumé</label>
                    <input class="typeInfos__input onglets" type="radio" name="informations" id="details">
                    <label class="typeInfos__label" for="details">Détails</label>
                    <input class="typeInfos__input onglets" type="radio" name="informations" id="commentaires">
                    <label class="typeInfos__label" for="commentaires">Commentaires</label>
                </section>
                <section class="visioInfo">
                    <div class="visioInfo__texte resume">
                        {!! $lesLivres->getLe_livre() !!}
                    </div>
                    <div class="visioInfo__texte details" hidden>
                        <p>Format: <span
                                    class="visioInfo__span visioInfo__span--format">{{$lesLivres->getFormat()}}</span>
                        </p>
                        <p>Nombre de pages: <span
                                    class="visioInfo__span visioInfo__span--pages">{{$lesLivres->getPagination()}}</span>
                        </p>
                        <p>Thème: <span
                                    class="visioInfo__span visioInfo__span--theme">{{$lesLivres->getCategorie_id()}}</span>
                        </p>
                        <p>Date de publication (Québec): <span
                                    class="visioInfo__span visioInfo__span--publicationQc">{{$lesLivres->getDate_parution_quebec()}}</span>
                        </p>
                        <p>Date de publication (France): <span
                                    class="visioInfo__span visioInfo__span--publicationFr">{{$lesLivres->getDate_parution_france()}}</span>
                        </p>
                        <p>Type d'impression: <span
                                    class="visioInfo__span visioInfo__span--impression">{{$lesLivres->getImpressionAssociee()->getNom()}}</span>
                        </p>
                        <p>Type de couverture: <span
                                    class="visioInfo__span visioInfo__span--couverture">{{$lesLivres->getCouvertureAssociee()->getNom()}}</span>
                        </p>

                        @if($reconnaissances)
                            <p>Les reconnaissances obtenues :</p>
                            <ul>
                                @foreach($reconnaissances as $reconnaissance)
                                    <li>{!! $reconnaissance->getLaReconnaissance() !!}</li>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                    <div class="visioInfo__texte commentaires" hidden>
                        {!!$lesLivres->getArguments_commerciaux() !!}
                    </div>
                </section>
            </section>

            <section class="autresLivres">
                <h4 class="autresLivres__titre" id="similaires">Livres de la même catégorie</h4>
                <ul class="livresSimilaires">
                    @foreach($livresPagination as $livresPag)
                        <li class="livresSimilaires__item">
                            <a class="livresSimilaires__lien"
                               href='index.php?controleur=livre&action=fiche&idLivre={{$livresPag['id']}}'>
                                <figure class="livre">
                                    <div class="ctnImg">
                                        <img class="ctnImg__img"
                                                 src="./liaisons/images/livres/{{$livresPag["categorie_id"]}}/{{$livresPag["isbn_papier"]}}_w245.jpg"
                                                 alt="">
                                    </div>
                                    <figcaption class="livre__titre">{{$livresPag['titre']}}</figcaption>
                                </figure>
                            </a>
                        </li>
                    @endforeach
                </ul>
                @include('fragments.paginationFiche')
            </section>

        </section>
    </div>
@endsection