
<img class="menu__logo" src="liaisons/images/logo.svg" alt="" width="200px">
{{--<h1>La pastèque</h1>--}}
<div class="buttons">
<button class="menu_btn compte"><svg width="30px" height="30px" color="orange" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" >

        <path d="M0 0h48v48H0z" fill="none"/>
        <g id="Shopicon">
            <path fill="#C64532FF" d="M31.278,25.525C34.144,23.332,36,19.887,36,16c0-6.627-5.373-12-12-12c-6.627,0-12,5.373-12,12
		c0,3.887,1.856,7.332,4.722,9.525C9.84,28.531,5,35.665,5,44h38C43,35.665,38.16,28.531,31.278,25.525z M16,16c0-4.411,3.589-8,8-8
		s8,3.589,8,8c0,4.411-3.589,8-8,8S16,20.411,16,16z M24,28c6.977,0,12.856,5.107,14.525,12H9.475C11.144,33.107,17.023,28,24,28z"
            />
        </g>
    </svg></button>
<button class="menu_btn panier"><svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg></button>
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

<div class="barRecherche">
    <label for="recherche">Rechercher un livre</label>
    <input name="recherche" id="recherche" type="search" class="recherche" content="Rechercher un livre...">
</div>