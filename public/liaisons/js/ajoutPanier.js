/**
 * @file La Pastèque - Choix nombre de livre et ajout au panier
 * @author Anaïs Mannée-Batschy
 * @version 0.0.1
 */
const refLivre = document.querySelector(".ajoutPanier__livreId");
const refNbLivre = document.querySelector(".ajoutPanier__nbLivre");
const refBtnPlus = document.querySelector(".ajoutPanier__plus");
const refBtnMoins = document.querySelector(".ajoutPanier__moins");
const refBtnAjoutPanier = document.querySelector(".ajoutPanier__btnPanier");
const btnPanierRetroLivre = document.querySelector(".menu__nbArticle");
const form = document.querySelector(".ajoutPanier");

//**************** MODALE ********************//

/**
 * Afficher le nombre de livre dans la bulle du panier et déclencher l'affichage de la modale après un ajout au panier
 */
function gererNbLivre() {
    refNbArticle = document.querySelector(".menu__nbArticle");
    if(btnPanierRetroLivre.innerText === "0"){
        localStorage.setItem("nbLivre", btnPanierRetroLivre.innerText);
    }
    if(localStorage.getItem("nbLivre") !== btnPanierRetroLivre.innerText){
        btnPanierRetroLivre.classList.add("animate__heartBeat");
        enregistrerDansLocalStorage();
        modifierNbLivre();
    }
}

/**
 * Enregistrer le nouveau nombre de livre dans le local storage (pour comparaison future)
 */
function enregistrerDansLocalStorage() {
    valLS = parseInt(localStorage.getItem("nbLivre"));
    nouvelleValeur = (valLS + 1).toString();
    localStorage.setItem("nbLivre", nouvelleValeur);
}

/**
* Modifier nb livre
*/
function modifierNbLivre() {
    document.querySelector(".nbLivreChoisi").innerText = refNbLivre.value;
}

/**
 * Afficher la modale au chargement de la page seulement après l'ajout d'un livre
 */
function choisirAffichage() {
    if(window.location.href.includes("modale")){
        afficherLaModale()
    }else{
        cacherLaModale()
    }
}

/**
 * Afficher la modale
 */
function afficherLaModale() {
    document.querySelector(".modaleAjoutPanier").classList.remove("visuallyhidden");
}

/**
 * Retirer la modale
 */
function cacherLaModale(){
    document.querySelector(".modaleAjoutPanier").classList.add("visuallyhidden");
}



//**************** NOMBRE DE LIVRE À AJOUTER ********************//
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
    }else{
        refBtnMoins.removeAttribute("disabled");
    }
}


/**
 * Insérer ou retirer l'attribut disabled du bouton plus
 */
function afficherBoutonPlus(){
    if(parseInt(refNbLivre.value)===6){
        refBtnPlus.setAttribute("disabled", "");
    }else{
        refBtnPlus.removeAttribute("disabled");
    }
}


window.addEventListener("load", afficherBoutonMoins);
window.addEventListener("load", afficherBoutonPlus);
refBtnPlus.addEventListener('click', modifierNbLivres);
refBtnMoins.addEventListener('click', modifierNbLivres);
window.addEventListener('load', gererNbLivre);
window.addEventListener('load', choisirAffichage);
refBtnAjoutPanier.addEventListener('click', gererNbLivre);
refBtnAjoutPanier.addEventListener('click', afficherLaModale);
document.querySelector(".btnLivre").addEventListener("click", cacherLaModale);



