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
            <p class="texte">{{$lancement->getLancement()}}</p>
            <span class="separator"></span>
                @endforeach
        </section>

{{--        <section class="evenements">--}}
{{--            <h1 class="h1">Événements</h1>--}}
{{--            <span class="underline"></span>--}}
{{--            <h2 class="h2">L'abeille à miel en balado</h2>--}}
{{--            <p class="date">01/01/2023</p>--}}
{{--            <img class="imgEv" src="*" alt="*">--}}
{{--            <p class="texte">La Pastèque et La puce à l’oreille sont fières de présenter une série de balados en six épisodes, inspirée de l’univers unique de Guillaume Perreault ! </p>--}}
{{--            <a href="*" class="consulter">Consulter ></a>--}}
{{--        </section>--}}
    </main>
@endsection

