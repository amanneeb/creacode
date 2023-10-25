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
{{--        <section class="nouveautes">--}}
{{--            <h1 class="h1">Nouveautés</h1>--}}
{{--            <span class="underline"></span>--}}
{{--            <a href="*" class="voirTout" >Voir tout ></a>--}}
{{--            <span class="contour"></span>--}}
{{--            <span class="idNouv" hidden></span>--}}
{{--            <img class="imgLivre" src="*" alt="*">--}}
{{--            <div class="contenuTexte">--}}
{{--                <h2 class="h2">Le brouillard</h2>--}}
{{--                <h3 class="h3">Julia Sarda</h3>--}}
{{--                <p class="texte">jeunesse</p>--}}
{{--                <p class="texte">21.95$</p>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        DATE PLUS LOIN QUE DATE AUJOURD'HUI--}}
{{--        <section class="AParaitre">--}}
{{--            <h1 class="h1">À paraitre</h1>--}}
{{--            <span class="underline"></span>--}}
{{--            <a href="*" class="voirTout" >Voir tout ></a>--}}
{{--            <span class="contour"></span>--}}
{{--            <span class="idAP" hidden></span>--}}
{{--            <img class="imgLivre" src="*" alt="*">--}}
{{--            <div class="contenuTexte">--}}
{{--                <h2 class="h2">Le brouillard</h2>--}}
{{--                <h3 class="h3">Julia Sarda</h3>--}}
{{--                <p class="texte">jeunesse</p>--}}
{{--                <p class="texte">21.95$</p>--}}
{{--            </div>--}}
{{--        </section>--}}

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
            <img class="imgEv" src="*" alt="*">
            <p class="texte">{{$evenement->getTexte()}}</p>
            <a href="*" class="consulter">Consulter ></a>
                @endforeach
        </section>

{{--        @foreach($nouveautes as $nouveaute)--}}
{{--            <p>{{$nouveaute->getTitre()}}</p>--}}

{{--            @endforeach--}}

        @foreach($aParaitres as $aParaitre)
            <p>{{$aParaitre->getTitre()}}</p>
            @endforeach
    </main>
@endsection

