@extends('gabarit')
@section('contenu')
    @include('fragments.filariane')
        <h1 class="titreLivre">{{$lesLivres->getTitre()}}</h1>

    <section class="infoPrincipal">
        <img class="infoPrincipal__img" src="./liaisons/images/operatique_couv.jpg" alt="couverture Operatique" width="400px">
        <div class="LivrePanier">
            <p class="LivrePanier__theme">{{$lesLivres->getCategorieAssociee()->getNom()}}</p>
            <!--<h2 class="LivrePanier__titre"></h2>-->
            <h3 class="LivrePanier__auteur">
                @foreach($lesLivres->getLivresAuteursAssocies() as $auteurs)
                    <a class="LivrePanier__auteurLien" href="">{{$auteurs->getAuteurAssocie()->getPrenom()." ". $auteurs->getAuteurAssocie()->getNom()}}</a>
                @endforeach
            </h3>
            <p class="LivrePanier__audio">ISBN: <span class="LivrePanier__isbnSpan">{{$lesLivres->getIsbn_papier()}}</span></p>
            <p class="LivrePanier__audio">Audio:<span class="LivrePanier__audioSpan">{{$lesLivres->getUrl_audio()}}</span></p>
            <p class="LivrePanier__epub">E-pub: <span class="LivrePanier__epubSpan">{{$lesLivres->getIsbn_epub()}}</span></p>
            <p class="LivrePanier__pdf">PDF: <span class="LivrePanier__pdfSpan">{{$lesLivres->getIsbn_pdf()}}</span></p>
            <p class="LivrePanier__prixCan"><span class="LivrePanier__SpanPrixCan">{{$lesLivres->getPrix_can()}}</span>$</p>
            <p class="LivrePanier__prixFr"><span class="LivrePanier__SpanPrixFr">{{$lesLivres->getPrix_euro()}}</span>€</p>
        </div>
        <div class="AjoutPanier">
            <input class="AjoutPanier__moins btnPrimaire" type="button" name="nbLivres" id="plus" value="-">
            <span class="AjoutPanier__livre">1</span>
            <input class="AjoutPanier__plus btnPrimaire" type="button" name="nbLivres" id="moins" value="+">
            <input class="AjoutPanier__btnPanier btnPrimaire" type="button" name="ajoutPanier" id="ajoutPanier" value="Ajouter au panier">
            <input class="AjoutPanier__btnSouhait btnSecondaire" type="button" name="ajoutSouhait" id="ajoutSouhait" value="Ajouter à ma liste">
        </div>
        <div class="defilement">
            <a class="defilement__lienPrecedent hyperlien" href="">Livre précédent</a>
            <a class="defilement__lienSuivant hyperlien" href="">Livre suivant</a>
        </div>
    </section>
    <section class="infoSupplementairesPLus">
        <section class="infoSupplementaires">
            <input class="infoSupplementaires__input onglets" type="radio" name="informations"  id="resume">
            <label class="infoSupplementaires__label" for="resume">Résumé</label>
            <input class="infoSupplementaires__input onglets" type="radio" name="informations" id="details">
            <label class="infoSupplementaires__label" for="details">Détails</label>
            <input class="infoSupplementaires__input onglets" type="radio" name="informations" id="commentaires">
            <label class="infoSupplementaires__label" for="commentaires">Commentaires</label>
        </section>
        <section class="autreInfo">
            <div class="autreInfo__texte resume">
                <p>{{$lesLivres->getLe_livre()}}</p>
            </div>
            <div class="autreInfo__texte details" hidden>
                <p>Format: <span class="autreInfo__span autreInfo__span--format">{{$lesLivres->getFormat()}}</span></p>
                <p>Nombre de pages: <span class="autreInfo__span autreInfo__span--pages">{{$lesLivres->getPagination()}}</span></p>
                <p>Thème: <span class="autreInfo__span autreInfo__span--theme">{{$lesLivres->getCategorie_id()}}</span></p>
                <p>Date de publication (Québec): <span class="autreInfo__span autreInfo__span--publicationQc">{{$lesLivres->getDate_parution_quebec()}}</span></p>
                <p>Date de publication (France): <span class="autreInfo__span autreInfo__span--publicationFr">{{$lesLivres->getDate_parution_france()}}</span></p>
                <p>Type d'impression: <span class="autreInfo__span autreInfo__span--impression">{{$lesLivres->getImpressionAssociee()->getNom()}}</span></p>
                <p>Type de couverture: <span class="autreInfo__span autreInfo__span--couverture">{{$lesLivres->getCouvertureAssociee()->getNom()}}</span></p>
            </div>
            <p class="autreInfo__texte commentaires" hidden>
                {{$lesLivres->getArguments_commerciaux()}}
            </p>
        </section>
    </section>

    <section class="autresLivres">
        <h4 class="autresLivres__titre">Livres similaires</h4>
    </section>
        <ul class="livresSimilaires">
            @foreach($livresPagination as $livresPag)
                <li class="livresSimilaires__item">
                    <a href='index.php?controleur=livre&action=fiche&idLivre={{$livresPag["id"]}}&idCategorie={{$livresPag["categorie_id"]}}'>
                        <figure>
                            <img class="livre__couverture" src="./liaisons/images/operatique_couv.jpg" alt="couverture Operatique" width="100px">
                            <figcaption class="livre__titre">{{$livresPag["titre"]}}</figcaption>
                        </figure>
                    </a>
                </li>
            @endforeach
        </ul>
        @include('fragments.paginationFiche')
@endsection