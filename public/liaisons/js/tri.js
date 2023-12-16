/**
 * @file La Pastèque - Laisse affichée la valeur qui a été sélectionée dans la liste déroulante après le chargement de page
 * @author Giselle Hessen
 * @version 0.0.1
 */
const triSelect=document.getElementById("triSelect"),urlParams=new URLSearchParams(window.location.search),triValue=urlParams.get("tri");function mettreAJourURL(e){var t=window.location.href;const r=new URL(t);r.searchParams.set("tri",e),window.location.href=r.toString()}triValue&&(triSelect.value=triValue),triSelect.addEventListener("change",function(){mettreAJourURL(triSelect.value)});

