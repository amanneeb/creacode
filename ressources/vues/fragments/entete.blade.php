
<img class="menu__logo" src="./liaisons/images/logo.svg" alt="" width="200px">
{{--<h1>La pastèque</h1>--}}
<div class="barRecherche">
<label for="recherche">Rechercher un livre</label>
<input name="recherche" id="recherche" type="search" class="recherche" content="Rechercher un livre...">
</div>
<div class="buttons">
<button class="menu_btn compte">Mon compte</button>
<button class="menu_btn panier">Panier</button>
</div>
<nav id="navigation" class="nav navMobile navTable">
    <div id="menuToggle">
        <input type="checkbox" id="checkboxMenu" />

        <span class="span_menuHamburger"></span>
        <span class="span_menuHamburger"></span>
        <span class="span_menuHamburger"></span>
<ul id="menu" class="menu_list">
    <li><a href="index.php?controleur=site&action=accueil">Accueil</a></li>
    <li><a href="index.php?controleur=livre&action=index">Livres</a></li>
    <li><a href="index.php?controleur=artiste&action=index">Artistes</a></li>
    <li><a href="">Galerie/Boutique</a></li>
    <li><a href="">Production la pastèque</a></li>
</ul>
    </div>
</nav>