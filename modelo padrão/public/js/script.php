
<script>   

    var DirDominio = "<?php echo $_SERVER['HTTP_HOST']; ?>";

    function substituirImagemErro1(element) {
        // Função para substituir a imagem que deu erro por outra imagem
        element.src = 'https://'+DirDominio+'/public/img/imagens_secundarias/anuncie1.png';
    }

    function substituirImagemErro2(element) {
        // Função para substituir a imagem que deu erro por outra imagem
        element.src = 'https://'+DirDominio+'/public/img/imagens_secundarias/anuncie2.png';
    }

    function substituirImagemErro3(element) {
        // Função para substituir a imagem que deu erro por outra imagem
        element.src = 'https://'+DirDominio+'/public/img/imagens_secundarias/anuncie3.png';
    }

    function substituirImagemErro4(element) {
        // Função para substituir a imagem que deu erro por outra imagem
        element.src = 'https://'+DirDominio+'/public/img/imagens_secundarias/anuncie4.png';
    }

    function substituirBannerErro1(element) {
        // Função para substituir a imagem que deu erro por outra imagem
        element.src = 'https://'+DirDominio+'/public/img/imagens_secundarias/banner1.png';
    }
    function substituirBannerErro2(element) {
        // Função para substituir a imagem que deu erro por outra imagem
        element.src = 'https://'+DirDominio+'/public/img/imagens_secundarias/banner2.png';
    }
    function substituirBannerErro3(element) {
        // Função para substituir a imagem que deu erro por outra imagem
        element.src = 'https://'+DirDominio+'/public/img/imagens_secundarias/banner3.png';
    }
    function substituirBanner(element) {
        // Função para substituir a imagem que deu erro por outra imagem
        element.src = 'https://'+DirDominio+'/public/img/imagens_secundarias/banner.gif';
    }

$(document).ready(function(){
    $("#corVermelho").click(function(){
        $('.CorMudar').removeClass("<?=$corFundo?>");
        $('.CorMudar').css('background','red')
    });
    $("#corVerde").click(function(){
        $('.CorMudar').removeClass("<?=$corFundo?>");
        $('.CorMudar').css('background','green')
    });
    $("#corRoxo").click(function(){
        $('.CorMudar').removeClass("<?=$corFundo?>");
        $('.CorMudar').css('background','purple')
    });
    $("#corAzul").click(function(){
        $('.CorMudar').removeClass("<?=$corFundo?>");
        $('.CorMudar').css('background','blue')
    });
   $("#corPreto").click(function(){
        $('.CorMudar').removeClass("<?=$corFundo?>");
        $('.CorMudar').css('background','black')
    });
    $("#corLilas").click(function(){
        $('.CorMudar').removeClass("<?=$corFundo?>");
        $('.CorMudar').css('background','#4c1a3f')
    });
    $("#corLaranja").click(function(){
        $('.CorMudar').removeClass("<?=$corFundo?>");
        $('.CorMudar').css('background','orangered')
    });
    $("#corRosa").click(function(){
        $('.CorMudar').removeClass("<?=$corFundo?>");
        $('.CorMudar').css('background','#ff0072')
    });
    $("#corCinza").click(function(){
        $('.CorMudar').removeClass("<?=$corFundo?>");
        $('.CorMudar').css('background','gray')
    });
    $("#corAmarelo").click(function(){
        $('.CorMudar').removeClass("<?=$corFundo?>");
        $('.CorMudar').css('background','yellow')
    });


    $(function() {
        
        isPlaying = false; 
        player = document.getElementById("player");

        $('.iconPlaying').click(function() { 
        if(!isPlaying) { 
            player.currentTime = 0; 
            document.getElementById("srcP").src = "https://player.ipstm.net/ssl.php?ip=<?=$ip?>&port=<?=$porta?>&mount=/;";  
            player.load(); 
            player.play(); 
            isPlaying = true; 
        }

        }); 
        $('.iconStoped').click(function() { 
            player.pause(); 
            document.getElementById("srcP").src = ""; 
            player.currentTime = 0;	
            isPlaying = false; 
        });      

    }); 


});

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
</script>