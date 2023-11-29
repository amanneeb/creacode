document.addEventListener('DOMContentLoaded', function () {
    // Masquer tous les fieldsets sauf le premier
    document.querySelectorAll('.etatEtape:not(.active)').forEach(function (fieldset) {
        fieldset.style.display = 'none';
    });

    // Écouteur de clic sur le bouton suivant
    document.getElementById('btnSuiv').addEventListener('click', function () {
        // Logique pour passer à l'étape suivante
        // ...

        // Exemple de changement d'étape et mise à jour de la barre de progression
        var currentStep = document.querySelector('.step.active');
        var nextStep = currentStep.nextElementSibling;

        if (nextStep) {
            currentStep.classList.remove('active');
            currentStep.classList.add('inactive');
            nextStep.classList.remove('inactive');
            nextStep.classList.add('active');

            // Logique pour afficher le prochain fieldset et masquer les autres
            document.querySelectorAll('.etatEtape').forEach(function (fieldset) {
                fieldset.style.display = 'none';
            });
            nextStep.querySelector('.etatEtape').style.display = 'block';
        }
    });

    // Écouteur de clic sur le bouton précédent
    document.getElementById('btnPrec').addEventListener('click', function () {
        // Logique pour revenir à l'étape précédente
        // ...

        // Exemple de changement d'étape et mise à jour de la barre de progression
        var currentStep = document.querySelector('.step.active');
        var prevStep = currentStep.previousElementSibling;

        if (prevStep) {
            currentStep.classList.remove('active');
            currentStep.classList.add('inactive');
            prevStep.classList.remove('inactive');
            prevStep.classList.add('active');

            // Logique pour afficher le fieldset précédent et masquer les autres
            document.querySelectorAll('.etatEtape').forEach(function (fieldset) {
                fieldset.style.display = 'none';
            });
            prevStep.querySelector('.etatEtape').style.display = 'block';
        }
    });

    // Écouteur de clic sur le bouton confirmer le paiement
    document.getElementById('btnConf').addEventListener('click', function () {
        // Logique pour soumettre le formulaire
        // ...
    });
});
