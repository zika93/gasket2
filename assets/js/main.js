"use strict";
jQuery(document).ready(function ($) {

    //for Preloader

    $(window).load(function () {
        $("#loading").fadeOut(500);
        laguageChange()
    });


    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    $('#navbar-menu').find('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top - 80)
                }, 1000);
                if ($('.navbar-toggle').css('display') != 'none') {
                    $(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });



    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/

    var wow = new WOW({
        mobile: false // trigger animations on mobile devices (default is true)
    });
    wow.init();

    // magnificPopup

    $('.popup-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.video-link').magnificPopup({
        type: 'iframe'
    });



    // slick slider active Home Page Tow
    $(".hello_slid").slick({
        dots: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<i class='icon icon-chevron-left nextprevleft'></i>",
        nextArrow: "<i class='icon icon-chevron-right nextprevright'></i>",
        autoplay: true,
        autoplaySpeed: 2000
    });



    $(".business_items").slick({
        dots: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<i class='icon icon-chevron-left nextprevleft'></i>",
        nextArrow: "<i class='icon icon-chevron-right nextprevright'></i>",
        autoplay: true,
        autoplaySpeed: 2000
    });




    //---------------------------------------------
    // Scroll Up 
    //---------------------------------------------

    $('.scrollup').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });

    //End

});


function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function laguageChange() {
    let currentLanguage = getCookie('language');
    if (!currentLanguage) {
        setCookie('language', 'rs', 1000);
        currentLanguage = 'rs';
        document.getElementById('lang_rs').style.display = 'none';
    }
    else {
        if (currentLanguage == 'en') {
            document.getElementById('lang_rs').style.display = 'none';
            document.getElementById('lang_en').style.display = 'block';
        }
        else {
            document.getElementById('lang_en').style.display = 'none';
            document.getElementById('lang_rs').style.display = 'block';
        }
    }
    let obj = language[currentLanguage];
    for (let propertyName in obj) {
        document.getElementById(propertyName).innerHTML = obj[propertyName];
    }
}

function setEN() {
    setCookie('language', 'en', 1000);
    laguageChange();
    document.getElementById('lang_rs').style.display = 'block';
    document.getElementById('lang_en').style.display = 'none';
}

function setRS() {
    setCookie('language', 'rs', 1000);
    laguageChange();
    document.getElementById('lang_rs').style.display = 'none';
    document.getElementById('lang_en').style.display = 'block';
}


