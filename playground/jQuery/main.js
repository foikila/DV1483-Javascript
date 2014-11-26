
$(document).ready( function () {
    'use strict';
    // assignment 1
    $('#box1 h1, #box1 p, #box1 img').click(function () {
        $(this).toggleClass('invert');

    });
    // assignment 2
    $('#box2').on('click', function () {
        $(this).toggleClass('invert');
    });
    $('#box2 h1').on('click', function () {
        e.stopPropagation();
        $('#box2 img').slideToggle(400);
    });
    // assignment 3
    $('#add').click(function () {
        $('<div class="yta"></div>')
            .insertAfter('#yta')
            .click(function () {
                $(this).remove();
            });
    });
    // assignment 4
    var img = $('#box4 img');

    $('#width_incr').click(function () {
        img.width(img.width() + 30);
    });

    $('#width_decr').click(function () {
        img.width(img.width() - 30);
    });

    $('#height_incr').click(function () {
        img.height(img.height() + 30);
    });

    $('#height_decr').click(function () {
        img.height(img.height() - 30);
    });
    // assignment 5
    $('#b1').on('click', function (e) {
        e.preventDefault();
        $('#51').slideToggle(400);
    });

    $('#b2').on('click', function (e) {
        e.preventDefault();
        $('#52').fadeToggle('400');
    });
    // assignment 6
    var removeLightbox = function () {
        $('#overlay, #lightbox').fadeOut('fast', function() {
            $(this).remove();
        });
    }

    $(document).keyup(function(evt) {
        evt = evt || window.event;
        if (event.keyCode === 27) {
            removeLightbox();
        }
    });

    $('.lightbox').on('click', function(e) {
        e.preventDefault();

        var windowHeight = window.innerHeight || $(window).height(),
            windowWidth = window.innerwidth || $(window).width();

        $('<div id="overlay"></div>')
            .css('opacity', '0')
            .animate({'opacity' : '0.5'}, 100)
            .appendTo('body');

        $('<div id="lightbox"></div>')
            .hide()
            .appendTo('body');

        $('<img>')
            .attr('src', $(this).attr('src'))
            .css({
                'max-height': windowHeight,
                'max-width' : windowWidth
            })
            .load(function () {
                $('#lightbox')
                .css({
                    'top':  (windowHeight - $('#lightbox').height()) / 2,
                    'left': (windowWidth  - $('#lightbox').width())  / 2
                })
                .fadeIn('slow');
            })
            .appendTo('#lightbox');

        $('#overlay, #lightbox').on('click', function(event) {
            event.preventDefault();
            removeLightbox();
        });
    });
    // assignment 7
    var galleryInit = function() {
        var current = null;
        $('.gallery-all img').each(function () {
            $(this)
                .attr('src', $(this).attr('data-path'))
                .click(function(event) {
                    if (! current) {
                        current = this;
                    } else {
                        $(current).toggleClass('selected');
                        current = this;
                    }
                    $(this).toggleClass('selected');
                    $('.gallery-current img')
                        .attr(
                            'src',
                            $(this).attr('src')
                        )
                });
        });
        $('.gallery-all img').first().trigger('click');
    }
    // Start gallery
    galleryInit();

    var slideshowInit = function() {
        var nrOfImages = $('.slideshow img').length,
            currentImage = nrOfImages - 1,
            zIndex = parseInt($('.slideshow').css('z-index')),
            currentZIndex = zIndex,
            intervalId = null;

        var rotateImages = function() {
            $('.slideshow img')
                .eq(currentImage)
                .fadeOut('slow', function() {
                    $(this)
                        .css('z-index', zIndex)
                        .fadeIn(0)
                        $(this)
                            .css('z-index', zIndex)
                            .fadeIn(0)
                            .siblings().each(function() {
                                $(this).css('z-index', ((parseInt($(this).css('z-index')) - zIndex + 1) % nrOfImages + zIndex));
                            });
                });

            currentImage = (nrOfImages + currentImage - 1) % nrOfImages;
            console.log("rotating pictures in slideshow. " + currentImage);
        };


        $('.slideshow img').each(function() {
            $(this)
                .attr('src', $(this).attr('data-src'))
                .css('z-index', currentZIndex++);
        })
        .click(rotateImages);

        intervalId = setInterval(function() { rotateImages(); }, 2000);
    };
    slideshowInit();
});
