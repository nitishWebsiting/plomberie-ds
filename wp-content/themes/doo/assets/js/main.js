/*
 * Doo - one page  Responsive Template
 * Build Date: jan 2017
 * Author: Mohamed Hamato
 * Copyright (C) 2016 Mohamed Hamato
 * Envato Profile: https://themeforest.net/user/pharaohlab
 */
/* ------------------------------------- */
/*  TABLE OF CONTENTS
 /* ------------------------------------- */
/*   PRE LOADING                          */
/*   WOW                                 */
/*   Menu                                */
/*  STICKY HEADER                        */
/*   COUNTER                             */
/*   portfolio-filter                    */
/*   pop up                              */
/*   OWL CAROUSEL                        */
/*    MAPS                               */
/*     YTPlayer                         */
/*  TEXT ANIMATE                         */
/*   TEXT ROTATOR                        *



/*--------------------------------------------*/
/*  PRE LOADING
 /*------------------------------------------*/
'use strict';
jQuery(window).on('load',function() {
    jQuery('#loader-wrapper').delay(350).fadeOut('slow');
});


jQuery(document).ready(function() {

    'use strict';
    /* ------------------------------------- */
    /*   wow
     /* ------------------------------------- */
    var wow = new WOW(
        {
            animateClass: 'animated',
            offset: 10,
            mobile: true
        }
    );
    wow.init();

    /* ==============================================
     Smooth Scroll To Anchor
     =============================================== */

    jQuery('.navbar-nav a').on('click', function (event) {
        var jQueryanchor = jQuery(this);
        jQuery('html, body').stop().animate({
            scrollTop: jQuery(jQueryanchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
    jQuery('.nav a').on('click',function () {
        jQuery('.navbar-collapse').collapse('hide');
    });

    /* ==============================================
     STICKY HEADER
     =============================================== */
    var header = jQuery('.header');
    jQuery(window).on('scroll', function () {
        if (jQuery(window).scrollTop() < 100) {
            header.removeClass('sticky_header');
        } else {
            header.addClass('sticky_header');
        }
    });

    /* --------------------------------------------------------
     COUNTER JS
     ----------------------------------------------------------- */

    jQuery('.counter').counterUp({
        delay: 5,
        time: 3000
    });


    /* ==============================================
     portfolio-filter
     =============================================== */

    // filter items on button click
    var fil_con_id = jQuery('#filtr-container');
    var fil_con_class = jQuery('.filtr-container');
    if( fil_con_id.length > 0 ){

    fil_con_id.on('click', 'li', function(e) {
        e.preventDefault();
        fil_con_id.find('li').removeClass('active');
        jQuery(this).closest('li').addClass('active');
    });

    jQuery(window).on('load',function() {
        if( fil_con_class.hasClass( "filtr-container" )) {
            fil_con_class.filterizr();
        }
    })
    }
    /* ==============================================
     pop up
     =============================================== */

    // portfolio-pop up

    fil_con_class.magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title');
            }
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function (element) {
                return element.find('img');
            }
        }
    });


    /* ==============================================
     OWL CAROUSEL
     =============================================== */
    jQuery(".hero_carousel").owlCarousel({
        loop:true,
        autoplay:true,
        smartSpeed:550,
        autoplayHoverPause:false,
        dots:false,
        nav:false,
        responsiveClass:true,
        items:1
    });

    jQuery(".team_carousel").owlCarousel({
        loop:true,
        autoplay:true,
        smartSpeed:450,
        autoplayHoverPause:false,
        dots:false,
        nav:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:2

            },
            1000:{
                items:3

            },
            1200:{
                items:4

            }
        },
        items:4
    });


    jQuery(".testimonial_carousel").owlCarousel({
        loop:true,
        autoplay:true,
        smartSpeed:550,
        autoplayHoverPause:false,
        dots:false,
        nav:false,
        responsiveClass:true,
        items:1,
        animateOut: 'fadeOut'
    });


    jQuery(".blog_carousel").owlCarousel({
        loop:true,
        autoplay:true,
        smartSpeed:450,
        autoplayHoverPause:false,
        dots:false,
        nav:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            450:{
                items:1

            },
            800:{
                items:2

            },
            1200:{
                items:3

            }
        },
        items:3
    });

    jQuery(".post_carousel").owlCarousel({
        loop:true,
        autoplay:true,
        smartSpeed:550,
        autoplayHoverPause:false,
        nav:false,
        dots:false,
        responsiveClass:true,
        items:1,
        animateOut: 'fadeOut'
    });

    jQuery(".brand_carousel").owlCarousel({
        loop:true,
        autoplay:true,
        smartSpeed:450,
        autoplayHoverPause:false,
        dots:false,
        nav:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3

            },
            1000:{
                items:5

            }
        },
        items:5
    });



    /* --------------------------------------------------------
     YTPlayer
     ----------------------------------------------------------- */
    jQuery("#home_intro_video").YTPlayer();

    /* --------------------------------------------------------
     TEXTILLATE ANIMATE
     ----------------------------------------------------------- */
    "use strict";
    var tlt  = jQuery(".tlt");
    if(tlt.length > 0 ) {
        tlt.textillate({
            loop: true,
            minDisplayTime: 5000,
            in: {
                // set the effect name
                effect: 'fadeInLeft',
                delayScale: 1.5
            },
            out: {
                effect: 'fadeOutRight',
                delayScale: 1.5,
                delay: 50,
                sync: false,
                shuffle: true,
                reverse: false
            }
        });
    }
    /* --------------------------------------------------------
     TEXT ROTATOR
     ----------------------------------------------------------- */
    jQuery(".rotate").textrotator({
        animation: "dissolve", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
        separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
        speed: 3000 // How many milliseconds until the next word show.
    });


});