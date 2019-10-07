(function () {
    "use strict"

    var $window = $(window),
        $document = $(document);

    var qTheme = {
        isElementInViewport: function (el) {
            if (typeof jQuery === "function" && el instanceof jQuery) {
                el = el[0];
            }
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.top <= (window.innerHeight || document.documentElement.clientHeight)
            );
        },
        stickyNav: function () {
            $('body.sticky-nav .navigation')
                [$window.scrollTop() ? 'addClass' : 'removeClass']
            ('sticky');
        }
    }

    window.qTheme = qTheme;

    $window.on('load', function () {
        qTheme.stickyNav();

        $window.on('scroll resize', function () {
            qTheme.stickyNav();
        });
    });

    $document.ready(function () {
        if ($(document.body).hasClass('sticky-nav')) {
            var navHeight = $('.navigation').outerHeight();
            qTheme.stickyNav();
        }

        $('.js-menu-toggle').on('click', function () {
            $('html').toggleClass('mobile-menu-active');
        });


        $(document.body).on('click', function (e) {
            var curr = $(e.target)
            if (curr.parents('.menu,.toggle').length === 0) {
                $('html').removeClass('mobile-menu-active');
            }

        });

        $(".navigation .menu li").each(function () {
            if ($(this.children).filter('ul').length > 0) {
                $(this).addClass('has-sub-menu')
            }
        });


        $(".has-sub-menu > a").on("click", function (e) {
            var parent = $(this).parent();
            var ul = parent.children('ul');
            console.log(ul)
            if (ul.length === 1 && matchMedia("(max-width: 1450px)").matches) {
                e.preventDefault();
                ul.slideToggle(function () {
                    if (this.style.display == 'none') {
                        this.style.display = '';
                    }
                });
            }
        });

        $('.dropdown-toggle').dropdown()
    });


    /* ###################### Counter ###################### */
    var numbCount = function (el) {
        var html = el.innerHTML.trim();
        var to = parseInt(html, 10);
        var inc = 120;
        if (to > 20) inc = 60;
        if (to > 60) inc = 40;
        if (to > 120) inc = 10;
        if (to > 320) inc = 5;
        if (to > 1220) inc = 3;
        if (to > 5000) inc = 1;
        if (!isNaN(to)) {
            var time = 10;
            for (var i = 1; i <= to; i++) {
                time += inc;
                (function (time, i, el) {
                    setTimeout(function () {
                        el.innerHTML = i;
                    }, time)
                })(time, i, el)
            }
        }
    }

    $.fn.isOnScreen = function () {
        var win = $window;

        var viewport = {
            top: win.scrollTop(),
            left: win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var bounds = this.offset();
        bounds.right = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top + this.outerHeight();

        return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    };


    $window.on('load resize scroll', function () {
        setTimeout(function () {
            $('[data-counter]').each(function () {
                if ($(this).isOnScreen()) {
                    $(this).css({'visibility': 'visible'});
                    $(this).removeClass('js-start-from-zero');
                    if (!this.__activated) {

                        this.__activated = true;
                        numbCount(this);
                    }
                }
            });
        }, 10);

        $(".menu").css('maxHeight', ($window.height() - $(".navigation").outerHeight()))
    });


    /* ###################### Tabs ###################### */
    $document.ready(function () {
        var numTabs = $('.tabs .nav-tabs:not(.as-buttons)').find('li').length;
        var tabWidth = 100 / numTabs;
        var tabPercent = tabWidth + "%";
        $('.nav-tabs li').width(tabPercent);
    });
    /* ###################### Tabs ###################### */

    /* ###################### Elevate Zoom ###################### */
    $document.ready(function () {

        var elevateZoomTurnOn = $document.width() > 991 ? true : false;

        if (elevateZoomTurnOn) {
            $("#elevatezoom").elevateZoom({
                gallery: 'elevatezoom-gallery',
                cursor: "crosshair",
                galleryActiveClass: 'active',
                imageCrossfade: true,
                zoomType: "inner"
            });


            //pass the images to Fancybox
            $("#elevatezoom").bind("click", function (e) {
                var ez = $('#elevatezoom').data('elevateZoom');

                var res = [];
                $.each(ez.getGalleryList(), function () {
                    res.push({src: this.href})
                });

                $.magnificPopup.open({
                    items: res,
                    gallery: {
                        enabled: true
                    },
                    type: 'image'
                });

                return false;
            });
        }

        var eGallery = $('#elevatezoom-gallery');
        if (eGallery.length > 0) {
            eGallery.each(function () {
                var el = $(this);
                el.slick({
                    centerMode: false,
                    centerPadding: '0',
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: true,
                    autoplay: false,
                    autoplaySpeed: 2000,
                    dots: false,
                    infinite: true,
                    responsive: [
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 2
                            }
                        }
                    ]
                });
            });
        }
    });
    /* ###################### Elevate Zoom ###################### */

    /* ###################### Home Slider ###################### */
    /*$document.ready(function () {
     var homeSlider = $('.home-slider');
     if (homeSlider.length > 0) {
     homeSlider.each(function () {
     var el = $(this);
     el.slick({
     centerMode: false,
     centerPadding: '0px',
     slidesToShow: 1,
     arrows: true,
     autoplay: false,
     autoplaySpeed: 2000,
     dots: true
     });
     });
     }
     });*/
    /* ###################### Home Slider ###################### */
    /* ###################### Product Slider ###################### */
    /*    $document.ready(function () {
     var homeSlider = $('.product-slider');
     if (homeSlider.length > 0) {
     homeSlider.each(function () {
     var el = $(this);
     el.slick({
     centerMode: false,
     centerPadding: '0px',
     slidesToShow: 1,
     arrows: true,
     autoplay: false,
     autoplaySpeed: 2000,
     dots: true
     });
     });
     }
     });*/
    /* ###################### Product Slider ###################### */
    /* ###################### Section 4 and 5 padding ###################### */

    function setPaddingToSections() {
        if ($window.width() > 991) {
            var headerWidth = $('.navigation-holder').width();
            var headerContainerWidth = $('.navigation-holder .navigation .container').width();
            $('.section-x').each(function () {
                var leftSide = $(this).find('.left-side');
                leftSide.css({'padding-left': ((headerWidth - headerContainerWidth ) / 2) + 10 + 'px'});
            })
            $('.section-y').each(function () {
                var leftSide = $(this).find('.right-side');
                leftSide.css({'padding-right': ((headerWidth - headerContainerWidth ) / 2) + 10 + 'px'});
            })
            $('.section-11').each(function () {
                var leftSide = $(this).find('.right-side');
                leftSide.css({'padding-right': ((headerWidth - headerContainerWidth ) / 2) + 10 + 'px'});
            })

        } else {
            $('.section-x').each(function () {
                var leftSide = $(this).find('.left-side');
                leftSide.css({'padding-left': ''});
            })
            $('.section-y').each(function () {
                var leftSide = $(this).find('.right-side');
                leftSide.css({'padding-right': ''});
            })
            $('.section-11').each(function () {
                var leftSide = $(this).find('.right-side');
                leftSide.css({'padding-right': ''});
            })
        }

        if ($window.width() > 1365) {
            var headerWidth = $('.navigation-holder').width();
            var headerContainerWidth = $('.navigation-holder .navigation .container').width();

            $('.section-11').each(function () {
                var leftSide = $(this).find('.right-side');
                leftSide.css({'padding-left': 145 + 'px'});
            })

        } else {
            $('.section-11').each(function () {
                var leftSide = $(this).find('.right-side');
                leftSide.css({'padding-left': ''});
            })
        }
    }

    $document.ready(function () {
        setPaddingToSections();
    });

    $window.on('resize', function () {
        setPaddingToSections();
    });
    /* ###################### Section 4 and 5 padding ###################### */

    /* ###################### Top Top ###################### */
    $document.ready(function () {
        var ttopButton = $("#to-top");
        ttopButton.hide().on("click", function () {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        });
        $window.scroll(function () {
            if ($window.scrollTop() === 0) {
                ttopButton.hide();
            } else {
                ttopButton.show();
            }
        });
    });
    /* ###################### To Top ###################### */

    /* ###################### Google Maps ###################### */
    $document.ready(function () {
        if ($('#map').length > 0) {
            var latitude = 42.662104;
            var longtitude = 23.3163666;
            var isDraggable = $document.width() > 991 ? true : false; // If document (your website) is wider than 480px, isDraggable = true, else isDraggable = false

            var locations = [
                ['', latitude, longtitude, 2]
            ];
            var styles = [
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                }
            ];

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                scrollwheel: false,
                navigationControl: true,
                mapTypeControl: false,
                scaleControl: false,
                draggable: isDraggable,
                styles: styles,
                center: new google.maps.LatLng(latitude, longtitude),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var infowindow = new google.maps.InfoWindow();
            var marker, i;
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: 'assets/img/section-16/marker.png'
                });
                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i][0]);
                    }
                })(marker, i));
            }
        }
    });
    /* ###################### Google Maps ###################### */

    /* ###################### Masonry Gallery with Magnific Popup ###################### */
    var masonryGrid = $('.masonry-gallery .js-masonry-grid-works');


    $window.on('load', function () {
        // masonry grid
        setTimeout(function () {
            masonryGrid.masonry({
                itemSelector: '.js-masonry-grid-works__item',
                columnWidth: '.js-masonry-grid-works__sizer',
                percentPosition: true
            }).isotope();
        }, 10);
    });

    $document.ready(function () {
        // isotope filtering panel
        $('.masonry-gallery .js-masonry-grid-works-filter').on('click', 'a', function (e) {
            e.preventDefault();

            var filterValue = $(this).attr('data-filter');
            $('.masonry-gallery .js-masonry-grid-works-filter .list-masonry-grid-works-filter__item a').each(function (index) {
                $(this).removeClass('btn-danger list-masonry-grid-works-filter__link_active');
                $(this).addClass('btn-primary');
            });

            $(this).removeClass('btn-primary');
            $(this).addClass('btn-danger list-masonry-grid-works-filter__link_active');

            masonryGrid.isotope({
                filter: filterValue
            });
        });

        // lightbox gallery
        $('.js-popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
            }
        });
    });
    /* ###################### Masonry Gallery with Magnific Popup ###################### */

    /* ###################### Tooltip ###################### */
    $document.ready(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    /* ###################### Tooltip ###################### */

    /* ###################### Project Gallery ###################### */
    function loadPortfolioGallerySettings() {

        return false;

        if ($window.width() > 991) {
            var projectGalleryHeight = $('.portfolio-inner-page .project-gallery').height();
            var projectGalleryWidth = $('.portfolio-inner-page .project-gallery').width();
            var projectInfoHeight = $('.portfolio-inner-page .project-info').height();
            $('.portfolio-inner-page .project-info').css({'max-width': projectGalleryWidth + 'px'});
            $('.portfolio-inner-page .js-in-viewport').css({'margin-top': projectInfoHeight + 'px'});
        } else {
            if ($('.portfolio-inner-page .project-gallery').length > 0) {
                $('.portfolio-inner-page .project-gallery').each(function () {
                    var el = $(this);
                    el.slick({
                        centerMode: true,
                        centerPadding: '0px',
                        slidesToShow: 1,
                        arrows: true,
                        dots: false,
                        adaptiveHeight: true
                    });
                });
            }
        }
    }

    $document.ready(function () {
        loadPortfolioGallerySettings();
    });

    $document.on('resize', function () {
        loadPortfolioGallerySettings();
    });


    $window.on('load', function () {
        /* ###################### Project Gallery ###################### */

        var pInfo = $('.project-info');

        pInfo.stickySidebar({
            containerSelector: '.project-holder',
            innerWrapperSelector: '.project-info-content',
            topSpacing: 115,
            bottomSpacing: 115
        });
    })

    /* ###################### Product Gallery ###################### */
    /*function loadProductGallerySettings() {

     return false;

     if ($window.width() > 991) {
     var productGalleryHeight = $('.shop-inner-page .product-gallery').height();
     var productGalleryWidth = $('.shop-inner-page .product-gallery').width();
     var productInfoHeight = $('.shop-inner-page .product-info').height();
     $('.shop-inner-page .product-info').css({'max-width': productGalleryWidth + 'px'});
     $('.shop-inner-page .js-in-viewport').css({'margin-top': productInfoHeight + 'px'});
     } else {
     if ($('.shop-inner-page .product-gallery').length > 0) {
     $('.shop-inner-page .product-gallery').each(function () {
     var el = $(this);
     el.slick({
     centerMode: true,
     centerPadding: '0px',
     slidesToShow: 1,
     arrows: true,
     dots: false,
     adaptiveHeight: true
     });
     });
     }
     }
     }

     $document.ready(function () {
     loadProductGallerySettings();
     });

     $document.on('resize', function () {
     loadProductGallerySettings();
     });

     $window.on('load', function () {
     /!* ###################### Project Gallery ###################### *!/

     var pInfo = $('.product-info');

     pInfo.stickySidebar({
     containerSelector: '.product-holder',
     innerWrapperSelector: '.product-info-content',
     topSpacing: 115,
     bottomSpacing: 115
     });
     })*/

    $document.ready(function () {
        /* ###################### Magnific Popup with Video ###################### */
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });
    /* ###################### Magnific Popup with Video ###################### */

    /* ###################### Zoom Container Open Image ###################### */
    // $document.ready(function () {
    //     $('.zoomWindow').on('click', function () {
    //         var img = $(this).css('background-image');
    //         console.log(img);
    //     });
    // });
    /* ###################### Zoom Container Open Image ###################### */

    /* ###################### Video Section ###################### */
    function setHeightOnVideos() {
        var headerheight = $('.navigation-holder').height();
        var windowheight = $(window).height();
        $('.video-section').css('height', windowheight - headerheight + "px");
        $('.video-section .video').css('height', windowheight - headerheight + "px");
        $('.video-section .container-fluid').css('height', windowheight - headerheight + "px");
        $('#main').css('margin-top', headerheight + "px");
    }

    $document.ready(function () {
        setHeightOnVideos();
    });

    $window.on('resize', function () {
        setHeightOnVideos();
    });
    /* ###################### Video Section ###################### */

    /* ###################### Quantity ###################### */

    $document.ready(function () {
        $(".arrow.minus").on("click", function (m) {
            var i = $(this).parent().parent().find('input[name="quantity"], input[name="qty"], .js-qty');
            if (i.val() <= 1) {
                i.val("1").change();
            } else {
                var l = i.val() - 1;
                i.val(l).change();
            }
        });
        $(".arrow.plus").on("click", function (m) {
            var i = $(this).parent().parent().find('input[name="quantity"], input[name="qty"], .js-qty');
            if (i.val() <= 19) {
                var l = +i.val() + +1;
                i.val(l).change();
            }
        });
    });
    /* ###################### Quantity ###################### */
})();

$(document).ready(function () {
    $('#mw-template-microweber-whitelabel').removeClass('module');
})

$(document).ready(function () {
    $('.navigation .menu .list.menu_1').collapseNav({
        responsive: 1,
        mobile_break: 992,
        li_class: 'has-sub-menu dropdown'
    });
})

/* Ajax Loading */
$(window).on('load', function () {
    setTimeout(function () {
        $('body').addClass('page-loaded');
    }, 900);
})