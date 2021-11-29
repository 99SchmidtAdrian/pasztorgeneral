// mobile nav open-close animation
const resizeFix = () => {
    document.querySelector("#nav-icon-upper-line").classList.remove('upper-line__opened')
    document.querySelector("#nav-icon-middle-line").classList.remove('middle-line__opened')
    document.querySelector("#nav-icon-bottom-line").classList.remove('bottom-line__opened')
    document.querySelector("#mobile-menu__dropdown").classList.remove('mobile-menu__opened')
}

window.addEventListener('resize', resizeFix)

const trigger_mobile_nav = () => {
    if (document.querySelector("#nav-icon-upper-line").classList.contains('upper-line__opened')) {
        document.querySelector("#nav-icon-upper-line").classList.remove('upper-line__opened')
        document.querySelector("#nav-icon-middle-line").classList.remove('middle-line__opened')
        document.querySelector("#nav-icon-bottom-line").classList.remove('bottom-line__opened')
        document.querySelector("#mobile-menu__dropdown").classList.remove('mobile-menu__opened')
    } else {
        document.querySelector("#nav-icon-upper-line").classList.add('upper-line__opened')
        document.querySelector("#nav-icon-middle-line").classList.add('middle-line__opened')
        document.querySelector("#nav-icon-bottom-line").classList.add('bottom-line__opened')
        document.querySelector("#mobile-menu__dropdown").classList.add('mobile-menu__opened')
    }
};

// nav bar current page

const path = window.location.pathname;

switch (path) {
    case '/':
        document.querySelector('#fooldal-button').classList.add('current-page')
        document.querySelector('#fooldal-mobile-button').classList.add('current-page')
        break;

    case '/rolunk.php':
        document.querySelector('#rolunk-button').classList.add('current-page')
        document.querySelector('#rolunk-mobile-button').classList.add('current-page')
        break;

    case '/galeria.php':
        document.querySelector('#galeria-button').classList.add('current-page')
        document.querySelector('#galeria-mobile-button').classList.add('current-page')
        break;

    case '/szolgaltatasok.php':
        document.querySelector('#szolgaltatasok-button').classList.add('current-page')
        document.querySelector('#szolgaltatasok-mobile-button').classList.add('current-page')
        break;
    case '/kapcsolat.php':
        document.querySelector('#kapcsolat-button').classList.add('current-page')
        document.querySelector('#kapcsolat-mobile-button').classList.add('current-page')
        break;

    case '/karrier.php':
        document.querySelector('#karrier-button').classList.add('current-page')
        document.querySelector('#karrier-mobile-button').classList.add('current-page')
        break;
}

// parallax scroll effect

let offset = window.pageYOffset;
const mainWrapper = document.querySelector('#main__wrapper');
const heroMain = document.querySelector('#hero__main')
let heroBottom = heroMain.offsetHeight

window.onresize = () => {
    heroBottom = heroMain.offsetHeight
    parallaxEffect()
}

const parallaxEffect = () => {
    if (heroBottom > offset) {
        mainWrapper.style.marginTop = heroBottom + 50 - offset + "px"
        heroMain.style.opacity = 1.0 - offset / 250
    }
}

//back to top button

window.onscroll = (e) => {
    offset = window.pageYOffset
    parallaxEffect();
    if (offset >= 100) {
        document.querySelector('.back-to-top__main').classList.add('back-to-top__visible')
    } else if (offset > !0) {
        document.querySelector('.back-to-top__main').classList.remove('back-to-top__visible')
    }
}

// hero onload animation

const heroTitle = document.querySelector('.hero__title');
const strHeroTitle = heroTitle.textContent;
const splitHeroTitle = strHeroTitle.split("");
heroTitle.textContent = ""

for (let i = 0; i < splitHeroTitle.length; i++) {
    heroTitle.innerHTML += "<span>" + splitHeroTitle[i] + "</span>";
}

let char = 0;
let timer = setInterval(onTick, 25);

function onTick() {
    const span = heroTitle.querySelectorAll('span')[char];
    span.classList.add('hero__title-animation');
    char++
    if (char === splitHeroTitle.length) {
        complete();
        setTimeout(buttonFadeIn, 500)
        return;
    }
}

const complete = () => {
    clearInterval(timer)
    timer = null
}

const heroButton = document.querySelector('.hero__button')

const buttonFadeIn = () => {
    heroButton.classList.add('hero__button-visible')
}

const header = document.querySelector('#header__main');