/* Head Blur Tab Page Title */
$(function(){
    var $pageHeadTitleTag       = $('title');
    var $pageHeadTitleTagText   = $pageHeadTitleTag.text();
    var $headerSloganTitle      = $(".headtitle h1").text();
    var $headerDefaultTitle     = "IXBROKERS";
    var $headerBlurTitle        = "IXBROKERS";

    if($('body').hasClass('home')){
        $(window).on("load", function(){
            $pageHeadTitleTag.text($headerDefaultTitle)
        });
    }else {
        $(window).on("load", function(){
            $pageHeadTitleTag.text($headerSloganTitle.toLocaleUpperCase() + " | " + $headerDefaultTitle)
        });
    }

    $(window).focus(function(){
        if($('body').hasClass('home')){
            $pageHeadTitleTag.text($headerDefaultTitle)
        }else {
            $pageHeadTitleTag.text($headerSloganTitle.toLocaleUpperCase() + " | " + $headerDefaultTitle)
        }
    });

    $(window).blur(function(){
        $pageHeadTitleTag.text($headerBlurTitle)
    });
});
/* Head Blur Tab Page Title */

/* Header Mobile Navbar Menu */
$(function() {

    // Mobile Menu
    $('#dfn-navtggle').click(function () {
        $('.dfn-megamenu').toggleClass('dfn-canvaskapat');
    });
    $('.dfn-mobilemenu-mask').click(function () {
        $('.dfn-megamenu').removeClass('dfn-canvaskapat');
    });
    // Mobile Menu

});
/* Header Mobile Navbar Menu */

/* Header Web Navbar Fixed */
jQuery(function($) {
    if($(window).width() > 1059){

        $(window).on("load resize scroll",function(e){

            //var bodyWidth = window.innerWidth;
            //var bodyHeight = window.innerHeight;
            var scroll = $(window).scrollTop();
            var headerHeight = $("header.header");
            var headTitle = $("section.headtitle");

            if (scroll > (headerHeight.height() / 3)) {
                headerHeight.addClass("navscroll");
                headTitle.addClass("navscroll");
            } else {
                headerHeight.removeClass("navscroll");
                headTitle.removeClass("navscroll");
            }

        }).on("load resize",function(e){
            // var headerHeight = $("header.header");
            // $("header + section").css("min-height", headerHeight.height() + "px").css("padding-top", headerHeight.height() + "px");
        });
    } else {
        $(window).on("load resize scroll",function(e){
            var scroll = $(window).scrollTop();
            var headerHeight = $("header.header");

            if (scroll > 10) {
                headerHeight.addClass("navscroll");
            } else {
                headerHeight.removeClass("navscroll");
            }
        })
    }
});
/* Header Web Navbar Fixed */

/* Header Web Navbar Dropdown Menu */
$(window).on("load resize",function(e){if($(window).width() > 1059){

    /* Dropdown Megamenu Start */
    $('.dfn-menu .dfn-menu-list .dfn-menu-list-item > a[data-toggle="dropdown"]').click(function() {
        $('.dfn-menu').addClass('activenavbar');

        $(document).click(function(event) {
            if (!$(event.target).hasClass('active')) {
                $('.dfn-menu').removeClass('activenavbar');
            }
        });
    });
    /* Dropdown Megamenu End */

}});
/* Header Web Navbar Dropdown Menu */

/* Dropdown Menu Form Fixed */
$('.dropdown-menu input, .dropdown-menu select, .dropdown-menu label').click(function(e) {
    e.stopPropagation();
});
/* Dropdown Menu Form Fixed */

/* Tooltip */
$(function(){
    $('[data-toggle="tooltip"]').tooltip()
});
/* Tooltip */

/* Footer Scroll to Top Button */
jQuery(document).ready(function() {
    var duration = 300;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 250) {
            jQuery('.bottomtotopbutton').fadeIn(duration);
        } else {
            jQuery('.bottomtotopbutton').fadeOut(duration);
        }
    });

    jQuery('.bottomtotopbutton').click(function(event) {
        event.preventDefault();
        jQuery('html,body').animate({scrollTop: 0}, duration);
        return false;
    })
});
/* Footer to Top Button */

/* Site Forum UI Input Text Transform Capitalize */
$('.siteformui input[type="text"]').keyup(function(evt){
    var txt = $(this).val();
    $(this).val(txt.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase( ); }));
});
/* Site Forum UI Input Text Transform Capitalize */

/* Site Forum UI Label Animation Select Disabled */
jQuery(document).ready(function() {
    $(".siteformuilabel .labelanimation > .selectclickjsblur").click(function (evt) {
        evt.preventDefault();
        $(this).hide().prev("select.autofill").prop("disabled", false);
    });
});
/* Site Forum UI Label Animation Select Disabled */

/* Site Forum UI Input Mask */
$(document).ready(function(){
    $('.inputphonemask').inputmask({
        mask: '+99{1,99}',
        placeholder: '',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputgsmphonemask').inputmask({
        mask: '0599 999 99 99',
        placeholder: '',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputphonemasktr').inputmask({
        mask: '0999 999 99 99',
        placeholder: '',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputibanmask').inputmask({
        mask: 'TR99 9999 9999 9999 9999 9999 99',
        placeholder: '',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputidentitymask').inputmask({
        mask: '99999999999',
        placeholder: '',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputdatemask').inputmask({
        mask: '99/99/9999',
        placeholder: 'MM/DD/YYYY',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputdatedottedmask').inputmask({
        mask: '99.99.9999',
        placeholder: 'MM.DD.YYYY',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputonlytextmask').inputmask({
        mask: 'AAA',
        placeholder: '',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
});
/* Site Forum UI Input Mask */

/* Loading Info */
// console.log("Plugin App Javascript Loading Successful");
/* Loading Info */