const changeHeight = (id) => {
        const element = document.getElementById('type__p-' + id);
        const button = document.getElementById('type__button-' + id);
        if (element.classList.contains('type__p-visible')) {
                element.classList.remove('type__p-visible')
                button.classList.remove('type__button-rotated')
        } else {
                element.classList.add('type__p-visible')
                button.classList.add('type__button-rotated')
        }
}