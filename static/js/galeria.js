const openOverlay = (ordNum) => {
    const overlay = document.querySelector('.overlay').classList;
    const imgSrc = document.querySelector('.pic-' + ordNum).src;
    let overlaySrc = document.querySelector('.overlay__img').src;
    overlaySrc = imgSrc;
    document.querySelector('.overlay__img').src = imgSrc
    console.log('overlaySrc = ' + overlaySrc)
    console.log('imgSrc = ' + imgSrc)
    overlay.remove('overlay-hidden')
}

const closeOverlay = () => document.querySelector('.overlay').classList.add('overlay-hidden');

document.querySelector('.overlay__close').addEventListener('click', () => {
    closeOverlay()
});

document.querySelector('.overlay__bg').addEventListener('click', () => {
    closeOverlay()
})