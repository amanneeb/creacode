/*
 * Fait par Marianne Anctil
 * 2163768@csfoy.ca
 */


const nav = document.getElementById('navigation');
const checkbox = document.getElementById('checkboxMenu');
const spans = document.querySelectorAll('.span_menuHamburger');
const width = window.matchMedia('(max-width:800px)');
const menu = document.getElementById('menu');
var intervalle = null;
hideHamburger(width);

width.addEventListener('change', hideHamburger);

/**
 *
 * @param widthValue
 * afficher/faire disparaite le menu hamburger selon la largeur de la page web
 */
function hideHamburger(widthValue) {

    if (widthValue.matches) {
        nav.classList.add('navMobile');
        nav.classList.remove('navTable');
        checkbox.classList.remove('noDisplayMenu');
        spans.forEach(spans => spans.classList.remove('noDisplayMenu'));

    } else {
        nav.classList.remove('navMobile');
        nav.classList.add('navTable');
        checkbox.classList.add('noDisplayMenu');
        spans.forEach(spans => spans.classList.add('noDisplayMenu'));
    }

}