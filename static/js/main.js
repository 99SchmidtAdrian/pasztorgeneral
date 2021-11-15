let offset = window.pageYOffset;
window.onscroll = (e) => {
    offset = window.pageYOffset
    const firstProposer = document.getElementById('first_proposer__main');
    const heroMain = document.getElementById('hero__main')
    firstProposer.style.margin = 32 - offset / 10 + 'vh 0 0'
    heroMain.style.opacity = 1.0 - offset / 250
}