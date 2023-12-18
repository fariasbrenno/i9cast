

$(document).ready(function(){

    $('.iconPlaying').click(function(){
        $(this).hide();
        $('.iconStoped').css('display','block');
        $('.radio').show();      
        $('#radio').text('');  
    });

    $('.iconStoped').click(function(){    
        $(this).css('display','none');
        $('.iconPlaying').show();
        $('.radio').hide();    
        $('#radio').text('Pause!');    
    });

    setInterval(function(){
        $('.iconPlaying, .iconStoped').css('transform','scale(110%)');
    }, 1000);
    setInterval(function(){
        $('.iconPlaying, .iconStoped').css('transform','');
    }, 1100);

});