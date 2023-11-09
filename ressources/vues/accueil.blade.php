@extends('gabarit')

@section('contenu')


    <main class="main conteneur">
        <section class="actualites">
            <h2 class="h2Accueil">Actualités</h2>
            <span class="underline"></span>
            @foreach($actualites as $actualite)
            <h3 class="h3">{{$actualite->getTitre()}}</h3>
            <h4 class="h4">{{$actualite->getDate()}}</h4>
            <p class="texte">{{$actualite->getActualite()}}</p>
            <a href="*" class="consulter">Consulter ></a>
            @endforeach
        </section>

{{--       DATE AUJOURD'HUI MOINS 14 JOURS--}}
        <section class="nouveautes">
            <h2 class="h2">Nouveautés</h2>
            <span class="underline"></span>
            <a href="*" class="voirTout" >Voir tout ></a>
            @foreach($nouveautes as $nouveaute)
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
                @endforeach
        </section>

{{--        DATE PLUS LOIN QUE DATE AUJOURD'HUI--}}
        <section class="AParaitre">
            <h2 class="h2">À paraitre</h2>
            <span class="underline"></span>
            <a href="*" class="voirTout" >Voir tout ></a>
            @foreach($aParaitres as $aParaitre)
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
                @endforeach
        </section>

        <section class="lancement">
            <h2 class="h2">Lancements</h2>
            <span class="underline"></span>
            @foreach($lancements as $lancement)
            <h3 class="h3">{{$lancement->getTitre()}}</h3>
            <p class="date">{{$lancement->getDate()}}</p>
            <p class="texte">{{$lancement->getTexte()}}</p>
                <a href="*" class="consulter">Consulter ></a>
            <span class="separator"></span>
                @endforeach
        </section>

        <section class="evenements">
            <h2 class="h2">Événements</h2>
            <span class="underline"></span>

            @foreach($evenements as $evenement)
            <h3 class="h3">{{$evenement->getTitre()}}</h3>
            <p class="date">{{$evenement->getDate()}}</p>
            <img class="imgEv" src="liaisons/images/livres/1/978897770105_w135.jpg" alt="*">
            <p class="texte">{{$evenement->getTexte()}}</p>
            <a href="*" class="consulter">Consulter ></a>
                @endforeach
        </section>

    </main>
@endsection

