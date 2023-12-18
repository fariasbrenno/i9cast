
$(document).ready(function(){

  
    $('.play').click(function(){
        $(this).css('transform','scale(90%)'); 
        setTimeout(function(){
            $('.play').css('display','none');
            $('.pause').css('display','block');
        }, 200)                                
    });
    $('.pause').click(function(){
        $(this).css('transform','scale(90%)');
        setTimeout(function(){
            $('.pause').css('display','none');
            $('.play').css('display','block');
        }, 200)
    });
    $('.btn-hover').click(function(){
        $(this).css('background-color','#00000025');                
    });
    $('.iconeSocial').click(function(){
        $(this).css('transform','scale(104%)');     
        $('.iconeSocial').removeClass('bg-dark-subtle');     
        $(this).addClass('bg-dark-subtle'); 
    });
    $('.btn-botao').click(function(){
        $(this).css('transform','scale(90%)');                
    });
    setInterval(function(){
        $('.btn-hover').css('background-color','')
        $('.btn-botao, .iconeSocial').css('transform','');
        $('.iconeSocial').removeClass('bg-dark-subtle');
    }, 400);
    $('#menu').click(function(){
        $('#fixed-bottom').removeClass('fixed-bottom');
        $('#fixed-bottom').css('position','absolute')
        $('#fixed-bottom').animate({ bottom: '50%' }, 'easeInCirc');
        $(this).css('display','none');
        $('.close').css('display','block');
    });
    $('.close').click(function(){
        $('#fixed-bottom').css('position', 'fixed');
        $('#fixed-bottom').css('bottom', '0');
        $(this).css('display','none');
        $('#menu').css('display','block');
    });
    $('.like-up').click(function() {
        $('.like-down').hide();
        $(this).html('<i class="fa-solid fa-thumbs-up"></i>').css({
            'width':'0',
            'height':'0'
        }).animate({
            'width':'100px',
            'height':'100px',
            'font-size':'45px',
        }).toggleClass('rotate-icon').addClass('bg-success-subtle text-success');;
        $('.texto-like').text('Estou gostando!');
        setTimeout(() => {
            $('.texto-like').hide();
            $('.teste').removeClass('fixed-bottom');
            $(this).css({
                'position':'absolute',
                'top':'5%',    
                'right':'10px',                    
            }).animate({
                'width':'40px',
                'height':'40px',
                'font-size':'18px'
            })
        }, 1500);
    });   
    $('.like-down').click(function() {
        $('.like-up').hide();
        $(this).html('<i class="fa-solid fa-thumbs-down"></i>').css({
            'width':'0',
            'height':'0'
        }).animate({
            'width':'100px',
            'height':'100px',
            'font-size':'45px'
        }).toggleClass('rotate-icon').addClass('bg-danger-subtle text-danger');
        $('.texto-like').text('Não gostei!');
        setTimeout(() => {
            $('.texto-like').hide();
            $('.teste').removeClass('fixed-bottom');
            $(this).css({
                'position':'absolute',
                'top':'5%',    
                'right':'10px',                    
            }).animate({
                'width':'40px',
                'height':'40px',
                'font-size':'18px'
            })
        }, 1500);
    });      
    


});
