var owl = $('.owl-carousel1');
owl.owlCarousel({
    items: 6,
    margin: 10,
    nav: true,
    loop: true,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        },
        1200: {
            items: 6
        },
    }
});
var owl = $('.owl-brand1');
owl.owlCarousel({
    items: 6,
    margin: 10,
    nav: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        },
        1200: {
            items: 6
        },
    }
});

var owl = $('.owl-media');
        owl.owlCarousel({
            items: 2,
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        });
        var owl = $('.owl-testimonial');
        owl.owlCarousel({
            items: 3,
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
        var owl = $('.owl-Recently');
        owl.owlCarousel({
            items: 6,
            margin: 10,
            nav: true,
            loop: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 5
                }
            }
        });
        var owl = $('.owl-like');
        owl.owlCarousel({
            items: 4,
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                },
                1200: {
                    items: 4
                }
            }
        });