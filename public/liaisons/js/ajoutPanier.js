/**
 * @file La Pastèque - Choix nombre de livre
 * @author Anaïs Mannée-Batschy
 * @version 0.0.1
 */
const refNbLivre = document.querySelector(".ajoutPanier__nbLivre");
const refBtnPlus = document.querySelector(".ajoutPanier__plus");
const refBtnMoins = document.querySelector(".ajoutPanier__moins");
const refResumeTotal = document.querySelector(".ctnInfoLivre__total");


/**
 * Modifier le nombre de livre à acheter
 * @param e {event}
 */
function modifierNbLivres(e) {
    intNbLivre = parseInt(refNbLivre.innerText);
    if(e.target.id==="plus"){
        if(intNbLivre < 6){
            intNbLivre++;
        }
    }else if(e.target.id==="moins"){
        if(intNbLivre > 1){
            intNbLivre--;
        }
    }
    refNbLivre.innerHTML=intNbLivre;
    afficherBoutonMoins();
    afficherBoutonPlus();
}


/**
 * Faire apparaitre et disparaitre le bouton moins
 */
function afficherBoutonMoins(){
    if(refNbLivre.innerHTML==1){
        refBtnMoins.setAttribute("hidden", "hidden");
        changerTotal();
        afficherTotal();
    }else{
        refBtnMoins.removeAttribute("hidden");
        changerTotal();
        afficherTotal();
    }
}


/**
 * Faire apparaitre et disparaitre le bouton plus
 */
function afficherBoutonPlus(){
    if(refNbLivre.innerHTML==6){
        refBtnPlus.setAttribute("hidden", "hidden");
        changerTotal();
        afficherTotal();
    }else{
        refBtnPlus.removeAttribute("hidden");
        changerTotal();
        afficherTotal();
    }
}


/**
 * Faire apparaitre la partie affichant le total en fonction du nombre de livre sélectionné
 */
function afficherTotal() {
    if(refNbLivre.innerHTML==1){
        refResumeTotal.setAttribute("hidden", "hidden");
    }else{
        refResumeTotal.removeAttribute("hidden");
    }
}


/**
 * Changer le total avant taxes pour un article
 */
function changerTotal() {
    intPrixUnitaire = parseInt(document.querySelector(".ctnInfoLivre__prixSpan").textContent);
    intNbDeLivres  = parseInt(document.querySelector(".ajoutPanier__nbLivre").textContent);
    document.querySelector(".ctnInfoLivre__totalSpan").textContent = intPrixUnitaire * intNbDeLivres;
}


refBtnPlus.addEventListener('click', modifierNbLivres);
refBtnMoins.addEventListener('click', modifierNbLivres);
window.addEventListener("load", afficherBoutonMoins);
window.addEventListener("load", afficherBoutonPlus);
window.addEventListener("load", afficherTotal);

