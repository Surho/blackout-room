'use strict';

window.onload = function() {
    document.body.classList.add('loaded');
};

const scrollBtn = document.querySelector('.scroll-home');
let scrollBtnVisible = false;


document.addEventListener('scroll', () => {

    if(document.body.classList.contains('opened__menu--body')) {
        return;
    };

    if(window.pageYOffset <= 100 && scrollBtnVisible) {
        scrollBtn.classList.add('scroll-home--hidden');
        scrollBtnVisible = false;
    } else {
        if(window.pageYOffset >= 100 && !scrollBtnVisible ) {
            scrollBtn.classList.remove('scroll-home--hidden');
            scrollBtnVisible = true;
        }
    }
})

scrollBtn.addEventListener('click', () => {
    scrollIt(0, 300, 'linear');
});

const intro = document.querySelector('.intro');
const introArrows = intro.querySelector('.intro__arrows');

if(intro.offsetHeight < document.documentElement.clientHeight) {
    introArrows.style.display = 'none';
}

const contact = document.querySelector('.navigation__item--contact');
let menuSwitch = document.querySelector('.intro__switch');
let menu = document.querySelector('.navigation');

contact.addEventListener('click', (evt) => {
    evt.preventDefault();
    let contacts = document.querySelector('.contacts__text');
    let contactsCoord = contacts.getBoundingClientRect().top + pageYOffset;

    console.log(document.documentElement.clientWidth);
    if(document.documentElement.clientWidth <= 768) {
        document.body.classList.remove('opened__menu--body');
        document.documentElement.classList.remove('opened__menu');
        scrollIt(contactsCoord, 500, 'linear');
        return;
    }

    scrollIt(contactsCoord, 200, 'linear');

    console.log(contactsCoord );
})





