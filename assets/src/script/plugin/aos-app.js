/* AOS - Animate on scroll library */

/* AOS - Animate on scroll library */


jQuery(function($) {
    if($(window).width() > 1059){
        AOS.init();
        window.addEventListener('load', AOS.refresh);
    }
});