
$(document).ready(function() {

    let currentMargin = 0;
    const step = 250;
    const containerWidth = $('.tela-fim').width();
    const totalWidth = $('.mural-fotos')[0].scrollWidth - containerWidth;


    $('.voltar').click(() => {
        if (currentMargin > -totalWidth) {
            currentMargin = Math.max(currentMargin - step, -totalWidth);
            $('.mural-fotos').animate({
                marginLeft: currentMargin
            }, 500);
        }
    });
    $('.ir').click(() => {
        if (currentMargin < 0) {
            currentMargin = Math.min(currentMargin + step, 0);
            $('.mural-fotos').animate({
                marginLeft: currentMargin
            }, 500);
        }
    });
    
});