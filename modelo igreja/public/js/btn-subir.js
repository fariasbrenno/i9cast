
$(document).ready(function () {

    $('.btn-subir').hide();
    
    $(window).scroll(function () {
        var scrollPosition = $(window).scrollTop();
        if (scrollPosition >= 500) {
            $('.btn-subir').show()
        } else {
            $('.btn-subir').hide();
        }
    });

    $('.btn-subir').click(() => {
        $("html, body").animate({ scrollTop: 0 }, 500);
    });

});