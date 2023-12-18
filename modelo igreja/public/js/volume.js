

$(document).ready(function(){

    // VOLUME BOTÃO
    let volumeVisible = false;
    $('.btn-volume').click(function(){                
        if (volumeVisible) {
            $('.volume').stop().animate({ left: '-20%' }, 'slow');
            volumeVisible = false;
        } else {
            $('.volume').stop().animate({ left: '15' }, 'slow', function() {
                setTimeout(function() {
                    $('.volume').stop().animate({ left: '-20%' }, 'slow');
                    volumeVisible = false;
                }, 15000);
            });
            volumeVisible = true;
        }
    });
   // VOLUME EFEITO
    const audioElement = document.getElementById('player');
    const customThumb = $('#customThumb');
    const customSlider = $('#customSlider');
    let isDragging = false;

    customThumb.on('mousedown touchstart', function(event) {
        isDragging = true;
        event.preventDefault();
    });

    $(document).on('mouseup touchend', function() {
        isDragging = false;
    });

    $(document).on('mousemove touchmove', function(event) {
        if (isDragging) {
            const positionY = event.clientY ? event.clientY : event.originalEvent.touches[0].clientY;
            const sliderOffset = customSlider.offset().top;
            const positionRelativeToSlider = positionY - sliderOffset;
            const sliderHeight = customSlider.height();
            let fillHeight = sliderHeight - positionRelativeToSlider;

            if (fillHeight < sliderHeight * 0.05) {
                fillHeight = sliderHeight * 0.05;
            }

            if (fillHeight > sliderHeight) {
                fillHeight = sliderHeight;
            }

            const clampedValue = (fillHeight / sliderHeight) * 100;
            customThumb.css('height', `${clampedValue}%`);
            customThumb.css('bottom', '0');

            const volume = clampedValue / 100;
            audioElement.volume = volume;

            if (volume === 0.05) {
                $('.vol').html('<i class="fa-solid fa-volume-xmark"></i>');
                $('#customThumb').css('background-color', '#FF0000');
            } else if (volume > 0.05 && volume < 0.5) {
                $('.vol').html('<i class="fa-solid fa-volume-low"></i>');
                $('#customThumb').css('background-color', '#fff');
            } else {
                $('.vol').html('<i class="fa-solid fa-volume-high"></i>');
            }

            if (volume > 0.97) {
                $('#customThumb').css({
                    'border-top-left-radius': '30px',
                    'border-top-right-radius': '30px',
                });
            } else {
                $('#customThumb').css({
                    'border-top-left-radius': '0',
                    'border-top-right-radius': '0',
                });
            }
        }
    });

    // Botão para silenciar o áudio
    $('.btn-mudo').click(function() {
        if (audioElement.volume === 0) {
            // Se o volume já estiver mudo, retorne ao volume anterior
            audioElement.volume = 0.5;
            $('.btn-mudo').removeClass('bg-danger text-white'); 
            $(this).addClass('bg-white');
        } else {
            // Se o volume não estiver mudo, silencie
            audioElement.volume = 0;
            $('.btn-mudo').removeClass('bg-white');     
            $(this).addClass('bg-danger text-white');
        }
    });


});