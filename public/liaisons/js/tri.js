/**
 * @file La Pastèque - Laisse affichée la valeur qui a été sélectionée dans la liste déroulante après le chargement de page
 * @author Giselle Hessen
 * @version 0.0.1
 */


const triSelect = document.getElementById("triSelect");

const urlParams = new URLSearchParams(window.location.search);
const triValue = urlParams.get("tri");

if (triValue) {
    triSelect.value = triValue;
}

triSelect.addEventListener("change", function() {
    const valeurSelectionee = triSelect.value;
    mettreAJourURL(valeurSelectionee );
});

function mettreAJourURL(valeurSelectionee ) {
    const currentURL = window.location.href;
    const url = new URL(currentURL);
    url.searchParams.set("tri", valeurSelectionee );
    window.location.href = url.toString();
}

