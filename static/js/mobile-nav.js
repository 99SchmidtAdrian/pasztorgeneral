const trigger_mobile_nav = () => {
    if (document.getElementById("nav-icon-upper-line").classList.contains('upper-line__opened')) {
        document.getElementById("nav-icon-upper-line").classList.remove('upper-line__opened')
        document.getElementById("nav-icon-middle-line").classList.remove('middle-line__opened')
        document.getElementById("nav-icon-bottom-line").classList.remove('bottom-line__opened')
        document.getElementById("mobile-menu__dropdown").style.height='0px'
    } else {
        document.getElementById("nav-icon-upper-line").classList.add('upper-line__opened')
        document.getElementById("nav-icon-middle-line").classList.add('middle-line__opened')
        document.getElementById("nav-icon-bottom-line").classList.add('bottom-line__opened')
        document.getElementById("mobile-menu__dropdown").style.height='200px'

    }
}