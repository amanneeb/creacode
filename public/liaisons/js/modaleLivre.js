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
    noExtrait = parseInt(strLienImgPrincipale.substr(-10, 1));
    debutSource = strLienImgPrincipale.substr(0, strLienImgPrincipale.length-10);
    finSource = strLienImgPrincipale.substr(strLienImgPrincipale.length-9)
    document.querySelector(".ctnModale__img").src = debutSource+(noExtrait+1)+finSource;
    if(noExtrait < 3 && noExtrait!=0){
        noExtrait = parseInt(strLienImgPrincipale.substr(-10, 1));
        debutSource = strLienImgPrincipale.substr(0, strLienImgPrincipale.length-10);
        finSource = strLienImgPrincipale.substr(strLienImgPrincipale.length-9)
        document.querySelector(".ctnModale__img").src = debutSource+(noExtrait+1)+finSource;
        afficherBordure(document.querySelector(".ctnModale__img").src);
    }else{
        if(noExtrait===3){
            debutSource = strLienImgPrincipale.substr(0, strLienImgPrincipale.length-13);
            finSource = strLienImgPrincipale.substr(strLienImgPrincipale.length-9, 5);
            debutSourceCouverture = debutSource.replace("extraits/", "");
            document.querySelector(".ctnModale__img").src = debutSourceCouverture+finSource+".jpg";
            afficherBordure(document.querySelector(".ctnModale__img").src);
        }else{
            debutSource = strLienImgPrincipale.substr(0, strLienImgPrincipale.length-9);
            debutSourceCouverture = debutSource.replace("images/livres/", "images/livres/extraits/");
            finSource = strLienImgPrincipale.substr(strLienImgPrincipale.length-9, 5)
            sourceImgRecherchee = debutSourceCouverture.concat("_001",finSource,".png")
            document.querySelector(".ctnModale__img").src = sourceImgRecherchee;
            afficherBordure(document.querySelector(".ctnModale__img").src);
        }
    }
}

/**
 * Faire reculer les images
 */
function reculerImage() {
    strLienImgPrincipale = document.querySelector(".ctnModale__img").src;
    noExtrait = parseInt(strLienImgPrincipale.substr(-10, 1));
    debutSource = strLienImgPrincipale.substr(0, strLienImgPrincipale.length-10);
    finSource = strLienImgPrincipale.substr(strLienImgPrincipale.length-9)
    document.querySelector(".ctnModale__img").src = debutSource+(noExtrait-1)+finSource;
    if(noExtrait > 1 && noExtrait!=0){
        noExtrait = parseInt(strLienImgPrincipale.substr(-10, 1));
        debutSource = strLienImgPrincipale.substr(0, strLienImgPrincipale.length-10);
        finSource = strLienImgPrincipale.substr(strLienImgPrincipale.length-9)
        document.querySelector(".ctnModale__img").src = debutSource+(noExtrait-1)+finSource;
        afficherBordure(document.querySelector(".ctnModale__img").src);
    }else{
        if(noExtrait===1){
            debutSource = strLienImgPrincipale.substr(0, strLienImgPrincipale.length-13);
            finSource = strLienImgPrincipale.substr(strLienImgPrincipale.length-9, 5);
            debutSourceCouverture = debutSource.replace("extraits/", "");
            document.querySelector(".ctnModale__img").src = debutSourceCouverture+finSource+".jpg";
            afficherBordure(document.querySelector(".ctnModale__img").src);
        }else{
            debutSource = strLienImgPrincipale.substr(0, strLienImgPrincipale.length-10);
            debutSourceCouverture = debutSource.replace("images/livres/", "images/livres/extraits/");
            finSource = strLienImgPrincipale.substr(strLienImgPrincipale.length-9, 5)
            sourceImgRecherchee = debutSourceCouverture.concat("_001",finSource,".png")
            document.querySelector(".ctnModale__img").src = sourceImgRecherchee;
            afficherBordure(document.querySelector(".ctnModale__img").src);
        }
    }
}

/**
 * Afficher la bordure sur l'image sélectionnée dans la visionneuse
 * @param  imgLien {string}
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
