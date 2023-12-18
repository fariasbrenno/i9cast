<?php

include('../models/conexao.php');
include('../config/config.php');


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$nome?></title>
<link rel="manifest" href="manifest.json">
<link rel="stylesheet" href="../lib/rotacss.php"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script type="text/javascript" src="../lib/rotajs.php"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.0/html2canvas.min.js"></script>

<script>
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
                    // Detecta eventos de toque (touch events)
                    const touch = event.originalEvent.touches[0] || event.originalEvent.changedTouches[0];
                    const positionY = touch.clientY - customSlider.offset().top;
                    const sliderHeight = customSlider.height();
                    let fillHeight = sliderHeight - positionY;
                    // Garante que o valor não fica abaixo de 3%
                    if (fillHeight < sliderHeight * 0.05) {
                        fillHeight = sliderHeight * 0.05;
                    }
                    // Garante que o valor não ultrapassa 100%
                    if (fillHeight > sliderHeight) {
                        fillHeight = sliderHeight;
                    }
                    const clampedValue = (fillHeight / sliderHeight) * 100;
                    customThumb.css('height', `${clampedValue}%`);
                    customThumb.css('bottom', '0');
                    // Ajuste do volume com base no valor clampedValue
                    const volume = clampedValue / 100; // Normaliza o valor entre 0 e 1
                    audioElement.volume = volume;

                    if (volume === 0.05) {      
                        $('.vol').html('<i class="fa-solid fa-volume-xmark"></i>');   
                        $('#customThumb').css('background-color','#FF0000')                   
                    } else if (volume > 0.05 && volume < 0.5) {
                        $('.vol').html('<i class="fa-solid fa-volume-low"></i>');
                        $('#customThumb').css('background-color','#fff')
                    } else {
                        $('.vol').html('<i class="fa-solid fa-volume-high"></i>');
                    };

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

            $(function() {                
        
                isPlaying = false; 
                player = document.getElementById("player");

                $('.play').click(function() { 
                    if(!isPlaying) { 
                        player.currentTime = 0; 
                        document.getElementById("srcP").src = "https://player.ipstm.net/ssl.php?ip=<?=$dadosXML->ip?>&port=<?=$dadosXML->porta?>&mount=/;";  
                        player.load(); 
                        player.play(); 
                        isPlaying = true; 
                    }                    
                }); 
                $('.pause').click(function() { 
                    player.pause(); 
                    document.getElementById("srcP").src = ""; 
                    player.currentTime = 0;	
                    isPlaying = false;                     
                });      

            }); 
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
                $('.btn-botao').css('transform','');
                $('.iconeSocial').css('transform','');
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
            
        });
</script>

<style>
    .d-j-a{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .df{
        display: flex;
    } 
    .img-fundo{
        background-image: url('fundo.png');
        background-size: cover;
    }  
    .iconeSocial{
        height: 50px;
    }
    /* MODELO OFICAL - VOLUME CSS */
    .volume{
        position: absolute;
        top:20%;
        left:-20%;
    }
    .vol{
        position: absolute;
        bottom:2px;
    }
    #customSlider{
        width:36px;
        height:300px;
        position:relative;
        border-top-left-radius: 30px;
        border-top-right-radius:30px;
        border-bottom-left-radius: 30px;
        border-bottom-right-radius:30px;
        background-color: #ffffff60;
        box-shadow: 0 0 1px white;
    }
    #customThumb{
        width:36px;
        height:25%;
        position:absolute;
        bottom:0px;
        /*border-top-left-radius: 30px;
        border-top-right-radius:30px;*/
        border-bottom-left-radius: 30px;
        border-bottom-right-radius:30px;
        background-color: #fff;
    }
    @media (max-width: 768px) {

    }
</style>
</head>
<body>

<!-- MODELO OFICAL - VOLUME -->
    <div class="volume z-3">
        <div class="m-2 z-3 vol"><i class="fa-solid fa-volume-low"></i></div> 
        <div id="customSlider">
            <div id="customThumb"></div>
        </div> 
    </div>

<!-- APLICATIVO WEB -->
    <div style="height:100vh;" class="container-fluid img-fundo">
        <div class="row d-j-a p-3">
            <div class="col-8 text-white">
                <marquee class="status cc_streaminfo" data-type="song" data-username="hoostcom"><?php echo $dadosXML->musica_atual; ?> <i class="fa-solid fa-music fs-3 ms-2"></i></marquee>
            </div>
        <?php if($dadosXML->status == 'Ligado'): ?>
            <div class="col-2 d-j-a bg-danger rounded text-white p-1 fw-bold">ON!</div>  
        <?php else:?>    
            <div class="col-2 d-j-a bg-black rounded text-white p-1">OFF!</div>    
        <?php endif; ?>    
        </div>
        <div class="row">
            <div class="col-lg-12 d-j-a">
                <img style="width:250px;height:250px;border-radius:45px;box-shadow:0 0 8px white;"src="../public/img/logo/<?=$logo?>">              
            </div>            
        </div>   
        <div id="sumir-baixar-app" style="display: none;" class="col-lg-3 m-auto p-3">
            <div class="d-j-a w-100">
                <button id="install-button" style="border-radius: 30px;display: none;" class="btn btn-warning w-100 fs-3">Baixar App <i class="fa-solid fa-download fs-5"></i></button>
            </div>
        </div>     
    </div>

<!-- PLAY -->
    <div id="fixed-bottom" class="container-fluid fixed-bottom mb-4">
        <div class="row d-j-a">
            <div style="border-radius:60px;height:75px;" class="col-lg-4 col-10 bg-secondary-subtle d-j-a">
                <div style="width:35px;height:35px;" class="rounded-circle d-j-a me-3 btn-hover">
                    <i id="menu" class="fa-solid fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></i>
                    <i style="display:none;" class="fa-solid fa-xmark close" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></i>
                </div>           
                <div style="width:35px;height:35px;" class="rounded-circle shadow border d-j-a bg-white btn-botao btn-volume">
                    <i class="fa-solid fa-volume-high"></i>
                </div>                

                    <i style="font-size:70px;" class="fa-solid fa-circle-play play ms-3 me-3"></i>
                    <i style="font-size:70px;display:none;" class="fa-solid fa-circle-pause pause ms-3 me-3"></i>
                    <audio id="player"> 
                        <source id="srcP" type="audio/mpeg">
                        <span>Your browser dont support that element.</span>
                    </audio>

                <div style="width:35px;height:35px;" class="rounded-circle shadow border d-j-a bg-white btn-botao btn-mudo">
                    <i class="fa-solid fa-volume-xmark"></i>
                </div> 
                <a href="https://wa.me/+55<?=$whatsapp?>?text=Ou%C3%A7a%20esta%20web%20r%C3%A1dio%20https://<?=urlencode($site)?>" class="text-decoration-none text-black" target="_blank">
                    <div style="width:35px;height:35px;" class="rounded-circle d-j-a ms-3 btn-hover">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>     
                </a>           
            </div>
        </div>
    </div>

<!-- OFFCANVA MENU -->
    <div style="border-top-left-radius: 10px;border-top-right-radius: 10px;" class="offcanvas offcanvas-bottom h-50 z-1" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header d-j-a">
            <img width="40" height="40" class="rounded-circle" src="../public/img/logo/<?=$logo?>">
            <h5 class="offcanvas-title ms-3" id="offcanvasScrollingLabel"><?=$nome_radio?></h5>                                  
        </div>
        <div class="offcanvas-body">
            <div class="row d-j-a">            
                <div class="col-3 border rounded d-j-a m-1 bg-secondary-subtle iconeSocial">
                    <a href="<?=$facebook?>" class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-brands fa-facebook fs-2"></i>
                            <div style="font-size: 10px;">facebook</div>
                        </div>  
                    </a>                  
                </div>            
                <div class="col-3 border rounded d-j-a m-1 bg-secondary-subtle iconeSocial">
                    <a href="https://wa.me/+55<?=$whatsapp?>" class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-brands fa-whatsapp fs-2"></i>
                            <div style="font-size: 10px;">whatsapp</div>
                        </div>  
                    </a>                  
                </div>
                <div class="col-3 border rounded d-j-a m-1 bg-secondary-subtle iconeSocial">
                    <a href="<?=$instagram?>" class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-brands fa-instagram fs-2"></i>
                            <div style="font-size: 10px;">instagram</div>
                        </div>     
                    </a>               
                </div>
            </div>
            <div class="row d-j-a">
                <div class="col-3 border rounded d-j-a m-1 bg-secondary-subtle iconeSocial">
                    <a href="<?=$tiktok?>" class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-brands fa-tiktok fs-2"></i>
                            <div style="font-size: 10px;">tiktok</div>
                        </div>   
                    </a>                 
                </div>
                <div class="col-3 border rounded d-j-a m-1 bg-secondary-subtle iconeSocial">
                    <a href="<?=$youtube?>" class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-brands fa-youtube fs-2"></i>
                            <div style="font-size: 10px;">youtube</div>
                        </div>   
                    </a>                 
                </div>
                <div class="col-3 border rounded d-j-a m-1 bg-secondary-subtle iconeSocial">
                    <a href="https://<?=$site?>" class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-solid fa-globe fs-2"></i>
                            <div style="font-size: 10px;">site</div>
                        </div>  
                    </a>                  
                </div>
            </div>
            <!--
            <div class="row d-j-a fixed-bottom p-3">
                <input style="height:50px;border-radius:30px;" type="text" class="col-9 border-0 d-j-a p-1 m-1 text-center bg-secondary-subtle iconeSocial" placeholder="enviar mensagem!">
                <div style="width:50px;height:50px;" class="border rounded-circle d-j-a fs-3 p-1 m-1 bg-secondary-subtle iconeSocial"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
        -->
        </div>
    </div>

</body>
</html>

