/**
 * @file Script des onglets de la fiche d'un livre
 * @author Anaïs Mannée-Batschy
 * @version 0.0.1
 */



/**
 * Verifier quel est le boutons radio selectionne
 */
function identifierBtnRadioSelectionne() {
    const refBtnRadioSelectionne = document.querySelector("[name=informations]:checked");
    assignerAttributChecked(refBtnRadioSelectionne.id)
}

/**
 *Assigner l'attrivut checked au bouton radio et dévoiler le texte en lien avec l'onglet selectionné
 */
function assignerAttributChecked(idOnglet) {
    const refBtnRadios = document.querySelectorAll("[name=informations]");
    switch (idOnglet) {
        case 'resume':
            refBtnRadios[0].setAttribute("checked", "true");
            refBtnRadios[1].setAttribute("checked", "false");
            refBtnRadios[2].setAttribute("checked", "false");
            document.querySelector('.resume').removeAttribute("hidden");
            document.querySelector('.details').setAttribute("hidden", "hidden");
            document.querySelector('.commentaires').setAttribute("hidden", "hidden");
            break;
        case 'details':
            refBtnRadios[0].setAttribute("checked", "false");
            refBtnRadios[1].setAttribute("checked", "true");
            refBtnRadios[2].setAttribute("checked", "false");
            document.querySelector('.resume').setAttribute("hidden", "hidden");
            document.querySelector('.details').removeAttribute("hidden");
            document.querySelector('.commentaires').setAttribute("hidden", "hidden");
            break;
        case 'commentaires':
            refBtnRadios[0].setAttribute("checked", "false");
            refBtnRadios[1].setAttribute("checked", "false");
            refBtnRadios[2].setAttribute("checked", "true");
            document.querySelector('.resume').setAttribute("hidden", "hidden");
            document.querySelector('.details').setAttribute("hidden", "hidden");
            document.querySelector('.commentaires').removeAttribute("hidden");
            break;
    }
}


/**
 * Ajouter l'attribut checked au premier bouton radio au chargement de la page
 */
function insererChecked(){
    document.querySelector("[name=informations]").setAttribute("checked", "true");
}


document.querySelector(".infoSupplementaires").addEventListener('click', identifierBtnRadioSelectionne)
window.addEventListener('load', insererChecked)