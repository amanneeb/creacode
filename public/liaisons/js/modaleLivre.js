/**
 * @file Affichage modale pour les extraits de livre dans la fiche livre
 * @author Anaïs Mannée-Batschy
 * @version 0.0.1
 */

/**
 * Faire apparaitre la fenetre modale
 * @param e {event}
 */
function afficherModale(e) {
    console.log(document.querySelector(".ctnModale").classList.length)
    let valDeuxiemeClasse = document.querySelector(".ctnModale").classList[1];
    if (valDeuxiemeClasse === "cache") {
        document.querySelector(".ctnModale").classList.add("modale");
        document.querySelector(".ctnModale").classList.remove("cache");
        document.querySelector(".ctnModale__img").src = e.target.src;
    }
}

/**
 * Fermer la fenêtre modale
 */
function fermerModale() {
    let valDeuxiemeClasse = document.querySelector(".ctnModale").classList[1];
    if (valDeuxiemeClasse === "modale") {
        document.querySelector(".ctnModale").classList.add("cache")
        document.querySelector(".ctnModale").classList.remove("modale")
    }
}

/**
 * Récupérer la source de l'image
 */
function afficherImageSelectionnee() {
    let sourceImgPrincipale = document.querySelector(".ctnModale__img").src;
    afficherBordure(sourceImgPrincipale)
}

/**
 * Faire avancer les images
 */
function avancerImage() {
    console.log("hello visio")
    arrLiImages = document.querySelectorAll(".ctnVisionneuse__item .ctnVisionneuse__img");
    strLienImgPrincipale = document.querySelector(".ctnModale__img").src;
    arrLiImages.forEach(
        element=>{
            if(element.src===strLienImgPrincipale){
                if(element.id==3){
                    document.querySelector(".ctnModale__img").src = document.getElementById("0").src;
                    afficherBordure(document.getElementById("0").src);
                }else{
                    id = parseInt(element.id)+1;
                    document.querySelector(".ctnModale__img").src = document.getElementById(id).src;
                    afficherBordure(document.getElementById(id).src);
                }
            }
        }
    )
    console.log("hello visio")
}

/**
 * Faire reculer les images
 */
function reculerImage() {
    arrLiImages = document.querySelectorAll(".ctnVisionneuse__item .ctnVisionneuse__img");
    strLienImgPrincipale = document.querySelector(".ctnModale__img").src;
    arrLiImages.forEach(
        element=>{
            if(element.src===strLienImgPrincipale){
                if(element.id==0){
                    document.querySelector(".ctnModale__img").src = document.getElementById("3").src;
                    afficherBordure(document.getElementById("3").src);
                }else{
                    id = element.id-1;
                    document.querySelector(".ctnModale__img").src = document.getElementById(id).src;
                    afficherBordure(document.getElementById(id).src);
                }
            }
        }
    )
}

/**
 * Afficher la bordure sur l'image sélectionnée dans la visionneuse
 * @param  imgLien {string}
 */
function afficherBordure(imgLien) {
    const arrImgModales = document.querySelectorAll(".ctnVisionneuse__img");
    arrImgModales.forEach( element=>{
        if(imgLien === element.src){
            element.classList.add("imgChoisie")
        }else{
            element.classList.remove("imgChoisie")
        }
    })
}

document.querySelector(".ctnVisioExtraits__img:nth-child(1)").addEventListener("click", afficherModale);
document.querySelector(".ctnVisioExtraits__img:nth-child(1)").addEventListener("click", afficherImageSelectionnee);
document.querySelector(".ctnVisioExtraits__img:nth-child(2)").addEventListener("click", afficherModale);
document.querySelector(".ctnVisioExtraits__img:nth-child(2)").addEventListener("click", afficherImageSelectionnee);
document.querySelector(".ctnVisioExtraits__img:nth-child(3)").addEventListener("click", afficherModale);
document.querySelector(".ctnVisioExtraits__img:nth-child(3)").addEventListener("click", afficherImageSelectionnee);
document.querySelector(".ctnModale__btn").addEventListener("click", fermerModale);
document.querySelector(".ctnVisionneuse__suivant").addEventListener("click", avancerImage);
document.querySelector(".ctnVisionneuse__precedent").addEventListener("click", reculerImage);