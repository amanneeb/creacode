@extends('gabarit')
@section('contenu')
    @include('fragments.filariane')

    <div class="ctnTitre">
        <h1 class="titreLivre">{{$lesLivres->getTitre()}}</h1>
    </div>

    <div class="ctnPage texte">
        <section class="infoPrincipal">
            <div class="images">
                <div class="ctnImg">
                    <img class="ctnImg__img" src="./liaisons/images/operatique_couv.jpg" alt="couverture Operatique" width="400px">
                </div>
                <div class="ctnVisioExtraits">
                    @if(file_exists("./liaisons/images/operatique_001.png") || file_exists("./liaisons/images/operatique_001.jpg"))
                        @for($cpt = 1; $cpt<=3; $cpt++)
                            <img class="ctnVisioExtraits__img " src="./liaisons/images/operatique_00{{$cpt}}.png" alt="">
                        @endfor
                    @endif
                    <section class="ctnModale cache">
                        <button class="ctnModale__btn" height="20px"><img src="./liaisons/images/fermer.svg" width="20px">Fermer</button>
                        <img class="ctnModale__img" src="./liaisons/images/operatique_001.png" alt="" width="300px">
                        <section class="ctnVisionneuse">
                            <button class="ctnVisionneuse__precedent"><img src="./liaisons/images/precedent.svg"></button>
                            <ul class="ctnVisionneuse__liste" >
                                <li><img class="ctnVisionneuse__img" src="./liaisons/images/operatique_couv.jpg"></li>
                                @for($cpt = 1; $cpt<=3; $cpt++)
                                    <li class="ctnVisionneuse__item" id="{{$cpt}}"> <img class="ctnVisionneuse__img " src="./liaisons/images/operatique_00{{$cpt}}.png" alt=""> </li>
                                @endfor
                            </ul>
                            <button class="ctnVisionneuse__suivant" ><img src="./liaisons/images/suivant.svg"></button>
                        </section>

                    </section>
                </div>
                <div class="defilement">
                    <a class="defilement__lienPrecedent hyperlien" href="">Livre précédent</a>
                    <a class="defilement__lienSuivant hyperlien" href="">Livre suivant</a>
                </div>
            </div>
            <div class="ctnInfoPanier">
                <div class="livrePanier">
                    <p class="livrePanier__theme">{{$lesLivres->getCategorieAssociee()->getNom()}}</p>
                    <h3 class="livrePanier__auteur">
                        @foreach($lesLivres->getLivresAuteursAssocies() as $auteurs)
                            <a class="livrePanier__auteurLien" href="index.php?controleur=artiste&action=fiche&idArtiste={{$auteurs->getAuteurAssocie()->getId()}}">{{$auteurs->getAuteurAssocie()->getPrenom()." ". $auteurs->getAuteurAssocie()->getNom()}}</a><br>
                        @endforeach
                    </h3>
                    <p class="livrePanier__audio">ISBN: <span class="livrePanier__isbnSpan">{{$lesLivres->getIsbn_papier()}}</span></p>
                    @if($lesLivres->getUrl_audio())
                        <p class="livrePanier__audio">Audio:<span class="livrePanier__audioSpan">{{$lesLivres->getUrl_audio()}}</span></p>
                    @endif
                    @if($lesLivres->getIsbn_epub())
                        <p class="livrePanier__epub">E-pub: <span class="livrePanier__epubSpan">{{$lesLivres->getIsbn_epub()}}</span></p>
                    @endif
                    @if($lesLivres->getIsbn_pdf())
                        <p class="livrePanier__pdf">PDF: <span class="livrePanier__pdfSpan">{{$lesLivres->getIsbn_pdf()}}</span></p>
                    @endif
                    <p class="livrePanier__prixCan"><span class="livrePanier__SpanPrixCan">{{$lesLivres->getPrix_can()}}</span>$</p>
                    <p class="livrePanier__prixFr"><span class="livrePanier__SpanPrixFr">{{$lesLivres->getPrix_euro()}}</span>€</p>
                </div>
                <div class="ajoutPanier">
                    <input class="ajoutPanier__moins btnPrimaire" type="button" name="nbLivres" id="moins" value="-">
                    <span class="ajoutPanier__nbLivre">1</span>
                    <input class="ajoutPanier__plus btnPrimaire" type="button" name="nbLivres" id="plus" value="+"><br>
                    <button class="ajoutPanier__btnPanier btnPrimaire" type="button" name="ajoutPanier" id="ajoutPanier"><!--<span><img class="ctnImg__img" src="./liaisons/images/cart.svg" alt="" width="30px"></span>-->Ajouter au panier</button><br>
                    <button class="ajoutPanier__btnSouhait btnSecondaire" type="button" name="ajoutSouhait" id="ajoutSouhait"><!--<span><img class="ctnImg__img" src="./liaisons/images/coeur_vide.svg" alt="" width="30px"></span>-->Ajouter à ma liste</button>
                </div>
            </div>
        </section>
        <section class="infoSupplementaires">
            <section class="typeInfos">
                <input class="typeInfos__input onglets" type="radio" name="informations"  id="resume">
                <label class="typeInfos__label" for="resume">Résumé</label>
                <input class="typeInfos__input onglets" type="radio" name="informations" id="details">
                <label class="typeInfos__label" for="details">Détails</label>
                <input class="typeInfos__input onglets" type="radio" name="informations" id="commentaires">
                <label class="typeInfos__label" for="commentaires">Commentaires</label>
            </section>
            <section class="visioInfo">
                <div class="visioInfo__texte resume">
                    <p>{!! $lesLivres->getLe_livre() !!}</p>
                </div>
                <div class="visioInfo__texte details" hidden>
                    <p>Format: <span class="visioInfo__span visioInfo__span--format">{{$lesLivres->getFormat()}}</span></p>
                    <p>Nombre de pages: <span class="visioInfo__span visioInfo__span--pages">{{$lesLivres->getPagination()}}</span></p>
                    <p>Thème: <span class="visioInfo__span visioInfo__span--theme">{{$lesLivres->getCategorie_id()}}</span></p>
                    <p>Date de publication (Québec): <span class="visioInfo__span visioInfo__span--publicationQc">{{$lesLivres->getDate_parution_quebec()}}</span></p>
                    <p>Date de publication (France): <span class="visioInfo__span visioInfo__span--publicationFr">{{$lesLivres->getDate_parution_france()}}</span></p>
                    <p>Type d'impression: <span class="visioInfo__span visioInfo__span--impression">{{$lesLivres->getImpressionAssociee()->getNom()}}</span></p>
                    <p>Type de couverture: <span class="visioInfo__span visioInfo__span--couverture">{{$lesLivres->getCouvertureAssociee()->getNom()}}</span></p>

                    @if($reconnaissances)
                        <p>Les reconnaissances obtenues :</p>
                        <ul>
                            @foreach($reconnaissances as $reconnaissance)
                                <li>{!! $reconnaissance->getLaReconnaissance() !!}</li>
                            @endforeach
                        </ul>
                    @endif

                </div>
                <p class="visioInfo__texte commentaires" hidden>
                    {!!$lesLivres->getArguments_commerciaux() !!}
                </p>
            </section>
        </section>

        <section class="autresLivres">
            <h4 class="autresLivres__titre" id="similaires">Livres de la même catégorie</h4>
        </section>
        <ul class="livresSimilaires">
            @foreach($livresPagination as $livresPag)
                <li class="livresSimilaires__item">
                    <a class="livresSimilaires__lien" href='index.php?controleur=livre&action=fiche&idLivre={{$livresPag['id']}}'>
                        <figure class="livre">
                            <div class="ctnImg">
                                <img class="ctnImg__img" src="./liaisons/images/operatique_couv.jpg" alt="couverture Operatique">
                            </div>
                            <figcaption class="livre__titre">{{$livresPag['titre']}}</figcaption>
                        </figure>
                    </a>
                </li>

            @endforeach
        </ul>
        @include('fragments.paginationFiche')
    </div>

@endsection