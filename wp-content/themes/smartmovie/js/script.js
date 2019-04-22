jQuery(document).ready(function($) {

    function toggle_script(){
        if ($(body).hasClass('noscript')){
            $
        }
    }

    $('#mobile_burger').click(function () {
        $('body').toggleClass('noscroll');
        $('.top_menu').addClass('mask');
    });

    $('.top_menu').click(function () {
        $('.top_menu').removeClass('mask');
        $('body').removeClass('noscroll');
    });

    $('.example').click(function () {
        $('.popup-wrapper').addClass('visible');
        $('body').toggleClass('noscroll');
        $('#iframe').attr('height', $( window ).height()*0.8).attr('src', 'https://www.youtube.com/embed/' + $(this).attr('data-id'));
        // $('#iframe')[0].contentWindow.postMessage('{"event":"command","func":"' + 'startVideo' + '","args":""}', '*');
        $("#iframe")[0].src += "?autoplay=1";
    });
    $('.popup, #order').click(function () {
        $('.popup-wrapper').toggleClass('visible');
        $('body').toggleClass('noscroll');
        // $('#iframe')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
        $("#iframe")[0].src += "?autoplay=0";
    });

    // $('.video_popoup').click(function(e) {
    //     if ($(window).width() >= 590){
    //         $('body').css('overflow', 'hidden');
    //         $('.popup_wrapper.video').css('display', 'flex');
    //         $('.popup_wrapper.video iframe').attr('src', 'https://www.youtube.com/embed/' + $(this).attr('data-id'));
    //     }
    // });

});