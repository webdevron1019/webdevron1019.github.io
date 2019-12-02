/*eslint-env jquery*/
$(document).ready(function() {
    $('#hamburger-btn').click(function() {
        var dropdown = $('#dropdown');
        if (dropdown.css('display') == 'none') {
            dropdown.css('display', 'flex');
            $('#hamburger-btn').css('justify-content', 'center');
            $('.site-header__hamburger-line').each(function() {
                $(this).addClass('site-header__hamburger-line--collapsed');
            });
        } else {
            dropdown.css('display', 'none');
            $('#hamburger-btn').css('justify-content', 'space-between');
            $('.site-header__hamburger-line').each(function() {
                $(this).removeClass('site-header__hamburger-line--collapsed');
            });
        }
    });
});
