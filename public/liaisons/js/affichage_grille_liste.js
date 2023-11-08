document.addEventListener("DOMContentLoaded", function () {
    let boutonListe = document.getElementById("bouton-liste");
    let boutonGrille = document.getElementById("bouton-grille");
    let imageItems = document.querySelectorAll(".item-img");
    let listeItems = document.querySelector(".liste__items");

    boutonGrille.addEventListener("click", function () {
        boutonGrille.classList.add("actif");
        boutonListe.classList.remove("actif");
        listeItems.classList.add("liste__items");

        imageItems.forEach(function (imageItem) {
            imageItem.hidden = false;
        });
    });

    boutonListe.addEventListener("click", function () {
        boutonListe.classList.add("actif");
        boutonGrille.classList.remove("actif");
        listeItems.classList.remove("liste__items");

        imageItems.forEach(function (imageItem) {
            imageItem.hidden = true;
        });
    });
});
