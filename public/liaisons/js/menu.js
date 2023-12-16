/**
 * @file La Pastèque - activation et désactivation du menu hamburger
 * @author Marianne Anctil
 * @version 0.0.1
 */
const nav=document.getElementById("navigation"),checkbox=document.getElementById("checkboxMenu"),spans=document.querySelectorAll(".span_menuHamburger"),width=window.matchMedia("(max-width:800px)"),menu=document.getElementById("menu");var intervalle=null;function hideHamburger(e){e.matches?(nav.classList.add("navMobile"),nav.classList.remove("navTable"),checkbox.classList.remove("noDisplayMenu"),spans.forEach(e=>e.classList.remove("noDisplayMenu"))):(nav.classList.remove("navMobile"),nav.classList.add("navTable"),checkbox.classList.add("noDisplayMenu"),spans.forEach(e=>e.classList.add("noDisplayMenu")))}hideHamburger(width),width.addEventListener("change",hideHamburger);