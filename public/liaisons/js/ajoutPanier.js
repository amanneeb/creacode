/**
 * @file La Pastèque - Choix nombre de livre
 * @author Anaïs Mannée-Batschy
 * @version 0.0.1
 */
const refNbLivre = document.querySelector(".ajoutPanier__nbLivre");
const refBtnPlus = document.querySelector(".ajoutPanier__plus");
const refBtnMoins = document.querySelector(".ajoutPanier__moins");
//const refResumeTotal = document.querySelector(".ctnInfoLivre__total");


/**
 * Modifier le nombre de livre à acheter
 * @param e {event}
 */
function modifierNbLivres(e) {
    intNbLivre = parseInt(refNbLivre.value);
    if(e.target.id==="plus"){
        if(intNbLivre < 6){
            intNbLivre++;
        }
    }else if(e.target.id==="moins"){
        if(intNbLivre > 1){
            intNbLivre--;
        }
    }
    refNbLivre.value=intNbLivre;
    afficherBoutonMoins();
    afficherBoutonPlus();
}


/**
 * Insérer ou retirer l'attribut disabled du bouton moins
 */
function afficherBoutonMoins(){
    if(parseInt(refNbLivre.value)===1){
        refBtnMoins.setAttribute("disabled", "");
        //changerTotal();
        //afficherTotal();
    }else{
        refBtnMoins.removeAttribute("disabled");
        //changerTotal();
        //afficherTotal();
    }
}


/**
 * Insérer ou retirer l'attribut disabled du bouton plus
 */
function afficherBoutonPlus(){
    if(parseInt(refNbLivre.value)===6){
        refBtnPlus.setAttribute("disabled", "");
        //changerTotal();
        //afficherTotal();
    }else{
        refBtnPlus.removeAttribute("disabled");
        //changerTotal();
        //afficherTotal();
    }
}


/**
 * Faire apparaitre la partie affichant le total en fonction du nombre de livre sélectionné
 */
/*function afficherTotal() {
    if(refNbLivre.value==1){
        refResumeTotal.setAttribute("hidden", "hidden");
    }else{
        refResumeTotal.removeAttribute("hidden");
    }
}*/


/**
 * Changer le total avant taxes pour un article
 */
/*function changerTotal() {
    intPrixUnitaire = parseInt(document.querySelector(".ctnInfoLivre__SpanPrixCan").textContent);
    intNbDeLivres  = parseInt(document.querySelector(".ajoutPanier__nbLivre").value);
    document.querySelector(".ctnInfoLivre__totalSpan").textContent = intPrixUnitaire * intNbDeLivres;
}*/


refBtnPlus.addEventListener('click', modifierNbLivres);
refBtnMoins.addEventListener('click', modifierNbLivres);
window.addEventListener("load", afficherBoutonMoins);
window.addEventListener("load", afficherBoutonPlus);
//window.addEventListener("load", afficherTotal);

