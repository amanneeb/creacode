/**
 * @file La Pastèque - Changer l'affichage en grille ou liste
 * @author Giselle Hessen
 * @version 0.0.1
 */
document.addEventListener("DOMContentLoaded",function(){let e=document.getElementById("bouton-liste"),t=document.getElementById("bouton-grille"),n=document.querySelectorAll(".ctnImg__img"),c=document.querySelectorAll(".ctnImg__picture"),i=document.querySelectorAll(".ctnImg"),d=document.querySelector(".liste__items");t.addEventListener("click",function(){t.classList.add("actif"),e.classList.remove("actif"),d.classList.add("liste__items"),n.forEach(function(e){e.hidden=!1}),c.forEach(function(e){e.hidden=!1}),i.forEach(function(e){e.hidden=!1})}),e.addEventListener("click",function(){e.classList.add("actif"),t.classList.remove("actif"),d.classList.remove("liste__items"),n.forEach(function(e){e.hidden=!0}),c.forEach(function(e){e.hidden=!0}),i.forEach(function(e){e.hidden=!0})})});