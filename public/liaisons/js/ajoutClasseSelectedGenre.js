document.addEventListener("DOMContentLoaded", function () {
    const categorieList = document.getElementById("categorieList");

    categorieList.addEventListener("click", function (event) {
        const targetLink = event.target.closest(".liste-livres__tri-option");

        if (targetLink) {
            // Ajouter la classe "selected" à l'élément cliqué
            targetLink.classList.add("selected");

            // Enlever la classe "selected" des autres éléments
            Array.from(categorieList.children).forEach(function (otherLink) {
                if (otherLink !== targetLink) {
                    otherLink.classList.remove("selected");
                }
            });

            // Vous pouvez également stocker la catégorie sélectionnée dans localStorage ici si nécessaire
            // localStorage.setItem('selectedCategory', targetLink.getAttribute('href'));
        }
    });
});
