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
function afficherImagesSelectionnee() {
    let sourceImgPrincipale = document.querySelector(".ctnModale__img").src;
    afficherBordure(sourceImgPrincipale)
}

/**
 * Faire avancer les images
 */
function avancerImage() {
    strLienImgPrincipale = document.querySelector(".ctnModale__img").src;
    intNoExtrait = parseInt(strLienImgPrincipale.substr(-5, 1));
    if(intNoExtrait < 3){
        document.querySelector(".ctnModale__img").src = "./liaisons/images/operatique_00"+(intNoExtrait+1)+".png";
        strLienImgPrincipale = document.querySelector(".ctnModale__img").src;
        afficherBordure(strLienImgPrincipale)
    }else{
        if(intNoExtrait===3){
            document.querySelector(".ctnModale__img").src = "./liaisons/images/operatique_couv.jpg";
            strLienImgPrincipale = document.querySelector(".ctnModale__img").src;
            afficherBordure(strLienImgPrincipale)
        }else{
            document.querySelector(".ctnModale__img").src = "./liaisons/images/operatique_001.png";
            strLienImgPrincipale = document.querySelector(".ctnModale__img").src;
            afficherBordure(strLienImgPrincipale)
        }

    }
}

/**
 * Faire reculer les images
 */
function reculerImage() {
    strLienImgPrincipale = document.querySelector(".ctnModale__img").src;
    intNoExtrait = parseInt(strLienImgPrincipale.substr(-5, 1))

    if(intNoExtrait > 1){
        document.querySelector(".ctnModale__img").src = "./liaisons/images/operatique_00"+(intNoExtrait-1)+".png";
        strLienImgPrincipale = document.querySelector(".ctnModale__img").src;
        afficherBordure(strLienImgPrincipale)
    }else{
        if (intNoExtrait===1){
            document.querySelector(".ctnModale__img").src = "./liaisons/images/operatique_couv.jpg";
            strLienImgPrincipale = document.querySelector(".ctnModale__img").src;
            afficherBordure(strLienImgPrincipale)
        }else{
            document.querySelector(".ctnModale__img").src = "./liaisons/images/operatique_003.png";
            strLienImgPrincipale = document.querySelector(".ctnModale__img").src;
            afficherBordure(strLienImgPrincipale)
        }

    }
}

/**
 * Afficher la bordure sur l'image sélectionnée dans la visionneuse
 */
function afficherBordure(imgLien) {
    console.log(imgLien)
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
document.querySelector(".ctnVisioExtraits__img:nth-child(1)").addEventListener("click", afficherImagesSelectionnee);
document.querySelector(".ctnVisioExtraits__img:nth-child(2)").addEventListener("click", afficherModale);
document.querySelector(".ctnVisioExtraits__img:nth-child(2)").addEventListener("click", afficherImagesSelectionnee);
document.querySelector(".ctnVisioExtraits__img:nth-child(3)").addEventListener("click", afficherModale);
document.querySelector(".ctnVisioExtraits__img:nth-child(3)").addEventListener("click", afficherImagesSelectionnee);
document.querySelector(".ctnModale__btn").addEventListener("click", fermerModale);
document.querySelector(".ctnVisionneuse__suivant").addEventListener("click", avancerImage);
document.querySelector(".ctnVisionneuse__precedent").addEventListener("click", reculerImage);
