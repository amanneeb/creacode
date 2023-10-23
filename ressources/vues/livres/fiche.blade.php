@extends('gabarit')
@section('contenu')
    @include('entete')
        <h1>{{$titre}}</h1>

    <section class="infoPrincipal">
        <img class="infoPrincipal__img" src="./liaisons/images/operatique_couv.jpg" alt="couverture Operatique" width="400px">
        <div class="LivrePanier">
            <p class="LivrePanier__theme"></p>
            <h2 class="LivrePanier__titre"></h2>
            <h3 class="LivrePanier__auteur"></h3>
            <p class="LivrePanier__audio">Audio:<span class="LivrePanier__audioSpan"></span></p>
            <p class="LivrePanier__epub">E-pub: <span class="LivrePanier__epubSpan"></span></p>
            <p class="LivrePanier__pdf">PDF: <span class="LivrePanier__pdfSpan"></span></p>
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
            <li class="infoSupplementaires__item"><button class="infoSupplementaires__btn">Résumé</button></li>
            <li class="infoSupplementaires__item"><button class="infoSupplementaires__btn">Détails</button></li>
            <li class="infoSupplementaires__item"><button class="infoSupplementaires__btn">Commentaires</button></li>
        </ul>
        <p class="infoSupplementaires__texte"></p>
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

    @include('pieddepage')
@endsection