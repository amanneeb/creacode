@extends('gabarit')
@section('contenu')
        <h2 class="h2Compte">Panier</h2>
    <div class="mainPanier conteneur" id="contenu">
        <section class="sectionPanier conteneur_formulaire">
            <h3 class="sectionPanier__titre">Votre panier</h3>
            <p class="sectionPanier__msgArticle"></p>
            @foreach($articles as $article)
                <section class="livreAjoute article">
                    <div class="ctnImg">
                        <picture>
                            <source srcset="">
                            <source srcset="">
                            <img class="ctnImg__img" src="./liaisons/images/livres/{{$article->getLivreAssocie()->getCategorie_id()}}/{{$article->getLivreAssocie()->getIsbn_papier()}}_w980.jpg" alt="" width="100">
                        </picture>
                    </div>
                    <div class="ctnInfoLivre">
                        <p class="ctnInfoLivre__titre"><a class="" href="index.php?controleur=livre&action=fiche&idLivre={{$article->getLivreAssocie()->getId()}}">{{$article->getLivreAssocie()->getTitre()}}</a></p>
                        <p class="ctnInfoLivre__isbn">ISBN: <span class="ctnInfoLivre__isbnSpan">{{$article->getLivreAssocie()->getIsbn_papier()}}</span></p>
                        <p class="ctnInfoLivre__prix">Prix unitaire: <span class="ctnInfoLivre__prixSpan">{{$article->getLivreAssocie()->getPrix_can()}}</span>$</p>
                        <p class="ctnInfoLivre__total" >Total: <span class="ctnInfoLivre__totalSpan"></span>$</p>
                    </div>
                    <div class="ajoutPanier">
                        <form method="POST" action="index.php?controleur=article&action=mettreAJour&id={{$article->getId()}}">
                            <input type="text" name="livre_id" value="{{$article->getLivreAssocie()->getId()}}" hidden>
                            <input class="ajoutPanier__moins btnPrimaire" type="button" name="nbLivres" id="moins" value="-" >
                            <input class="ajoutPanier__nbLivre" type="text" name="quantite" value="{{$article->getQuantite()}}" readonly>
                            <input class="ajoutPanier__plus btnPrimaire" type="button" name="nbLivres" id="plus" value="+"><br>
                            <button class="confirmer btnSecondaire" type="submit" hidden>
                                <span class="fas fa-check fa-2x" aria-label="Confirmer" aria-hidden="true"></span>
                                <span class="visually-hidden">Confirmer la modification</span>
                            </button>
                        </form>
                    </div>
                    <div class="modificationArticle">
                        <button class="modificationArticle__btnSouhait btnSecondaire" type="button" name="ajoutSouhait" id="ajoutSouhait">
                            <span class="far fa-heart fa-2x" aria-label="ajouter" aria-hidden="true"></span>
                            <span class="label visually-hidden">Ajouter à ma liste</span>
                        </button>
                        <form method="POST" action="index.php?controleur=article&action=supprimer&id={{$article->getId()}}&panier={{$panier->getId()}}">
                            <button class="modificationArticle__btnSuppr supprimer btnSecondaire" type="submit">
                                <span class="far fa-trash-alt fa-2x" aria-label="Supprimer" aria-hidden="true"></span>
                                <span class="label visually-hidden">Supprimer</span>
                            </button>
                        </form>
                        <button class="modificationArticle__btnModif modifier btnSecondaire" type="submit">
                            <span class="far fa-pen-to-square fa-2x" aria-label="Modifier" aria-hidden="true"></span>
                            <span class="label visually-hidden">Modifier</span>
                        </button>
                    </div>
                </section>
        @endforeach
        </section>
        <form class="resumePanier conteneur_formulaire" action="index.php?controleur=panier&action=transaction" method="GET">
            <h3 class="resumePanier__titre">Résumé de la commande</h3>
            <fieldset class="sous-total">
                <label class="sous-total__label" for="sous-total">Sous-total: </label>
                <input class="sous-total__input" type="text" name="sous-total" id="sous-total" value="0" readonly>
            </fieldset>
            <fieldset class="tps">
                <label class="tps__label" for="tps">Montant TPS (5%): </label>
                <input class="tps__input" type="text" name="tps" id="tps" value="" readonly>
            </fieldset>
            <fieldset class="tvq">
                <label class="tvq__label" for="tvq">Montant TVQ (9.975%): </label>
                <input class="tvq__input" type="text" name="tvq" id="tvq" value="4" readonly>
            </fieldset>
            <fieldset class="taxes">
                <label class="taxes__label" for="taxes">Taxes: </label>
                <input class="taxes__input" type="text" name="taxes" id="taxes" value="6" readonly><br>
            </fieldset>
            <fieldset class="livraison">
                <label class="livraison__label" for="livraison">Livraison: </label>
                <input class="livraison__input" type="text" name="livraison" id="livraison" value="" readonly><br>
                <i class="livraison__details">* Le délai de livraison est de 10 jours</i>
            </fieldset>
            <fieldset class="total">
                <label class="total__label" for="total">Total: </label>
                <input class="total__input" type="text" name="total" id="total" value="" readonly><br>
            </fieldset>
            <button class="resumePanier__btnSubmit btnPrimaire" type="submit" >Passer à la caisse</button>
        </form>
    </div>

@endsection