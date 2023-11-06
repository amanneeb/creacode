
const nav = document.getElementById('navigation');
const checkbox = document.getElementById('checkboxMenu');
const spans = document.querySelectorAll('.span_menuHamburger');
const width = window.matchMedia('(max-width:800px)');
const menu=document.getElementById('menu');
var intervalle = null;
hideHamburger(width);

width.addEventListener('change', hideHamburger);
// checkbox.addEventListener('change', hideMenuContent);

function hideHamburger(widthValue){
    console.log(widthValue);
    console.log(checkbox.checked);

    if(widthValue.matches){
        console.log('matches');
        nav.classList.add('navMobile');
        nav.classList.remove('navTable');
        checkbox.classList.remove('noDisplayMenu');
        // menu.classList.add('noDisplayMenu');
        spans.forEach(spans =>  spans.classList.remove('noDisplayMenu'))

    }else{
        console.log(' doesnt match');
        nav.classList.remove('navMobile');
        nav.classList.add('navTable');
        checkbox.classList.add('noDisplayMenu');
        spans.forEach(spans =>  spans.classList.add('noDisplayMenu'))
    }

}

// function hideMenuContent(){
//     console.log(checkbox.checked);
//     if(checkbox.checked){
//         clearInterval(intervalle);
//         menu.classList.remove('noDisplayMenu')
//         // intervalle = setInterval(function(){
//         //     menu.classList.remove('noDisplayMenu');
//         // }, 50);
//         // menu.classList.remove('opacityMenu');
//     } else if(!checkbox.checked){
//         clearInterval(intervalle)
//         intervalle = setInterval(function(){
//             menu.classList.add('noDisplayMenu');
//         }, 300);
//         // menu.classList.add('opacityMenu');
//     }
// }