
$(document).ready(function(){


    $("#mudarTema1").click(function(){
        $('.tema_01').css('display','block')
        $('.tema_02').css('display','none')
        $('.tema_03').css('display','none')

        $('.ligarRadio').css('display','none')
        $('.oucaAgora').css('display','none')
    });
    $("#mudarTema2").click(function(){
        $('.tema_02').css('display','block')
        $('.tema_01').css('display','none')
        $('.tema_03').css('display','none')

        $('#menuTema03').css('display','none')
        $('#menu').css('display','block')
        $('.oucaAgora').css('display','block')
        $('.ligarRadio').css('display','none')
    });
    $("#mudarTema3").click(function(){
        $('.tema_03').css('display','block')
        $('.tema_01').css('display','none')
        $('.tema_02').css('display','none')

        $('#menuTema03').css('display','block')
        $('#menu').css('display','none')
        $('.ligarRadio').css('display','block')
        $('.oucaAgora').css('display','none')
    });

    
});