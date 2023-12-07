/**
 * @file La Pastèque - Gestion du panier
 * @author Anaïs Mannée-Batschy
 * @version 0.0.1
 */
const refNbLivre = document.querySelector(" .ajoutPanier__nbLivre");
const refBtnPlus = document.querySelector(".ajoutPanier__plus");
const refBtnMoins = document.querySelector(".ajoutPanier__moins");
let intCptNbClicModifier = 0;

const refSousTotal = document.querySelector(".sous-total__input");
const refTaxes = document.querySelector(".taxes__input");
const refLivraison = document.querySelector(".livraison__input");



//******************* MESSAGE CONTENU DU PANIER **********************//
/**
 * Afficher un message au sujet du nombre d'articles dans le panier
 */
function afficherMessagePanierVide() {
    const arrSectionArticle = document.querySelectorAll(".livreAjoute");
    const refRetroArticle = document.querySelector(".sectionPanier__msgArticle");

    if(arrSectionArticle.length === 0){
        refRetroArticle.innerText = "Votre panier est vide.";
        refLivraison.value = "0";
    }else{
        if(arrSectionArticle.length === 1){
            refRetroArticle.innerText = "Votre panier contient "+arrSectionArticle.length+" article.";
        }else{
            refRetroArticle.innerText = "Votre panier contient "+arrSectionArticle.length+" articles.";
        }
    }
}



//******************* AFFICHAGE DES BOUTONS + ET - **********************//
/**
 * Gérer affichage des boutons plus et moins au chargement de la page
 */
function afficherBoutonsPlusMoins(){
    const arrBoutonsMoins = document.querySelectorAll(".ajoutPanier__moins");
    const arrBoutonsPlus = document.querySelectorAll(".ajoutPanier__plus");

    arrBoutonsMoins.forEach(
        boutonMoins => {
            let strNbDeLivre = parseInt(boutonMoins.closest("form").children[2].value);
            if(strNbDeLivre === 1){
                boutonMoins.setAttribute("disabled", "");
            }else{
                boutonMoins.removeAttribute("disabled");
            }
        }
    );
    arrBoutonsPlus.forEach(
        boutonPlus => {
            let strNbDeLivre = parseInt(boutonPlus.closest("form").children[2].value);
            if(strNbDeLivre === 6){
                boutonPlus.setAttribute("disabled", "");
            }else{
                boutonPlus.removeAttribute("disabled");
            }
        }
    );
    changerTotal();
}


/**
 * Faire apparaitre et disparaitre le bouton moins en fonction du nombre de livres
 */
function afficherBoutonMoins(){
    if(refNbLivre.value==1){
        refBtnMoins.setAttribute("disabled", "");
        changerTotal();
    }else{
        refBtnMoins.removeAttribute("disabled");
        changerTotal();
    }
}


/**
 * Faire apparaitre et disparaitre le bouton plus en fonction du nombre de livres dans la section à modifier
 */
function afficherBoutonPlus(){
    if(refNbLivre.value==6){
        refBtnPlus.setAttribute("disabled", "");
        changerTotal();
    }else{
        refBtnPlus.removeAttribute("disabled");
        changerTotal();
    }
}



//******************* MODIFICATION DU NOMBRE DE LIVRES **********************//
/**
 * Activer la possibilité de modifier la quantité liée à un livre
 * @param e {event}
 */
function activerModification(e) {
    arrBtnModifier = document.querySelectorAll(".changer");
    if(e.target.tagName === "BUTTON" && e.target.children[1].innerHTML === "Modifier"){
        if(intCptNbClicModifier !== 0){
            retirerEcouteursEvenements()
        }
        arrBtnModifier.forEach(
            element=>{
                element.parentNode.parentNode.classList.remove("borderSelection");
            }
        )
        e.target.parentNode.parentNode.classList.add("borderSelection");
        document.querySelector(".borderSelection .confirmer").removeAttribute("hidden")
        ajouterEcouteursEvenements()
        intCptNbClicModifier++;
    }
}


/**
 * Modifier le nombre de livre à acheter
 * @param e {event}
 */
function modifierNbLivres(e) {
    let nbLivre
    //refConteneur = e.target.closest(".ajoutPanier__nbLivre")
    if(e.target.id==="plus"){
        nbLivre = e.target.previousElementSibling.value;
        intNbLivre = parseInt(nbLivre)
        intNbLivre++;
        e.target.previousElementSibling.value = intNbLivre
    }else if(e.target.id==="moins"){
        nbLivre = e.target.nextElementSibling.value;
        intNbLivre = parseInt(nbLivre)
        intNbLivre--
        e.target.nextElementSibling.value = intNbLivre
    }
    afficherBoutonMoins();
    afficherBoutonPlus();
}


/**
 * Changer le total avant taxes pour un article
 */
function changerTotal() {
    arrArticle = document.querySelectorAll(".livreAjoute");
    arrArticle.forEach(
        element => {
            intPrixUnitaire = parseFloat(element.children[1].children[2].children[0].innerHTML);
            intNbDeLivres  = parseFloat(element.children[2].children[0].children[2].value);
            element.children[1].children[3].children[0].innerHTML = (intPrixUnitaire * intNbDeLivres).toFixed(2);
        }
    )
    afficherTotalAvantTaxes()
}



//********** AFFICHAGE DU TEXTE POUR LES BOUTONS FAVORIS, SUPPRIMER ET MODIFIER ************//

function changerBtnFavori(e) {

    if(e.target.classList[0] === "modificationArticle__btnSouhait" || e.target.classList[0] === "far" || e.target.classList[0] === "labelSouhait"){
        console.log("hello world")
        switch (e.target.classList[0]) {
            case "modificationArticle__btnSouhait":
                if(e.target.children[0].classList[1] === "fa-heart"){
                    if(e.target.children[0].classList[0] === "fa-regular"){
                        e.target.children[0].classList.remove("fa-regular");
                        e.target.children[0].classList.add("fa-solid");
                    }else if(e.target.children[0].classList[0] === "fa-solid"){
                        e.target.children[0].classList.remove("fa-solid");
                        e.target.children[0].classList.add("fa-regular");
                    }
                }
            break;

        }

    }
    /*const BtnFav = document.querySelectorAll(".modificationArticle__btnSouhait");
    console.log(arrBtnFavori);

    if(e.target.classList[1] === "fa-heart"){
        if(e.target.classList[0] === "fa-regular"){
            e.target.classList.remove("fa-regular");
            e.target.classList.add("fa-solid");
        }else if(e.target.classList[0] === "fa-solid"){
            e.target.classList.remove("fa-solid");
            e.target.classList.add("fa-regular");
        }
    }*/

    //intCpt = 0;
    /*refBtnFav.classList.forEach(
        element =>{
            if(element === "far"){
                refBtnFav.classList.remove(element)
                refBtnFav.classList.add("fas")
            }else if(element === "fas"){
                refBtnFav.classList.remove(element)
                refBtnFav.classList.add("far")
            }
            //intCpt++;
        }
    )*/
}

/**
 * Gérer l'affichage du label du bouton en fonction de la largeur de lapage
 */
function placerLabelBoutons(){
    const reflabelBtn = document.querySelectorAll(".label");
    reflabelBtn.forEach(
        label =>{
            if(window.innerWidth<700){
                label.classList.add("modaleLabel");
            }else{
                label.classList.remove("modaleLabel");
            }
        }
    )
}



//******************* CALCULS DES TAXES ET TOTAUX **********************//
/**
 * Afficher le total sans taxes
 */
function afficherTotalAvantTaxes() {
    arrArticle = document.querySelectorAll(".livreAjoute");
    intTotalPrixLivres = 0;
    arrArticle.forEach(
        element=>{
            let intTotalParArticle = parseFloat(element.children[1].children[3].children[0].innerHTML);
            intTotalPrixLivres += intTotalParArticle;
        }
    )
    refSousTotal.value =  intTotalPrixLivres.toFixed(2)+" $";
    afficherTPS(intTotalPrixLivres);
    afficherTVQ(intTotalPrixLivres);
    afficherTaxes();
    afficherFraisLivraison();
    afficherTotalAvecTaxes();
}

/**
 * Afficher le montant de la taxe TPS
 * @param {number} valMontant
 */
function afficherTPS(valMontant){
    let montant = valMontant;
    let intTaxeTPS = 0.05;
    document.querySelector(".tps__input").value = (montant * intTaxeTPS).toFixed(2)+" $";
}

/**
 * Afficher le montant de la taxe TVQ
 * @param {number} valMontant
 */
function afficherTVQ(valMontant){
    let montant = valMontant;
    let intTaxeTVQ = 0.09975;
    document.querySelector(".tvq__input").value = (montant * intTaxeTVQ).toFixed(2)+" $";
}

/**
 * Afficher le montant des taxes
 */
function afficherTaxes(){
    intTPS = parseFloat(document.querySelector(".tps__input").value);
    intTVQ = parseFloat(document.querySelector(".tvq__input").value);
    refTaxes.value = (intTPS + intTVQ).toFixed(2)+" $";
}

/**
 * Choisir les frais de livraison et les afficher
 */
function afficherFraisLivraison() {
    let intSousTotal = parseFloat(refSousTotal.value);
    if(intSousTotal < 60){
        refLivraison.value = 15+" $";
    }else{
        refLivraison.value = 0+" $";
    }
}

/**
 * Afficher le montant final
 */
function afficherTotalAvecTaxes() {
    document.querySelector(".total__input").value = (parseFloat(refSousTotal.value) + parseFloat(refTaxes.value) + parseFloat(refLivraison.value)).toFixed(2)+" $";
}



//************ GESTION DES ÉCOUTEURS D'ÉVÈNEMENTS *************//
/**
 * Ajouter des écouteurs d'évènements sur les boutons plus et moins
 */
function ajouterEcouteursEvenements() {
    document.querySelector(".borderSelection .ajoutPanier__plus").addEventListener('click', modifierNbLivres);
    document.querySelector(".borderSelection .ajoutPanier__moins").addEventListener('click', modifierNbLivres);
}

/**
 * Retirer les écouteurs d'évènements sur les boutons plus et moins
 */
function retirerEcouteursEvenements() {
    document.querySelector(".borderSelection .ajoutPanier__plus").removeEventListener('click', modifierNbLivres);
    document.querySelector(".borderSelection .ajoutPanier__moins").removeEventListener('click', modifierNbLivres);
}


window.addEventListener("load", afficherBoutonsPlusMoins);
window.addEventListener("load", afficherTotalAvantTaxes);
window.addEventListener("load", afficherMessagePanierVide);
window.addEventListener("load", placerLabelBoutons);
window.addEventListener("resize", placerLabelBoutons);
window.addEventListener("click", activerModification);
window.addEventListener("click", modifierNbLivres);
//window.addEventListener("click", changerBtnFavori);
document.querySelector(".modificationArticle__btnSouhait").addEventListener("click", changerBtnFavori)

