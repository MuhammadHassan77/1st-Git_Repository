/* ========================== main.js | Trendkit */

$(function () {
    'use strict';
    // ------------------ menu toggle
    $(".menu-toggle-icon").on("click", function () {
        $(".mobile-menu").slideToggle();
    });
    // ----------- call the  feather icons function
    feather.replace();
    // ----------- call the Owl initializer function
    $('#owl1')
        .owlCarousel({
            margin: 0,
            loop: true,
            autoWidth: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                }
            },
            autoplay: true,
            autoplayTimeout: 3000,
        });
    // ----------- call the Owl initializer function
    $('#owl2')
        .owlCarousel({
            margin: 0,
            loop: true,
            autoWidth: false,
            responsiveClass: true,
            center: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                }
            },
            autoplay: true,
            autoplayTimeout: 3000,
        });
    // ----------- call the Owl initializer function
    $('#owl22')
        .owlCarousel({
            margin: 0,
            loop: true,
            autoWidth: false,
            responsiveClass: true,
            center: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 4,
                }
            },
            autoplay: true,
            autoplayTimeout: 3000,
        });

});
/*! Fades out the whole page when clicking links */
$('a').click(function (e) {
    e.preventDefault();
    newLocation = this.href;
    $('body').fadeOut('slow', newpage);
});

function newpage() {
    window.location = newLocation;
}