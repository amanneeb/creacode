@extends('gabarit')

@section('contenu')


    <main class="main">
        <section class="actualites">
            <h1 class="h1">Actualités</h1>
            <span class="underline"></span>
            @foreach($actualites as $actualite)
            <h2 class="h2">{{$actualite->getTitre()}}</h2>
            <h3 class="h3">{{$actualite->getDate()}}</h3>
            <p class="texte">{{$actualite->getActualite()}}</p>
            <a href="*" class="consulter">Consulter ></a>
            @endforeach
        </section>

{{--       DATE AUJOURD'HUI MOINS 14 JOURS--}}
        <section class="nouveautes">
            <h1 class="h1">Nouveautés</h1>
            <span class="underline"></span>
            <a href="*" class="voirTout" >Voir tout ></a>
            @foreach($nouveautes as $nouveaute)
            <span class="contour"></span>
            <span class="idNouv" hidden></span>
            <img class="imgLivre" src="liaisons/images/logo.svg" alt="*">
            <div class="contenuTexte">
                <h2 class="h2">{{$nouveaute->getTitre()}}</h2>
                @foreach($nouveaute->getLivresAuteursAssocies() as $livreAuteur)
                <h3 class="h3">{{$livreAuteur->getAuteurAssocie()->getPrenomNom()}}</h3>
                @endforeach

                    <p class="texte">{{$nouveaute->getCategorieAssociee()->getNom()}}</p>
                <p class="texte">{{$nouveaute->getPrix_can()}}</p>
            </div>
                @endforeach
        </section>

{{--        DATE PLUS LOIN QUE DATE AUJOURD'HUI--}}
        <section class="AParaitre">
            <h1 class="h1">À paraitre</h1>
            <span class="underline"></span>
            <a href="*" class="voirTout" >Voir tout ></a>
            @foreach($aParaitres as $aParaitre)
            <span class="contour"></span>
            <span class="idAP" hidden></span>
                <img class="imgLivre" src="liaisons/images/logo.svg" alt="*">
            <div class="contenuTexte">
                <h2 class="h2">{{$aParaitre->getTitre()}}</h2>
                @foreach($aParaitre->getLivresAuteursAssocies() as $livreAuteur)
                    <h3 class="h3">{{$livreAuteur->getAuteurAssocie()->getPrenomNom()}}</h3>
                @endforeach
                <p class="texte">{{$aParaitre->getCategorieAssociee()->getNom()}}</p>
                <p class="texte">{{$aParaitre->getPrix_can()}}</p>
            </div>
                @endforeach
        </section>

        <section class="lancement">
            <h1 class="h1">Lancements</h1>
            <span class="underline"></span>
            @foreach($lancements as $lancement)
            <h2 class="h2">{{$lancement->getTitre()}}</h2>
            <p class="date">{{$lancement->getDate()}}</p>
            <p class="texte">{{$lancement->getTexte()}}</p>
                <a href="*" class="consulter">Consulter ></a>
            <span class="separator"></span>
                @endforeach
        </section>

        <section class="evenements">
            <h1 class="h1">Événements</h1>
            <span class="underline"></span>

            @foreach($evenements as $evenement)
            <h2 class="h2">{{$evenement->getTitre()}}</h2>
            <p class="date">{{$evenement->getDate()}}</p>
            <img class="imgEv" src="liaisons/images/logo.svg" alt="*">
            <p class="texte">{{$evenement->getTexte()}}</p>
            <a href="*" class="consulter">Consulter ></a>
                @endforeach
        </section>

    </main>
@endsection

