import.meta.glob([
    '../images/**',
    '../fonts/**',
]);
import jQuery from 'jquery'

window.$ = jQuery

$(document).ready(function () {
    $('.hamburger').on('click', e => {
        e.preventDefault()
        e.stopPropagation()

        $('.nav-container').toggleClass('opened')
    })
})
