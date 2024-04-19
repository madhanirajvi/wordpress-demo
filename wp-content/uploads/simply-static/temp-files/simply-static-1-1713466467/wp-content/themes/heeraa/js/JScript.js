
$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });

    $('.scroll-to-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});

$(document).ready(function () {

    $('#main-menu #menu').onePageNav({
        currentClass: 'active',
        changeHash: false,
        scrollSpeed: 1500,
        scrollThreshold: 0.5,
        scrollOffset: 95,
        filter: ':not(.sub-menu a, .not-in-home)',
        easing: 'swing'
    });


    /*----------- Google Map - with support of gmaps.js ----------------*/

    function isMobile() {
        return ('ontouchstart' in document.documentElement);
    }

    function init_gmap() {
        if (typeof google == 'undefined')
            return;
        var options = {
            center: [-37.817331, 144.955652],
            zoom: 15,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            },
            navigationControl: true,
            scrollwheel: false,
            streetViewControl: true
        }

        if (isMobile()) {
            options.draggable = false;
        }

        $('#googleMaps').gmap3({
            map: {
                options: options
            },
            marker: {
                latLng: [-37.817331, 144.955652],
                options: {icon: '../images/mapicon.png'}
            }
        });
    }

    init_gmap();
});
