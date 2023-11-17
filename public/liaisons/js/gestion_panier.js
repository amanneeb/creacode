/**
 * @file La Pastèque - Choix nombre de livre
 * @author Anaïs Mannée-Batschy
 * @version 0.0.1
 * @type {Element}
 */
const refNbLivre = document.querySelector(" .ajoutPanier__nbLivre");
const refBtnPlus = document.querySelector(".ajoutPanier__plus");
const refBtnMoins = document.querySelector(".ajoutPanier__moins");
let intCptNbClicModifier = 0;

const refSousTotal = document.querySelector(".sous-total__input");
const refTaxes = document.querySelector(".taxes__input");
const refLivraison = document.querySelector(".livraison__input");

/**
 * Gérer affichage des boutons plus et moins au chargement de la page
 */
function afficherBoutonsPlusMoins(){
    if(refNbLivre.innerHTML==6){
        refBtnPlus.setAttribute("hidden", "hidden");
        changerTotal();
    }else{
        refBtnPlus.removeAttribute("hidden");
        changerTotal();
    }

    if(refNbLivre.innerHTML==1){
        refBtnMoins.setAttribute("hidden", "hidden");
        changerTotal();
    }else{
        refBtnMoins.removeAttribute("hidden");
        changerTotal();
    }
}


/**
 * Activer la possibilité de modifier la quantité liée à un livre
 * @param e {event}
 */
function activerModification(e) {
    arrBtnModifier = document.querySelectorAll(".modifier");
    if(e.target.tagName === "BUTTON" && e.target.innerHTML === "Modifier"){
        if(intCptNbClicModifier !== 0){
            retirerEcouteursEvenements()
        }
        arrBtnModifier.forEach(
            element=>{
                element.parentNode.parentNode.classList.remove("borderSelection");
            }
        )
        e.target.parentNode.parentNode.classList.add("borderSelection");
        ajouterEcouteursEvenements()
        intCptNbClicModifier++;
    }
}


/**
 * Modifier le nombre de livre à acheter
 * @param e {event}
 */
function modifierNbLivres(e) {
    refNbLivreChoisi = document.querySelector(".borderSelection .ajoutPanier__nbLivre");
    intNbLivre = parseInt(refNbLivreChoisi.innerText);
    if(e.target.id==="plus" && e.target.parentNode.parentNode.classList[2]==="borderSelection"){
        if(intNbLivre < 6){
            intNbLivre++;
        }
    }else if(e.target.id==="moins" && e.target.parentNode.parentNode.classList[2]==="borderSelection"){
        if(intNbLivre > 1){
            intNbLivre--;
        }
    }
    refNbLivreChoisi.innerHTML=intNbLivre;

    afficherBoutonMoins();
    afficherBoutonPlus();
}


/**
 * Faire apparaitre et disparaitre le bouton moins en fonction du nombre de livres
 */
function afficherBoutonMoins(){
    const refNbLivre = document.querySelector(".borderSelection .ajoutPanier__nbLivre");
    const refBtnMoins = document.querySelector(".borderSelection .ajoutPanier__moins");
    if(refNbLivre.innerHTML==1){
        refBtnMoins.setAttribute("hidden", "hidden");
        changerTotal();
    }else{
        refBtnMoins.removeAttribute("hidden");
        changerTotal();
    }
}


/**
 * Faire apparaitre et disparaitre le bouton plus en fonction du nombre de livres
 */
function afficherBoutonPlus(){
    const refNbLivre = document.querySelector(".borderSelection .ajoutPanier__nbLivre");
    const refBtnPlus = document.querySelector(".borderSelection .ajoutPanier__plus");
    if(refNbLivre.innerHTML==6){
        refBtnPlus.setAttribute("hidden", "hidden");
        changerTotal();
    }else{
        refBtnPlus.removeAttribute("hidden");
        changerTotal();
    }
}



/**
 * Changer le total avant taxes pour un article
 */
function changerTotal() {
    arrArticle = document.querySelectorAll(".livreAjoute");
    arrArticle.forEach(
        element => {
            intPrixUnitaire = parseFloat(element.children[1].children[2].children[0].innerText);
            intNbDeLivres  = parseFloat(element.children[2].children[1].innerText);
            element.children[1].children[3].children[0].innerHTML = intPrixUnitaire * intNbDeLivres;
        }
    )
    afficherTotalAvantTaxes()
}



//******************* CALCUL DES TAXES ET TOTAUX **********************//
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
    refSousTotal.value =  intTotalPrixLivres+" $";

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
    document.querySelector(".total__input").value = parseFloat(refSousTotal.value) + parseFloat(refTaxes.value) + parseFloat(refLivraison.value)+" $";
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
window.addEventListener("click", activerModification);

