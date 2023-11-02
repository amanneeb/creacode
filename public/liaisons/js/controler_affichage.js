document.addEventListener('DOMContentLoaded', function () {
    const listeBtn = document.getElementById('liste-btn');
    const grilleBtn = document.getElementById('grille-btn');

    // Fonction pour activer le bouton de la liste
    function activerListeView() {
        listeBtn.classList.add('active');
        grilleBtn.classList.remove('active');
    }

    // Fonction pour activer le bouton de la grille
    function activerGrilleView() {
        grilleBtn.classList.add('active');
        listeBtn.classList.remove('active');
    }

    // Écouteurs d'événements pour les boutons de commutation
    listeBtn.addEventListener('click', activerListeView);
    grilleBtn.addEventListener('click', activerGrilleView);

    // Par défaut, afficher la liste
    activerListeView();
});
