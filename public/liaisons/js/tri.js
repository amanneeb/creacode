console.log("fichier bien lié");


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

