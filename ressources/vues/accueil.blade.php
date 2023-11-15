@extends('gabarit')

@section('contenu')


    <main class="main conteneur">
        <section class="actualites">
            <h2 class="h2Accueil">Actualités</h2>
            <span class="underline"></span>
            @foreach($actualites as $actualite)
                <div class="bloc">
            <h3 class="h3">{{$actualite->getTitre()}}</h3>
            <p class="date">{{$actualite->getDate()}}</p>
            <div class="content">
                <img class="imgEv" src="liaisons/images/livres/1/978897770105_w135.jpg" alt="*">
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
            <a href="*" class="voirTout" >Voir tout ></a>
            <div class="livres">
            @foreach($nouveautes as $nouveaute)
                <div class="vignetteLivre">
            <span class="contour"></span>
            <span class="idNouv" hidden></span>
            <img class="imgLivre" src="liaisons/images/livres/1/978897770105_w135.jpg" alt="*">
            <div class="contenuTexte">
                <h3 class="h3">{{$nouveaute->getTitre()}}</h3>
                @foreach($nouveaute->getLivresAuteursAssocies() as $livreAuteur)
                <h4 class="h4">{{$livreAuteur->getAuteurAssocie()->getPrenomNom()}}</h4>
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
            <a href="*" class="voirTout" >Voir tout ></a>
            <div class="livres">
            @foreach($aParaitres as $aParaitre)
                    <div class="vignetteLivre">
            <span class="contour"></span>
            <span class="idAP" hidden></span>
                <img class="imgLivre" src="liaisons/images/livres/1/978897770105_w135.jpg" alt="*">
            <div class="contenuTexte">
                <h3 class="h3">{{$aParaitre->getTitre()}}</h3>
                @foreach($aParaitre->getLivresAuteursAssocies() as $livreAuteur)
                    <h4 class="h4">{{$livreAuteur->getAuteurAssocie()->getPrenomNom()}}</h4>
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
                <img class="imgEv" src="liaisons/images/livres/1/978897770105_w135.jpg" alt="*">
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
            <img class="imgEv" src="liaisons/images/livres/1/978897770105_w135.jpg" alt="*">
            <p class="texte">{{$evenement->getTexte()}}</p>
                </div>
            <a href="*" class="consulter">Consulter ></a>
                </div>
                @endforeach
        </section>

    </main>
@endsection



<!--
* Border around books
* Images
* links for "see all" and books
*



->

