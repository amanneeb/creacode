// document.addEventListener('DOMContentLoaded', function () {
//     // Masquer tous les fieldsets sauf le premier
//     document.querySelectorAll('.etatEtape:not(.active)').forEach(function (fieldset) {
//         fieldset.style.display = 'none';
//     });
//
//     // Écouteur de clic sur le bouton suivant
//     document.getElementById('btnSuiv').addEventListener('click', function () {
//         // Logique pour passer à l'étape suivante
//         // ...
//
//         // Exemple de changement d'étape et mise à jour de la barre de progression
//         var currentStep = document.querySelector('.step.active');
//         var nextStep = currentStep.nextElementSibling;
//
//         if (nextStep) {
//             currentStep.classList.remove('active');
//             currentStep.classList.add('inactive');
//             nextStep.classList.remove('inactive');
//             nextStep.classList.add('active');
//
//             // Logique pour afficher le prochain fieldset et masquer les autres
//             document.querySelectorAll('.etatEtape').forEach(function (fieldset) {
//                 fieldset.style.display = 'none';
//             });
//             nextStep.querySelector('.etatEtape').style.display = 'block';
//         }
//     });
//
//     // Écouteur de clic sur le bouton précédent
//     document.getElementById('btnPrec').addEventListener('click', function () {
//         // Logique pour revenir à l'étape précédente
//         // ...
//
//         // Exemple de changement d'étape et mise à jour de la barre de progression
//         var currentStep = document.querySelector('.step.active');
//         var prevStep = currentStep.previousElementSibling;
//
//         if (prevStep) {
//             currentStep.classList.remove('active');
//             currentStep.classList.add('inactive');
//             prevStep.classList.remove('inactive');
//             prevStep.classList.add('active');
//
//             // Logique pour afficher le fieldset précédent et masquer les autres
//             document.querySelectorAll('.etatEtape').forEach(function (fieldset) {
//                 fieldset.style.display = 'none';
//             });
//             prevStep.querySelector('.etatEtape').style.display = 'block';
//         }
//     });
//
//     // Écouteur de clic sur le bouton confirmer le paiement
//     document.getElementById('btnConf').addEventListener('click', function () {
//         // Logique pour soumettre le formulaire
//         // ...
//     });
// });


var stepLeft={
    refFormulaire:null,

    noStep:1,

    btnSuivant : document.getElementById('btnSuiv'),
    btnPrecedent:  document.getElementById('btnPrec'),
    btnConfirmer : document.getElementById('btnConf'),

    initialiser:function(){
        this.refFormulaire = document.querySelector(".form");

        this.btnSuivant.addEventListener('click', this.changementEtape.bind(this));
        this.btnPrecedent.addEventListener('click', this.changementEtape.bind(this));
        this.btnConfirmer.addEventListener('submit', this.changementEtape.bind(this));
    },
    changementEtape:function(evenement){
        let objCible = evenement.currentTarget;
        console.log(this.refFormulaire)
        if(objCible.id === 'btnSuiv'){
            this.noStep++;
            if(this.noStep >= 1){
                this.btnPrecedent.classList.remove('inactive');
                this.refFormulaire.querySelector('.step'+(this.noStep-1)).classList.add('inactive');
                this.refFormulaire.querySelector('.step'+(this.noStep)).classList.remove('inactive');

                document.querySelector('.path'+(this.noStep-1)).classList.add('pathStatus');
                document.querySelector('.path'+(this.noStep)).classList.remove('pathStatus');
            }
            if(this.noStep >= 3){
                this.btnSuivant.classList.add('inactive');
                this.btnConfirmer.classList.remove('inactive');
            }
        }else{
            this.noStep--;
            this.refFormulaire.querySelector('.step'+(this.noStep)).classList.remove('inactive');
            this.refFormulaire.querySelector('.step'+(this.noStep+1)).classList.add('inactive');

            document.querySelector('.path'+(this.noStep+1)).classList.add('pathStatus');
            document.querySelector('.path'+(this.noStep)).classList.remove('pathStatus');
            if(this.noStep <= 1){
                this.btnPrecedent.classList.add('inactive');
            }
            if(this.noStep < 3){
                this.btnSuivant.classList.remove('inactive');
                this.btnConfirmer.classList.add('inactive');
            }
        }
        
        
    }
}

window.addEventListener('load', stepLeft.initialiser.bind(stepLeft));