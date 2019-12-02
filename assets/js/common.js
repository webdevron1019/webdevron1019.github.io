/* eslint-disable no-console */
/*eslint-env jquery*/
$(document).ready(function() {
    var prevVW = $(window).width();
    $(window).resize(function() {
        if ($(window).width() > 768 && prevVW < 769) {
            console.log('enlarge');
            $('#dropdown').css('display', 'flex');
            prevVW = $(window).width();
        } else if ($(window).width() < 769 && prevVW > 768) {
            console.log('shrink');
            $('#dropdown').css('display', 'none');
            $('#hamburger-btn').css('justify-content', 'space-between');
            $('.site-header__hamburger-line').each(function() {
                $(this).removeClass('site-header__hamburger-line--collapsed');
            });
            prevVW = $(window).width();
        }
    });

    $('#search-by-region, #search-by-brand').click(function() {
        if (!$(this).hasClass('search__tab-btn--active')) {
            $(this).addClass('search__tab-btn--active');
            $('.search__tab-btn')
                .not(this)
                .removeClass('search__tab-btn--active');
        }
        if ($(this).prop('id') != 'search-by-region') {
            $('.search__region-list').css('display', 'none');
        } else {
            $('.search__region-list').css('display', 'flex');
        }
    });

    $('.search__region-btn').click(function() {
        if (!$(this).hasClass('search__region-btn--active')) {
            $(this).addClass('search__region-btn--active');
            $('.search__region-btn')
                .not(this)
                .removeClass('search__region-btn--active');
        }
    });
});
