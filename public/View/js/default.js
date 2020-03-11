let toggleMobileMenu = function(){
    $("#mobile-menu").toggleClass('d-none');
    $("#mobile-menu").toggleClass('d-flex');
}
var homeSlider = $('#home-slider');
homeSlider.owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    slideTransition: 'linear',
    autoplayHoverPause: true,
    dots: true,
    nav: false,
});
// Header ended
// Sliders starts
$('#country-carousel, #institute-carousel').owlCarousel({
    loop: true,
    autoplay: false,
    autoplayTimeout: 5000,
    slideTransition: 'linear',
    autoplaySpeed: 5000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            margin: 20,
            nav: true,
        },
        600: {
            items: 2,
            margin: 20,
            nav: true
        },
        1000: {
            items: 4,
            margin: 40,
            nav: true,
        }
    }
});
$('#story-carousel').owlCarousel({
    loop: true,
    slideTransition: 'linear',
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            margin: 20,
            nav: true,
        },
        600: {
            items: 1,
            margin: 20,
            nav: true
        },
        1000: {
            items: 3,
            margin: 20,
            nav: true,
        },
        2000: {
            items: 4,
            margin: 20,
            nav: true,
        }
    }
});
document.getElementsByClassName('owl-prev')[1].innerHTML = '<i class="fas fa-4x fa-caret-left"></i>'
document.getElementsByClassName('owl-next')[1].innerHTML = '<i class="fas fa-4x fa-caret-right"></i>'
