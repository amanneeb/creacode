@extends('gabarit')
@section('contenu')

        <h1 class="titreLivre">{{$livres->getTitre()}}</h1>

    <section class="infoPrincipal">
        <img class="infoPrincipal__img" src="./liaisons/images/operatique_couv.jpg" alt="couverture Operatique" width="400px">
        <div class="LivrePanier">
            <p class="LivrePanier__theme">{{$livres->getCategorieAssociee()->getNom()}}</p>
            <!--<h2 class="LivrePanier__titre"></h2>-->
            <h3 class="LivrePanier__auteur">
                @foreach($livres->getLivresAuteursAssocies() as $auteurs)
                    {{$auteurs->getAuteurAssocie()->getPrenom()." ". $auteurs->getAuteurAssocie()->getNom()}}
                @endforeach
            </h3>
            <p class="LivrePanier__audio">ISBN: <span class="LivrePanier__isbnSpan">{{$livres->getIsbn_papier()}}</span></p>
            <p class="LivrePanier__audio">Audio:<span class="LivrePanier__audioSpan">{{$livres->getUrl_audio()}}</span></p>
            <p class="LivrePanier__epub">E-pub: <span class="LivrePanier__epubSpan">{{$livres->getIsbn_epub()}}</span></p>
            <p class="LivrePanier__pdf">PDF: <span class="LivrePanier__pdfSpan">{{$livres->getIsbn_pdf()}}</span></p>
            <p class="LivrePanier__prix">{{$livres->getPrix_can()}}</p>
        </div>
        <div class="AjoutPanier">
            <input class="AjoutPanier__moins" type="button" name="nbLivres" id="plus" value="-">
            <span class="AjoutPanier__livre">1</span>
            <input class="plus" type="button" name="nbLivres" id="moins" value="+">
            <input class="AjoutPanier__btnPanier" type="button" name="ajoutPanier" id="ajoutPanier" value="Ajouter au panier">
            <input class="AjoutPanier__btnSouhait" type="button" name="ajoutSouhait" id="ajoutSouhait" value="Ajouter à ma liste">
        </div>
        <a class="infoPrincipal__lienPrecedent" href="">Livre précédent</a>
        <a class="infoPrincipal__lienSuivant" href="">Livre suivant</a>
    </section>
    <section class="infoSupplementaires">
        <ul class="infoSupplementaires__liste">
            <li class="infoSupplementaires__item">
                <input class="infoSupplementaires__input" type="radio" name="informations"  id="resume" checked>
                <label class="infoSupplementaires__label" for="resume">Résumé</label>
                <br>
            </li>
            <li class="infoSupplementaires__item">
                <input class="infoSupplementaires__input" type="radio" name="informations" id="details">
                <label class="infoSupplementaires__label" for="details">Détails</label>
            </li>
            <li class="infoSupplementaires__item">
                <input class="infoSupplementaires__input" type="radio" name="informations" id="commentaires">
                <label class="infoSupplementaires__label" for="commentaires">Commentaires</label>
            </li>
        </ul>
        <section class="autreInfo">
            <section class="autreInfo__texte resume">
                <p>{{$livres->getLe_livre()}}</p>
            </section>
            <section class="autreInfo__texte details" hidden>
                <p>Format: <span class="autreInfo__span autreInfo__span--format">{{$livres->getFormat()}}</span></p>
                <p>Nombre de pages: <span class="autreInfo__span autreInfo__span--pages">{{$livres->getPagination()}}</span></p>
                <p>Thème: <span class="autreInfo__span autreInfo__span--theme">{{$livres->getCategorie_id()}}</span></p>
                <p>Date de publication (Québec): <span class="autreInfo__span autreInfo__span--publicationQc">{{$livres->getDate_parution_quebec()}}</span></p>
                <p>Date de publication (France): <span class="autreInfo__span autreInfo__span--publicationFr">{{$livres->getDate_parution_france()}}</span></p>
            </section>
            <section class="autreInfo__texte commentaires" hidden>
                {{$livres->getArguments_commerciaux()}}
            </section>
        </section>
    </section>

    <section class="autresLivres">
        <h4 class="autresLivres__titre">Livres similaires</h4>
        <ul class="livresSimilaires">
            <li class="livresSimilaires__item">
                <figure class="livre">
                    <img class="livre__couverture" src="./liaisons/images/operatique_couv.jpg" alt="couverture Operatique" width="250px">
                    <figcaption class="livre__titre">Opératique</figcaption>
                </figure>
            </li>
        </ul>
    </section>
@endsection