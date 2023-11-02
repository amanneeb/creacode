/**
 * @file La Pastèque - Chooix nombre de livre
 * @author Anaïs Mannée-Batschy
 * @version 0.0.1
 * @type {Element}
 */
const refNbLivre = document.querySelector(".ajoutPanier__nbLivre");
const refBtnPlus = document.querySelector(".ajoutPanier__plus");
const refBtnMoins = document.querySelector(".ajoutPanier__moins");


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
        if(intNbLivre > 0){
            intNbLivre--;
        }
    }
    refNbLivre.innerHTML=intNbLivre;
}

refBtnPlus.addEventListener('click', modifierNbLivres);
refBtnMoins.addEventListener('click', modifierNbLivres);

