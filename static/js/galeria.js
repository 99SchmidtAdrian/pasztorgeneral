const openOverlay = (ordNum) => {
    document.querySelector('.overlay').style.transition = "all .4s ease-in-out";
    const overlay = document.querySelector('.overlay').classList;
    const imgSrc = document.querySelector('.pic-' + ordNum).src;
    let overlaySrc = document.querySelector('.overlay__img').src;
    overlaySrc = imgSrc;
    document.querySelector('.overlay__img').src = imgSrc
    overlay.add('overlay-visible')
}

const closeOverlay = () => document.querySelector('.overlay').classList.remove('overlay-visible');

document.querySelector('.overlay__close').addEventListener('click', () => {
    closeOverlay()
});

document.querySelector('.overlay__bg').addEventListener('click', () => {
    closeOverlay()
})