jQuery(document).ready(function($) {
    $('#mobile_burger').click(function () {
        $('body').css('overflow', 'hidden');
        $('.top_menu').addClass('mask');
    });

    $('.top_menu').click(function () {
        $('.top_menu').removeClass('mask');
        $('body').css('overflow', 'auto');
    });
});