
const nav = document.getElementById('navigation');
const checkbox = document.getElementById('checkboxMenu');
const spans = document.querySelectorAll('span');
const width = window.matchMedia('(max-width:800px)');
hideHamburger(width);
width.addEventListener('change', hideHamburger);

function hideHamburger(widthValue){
    console.log('in');
    console.log(widthValue);

    if(widthValue.matches){
        console.log('matches');
        nav.classList.add('navMobile');
        nav.classList.remove('navTable');
        checkbox.classList.remove('noDisplayMenu');
        spans.forEach(spans =>  spans.classList.remove('noDisplayMenu'))

    }else{
        console.log(' doesnt match');
        nav.classList.remove('navMobile');
        nav.classList.add('navTable');
        checkbox.classList.add('noDisplayMenu');
        spans.forEach(spans =>  spans.classList.add('noDisplayMenu'))
    }


}