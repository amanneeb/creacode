/**
 * @file La Pastèque - Changer l'affichage en grille ou liste
 * @author Giselle Hessen
 * @version 0.0.1
 */

document.addEventListener("DOMContentLoaded", function () {
    let boutonListe = document.getElementById("bouton-liste");
    let boutonGrille = document.getElementById("bouton-grille");
    let imageItems = document.querySelectorAll(".ctnImg__img");
    let pictureItems = document.querySelectorAll(".ctnImg__picture");
    let divItems = document.querySelectorAll(".ctnImg");
    let listeItems = document.querySelector(".liste__items");

    boutonGrille.addEventListener("click", function () {
        boutonGrille.classList.add("actif");
        boutonListe.classList.remove("actif");
        listeItems.classList.add("liste__items");

        imageItems.forEach(function (imageItem) {
            imageItem.hidden = false;
        });

        pictureItems.forEach(function (pictureItem) {
            pictureItem.hidden = false;
        });
        divItems.forEach(function (divItems) {
            divItems.hidden = false;
        });
    });

    boutonListe.addEventListener("click", function () {
        boutonListe.classList.add("actif");
        boutonGrille.classList.remove("actif");
        listeItems.classList.remove("liste__items");

        imageItems.forEach(function (imageItem) {
            imageItem.hidden = true;
        });

        pictureItems.forEach(function (pictureItem) {
            pictureItem.hidden = true;
        });
        divItems.forEach(function (divItems) {
            divItems.hidden = true;
        });
    });
});
