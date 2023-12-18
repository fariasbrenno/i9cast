<style>
    .borda{
        border-top-right-radius:25px;
        border-top-left-radius:25px;
    }
</style>
    <div class="container-fluid vh-100 img-fundo">
    <!-- LOGO -->
        <div style="height:50vh;" class="row">
            <div class="col-12 d-j-a h-25 mt-4">                
                <div style="width:30%;">
                    <img style="width:100px;height:100px;border-radius:12px;box-shadow: 0 0 8px white;" src="../public/img/logo/<?=$logo?>">              
                </div>
                <div style="width:70%;">     
                    <h4>
                        <marquee class="status cc_streaminfo" data-type="song" data-username="hoostcom"><?=$nome_radio?></marquee>
                    </h4>               
                </div>
            </div> 
            <div id="sumir-baixar-app" style="display: none;" class="w-100 dja">
                <div id="install-button" style="display:none;">
                    <div style="height:50px;border-radius:50px;" class="instalar-App shadow text-center <?=$CorSite?> CorMudar dja m-auto fs-2 scale btn-baixar-app w-75">Baixar app</div>   
                </div>
            </div> 
        </div>
   
        <div style="height:50vh;background-color:rgba(255, 255, 255, 0.5);" class="row borda">
    <!-- BTN PLAY -->
            <div style="position:absolute;top:51%;right:20px;" class="w-100 df justify-content-end text-white z-1">
                <i style="font-size:125px;" class="fa-solid fa-circle-play play"></i>
                <i style="font-size:125px;display:none;" class="fa-solid fa-circle-pause pause"></i>
                <audio id="player"> 
                    <source id="srcP" type="audio/mpeg">
                    <span>Your browser dont support that element.</span>
                </audio>
            </div>
    <!-- BTN VOLUME -->
            <div class="col-4 d-j-a h-25 z-2">         
                <div style="width:35px;height:35px;" class="rounded-circle shadow border mt-auto me-2 d-j-a bg-white btn-botao btn-volume">
                    <i class="fa-solid fa-volume-high"></i>
                </div>     
                <div style="width:35px;height:35px;" class="rounded-circle d-j-a mt-auto">
                    <i class="fa-regular fa-heart gostei_1 fs-3"></i>      
                    <i style="display: none;" class="fa-solid fa-heart gostei_2 fs-3 text-danger"></i>              
                </div>        
            </div>
    <!-- LETREIRO -->
            <div class="w-100 d-j-a">
                <marquee class="status cc_streaminfo letreiro-ajax" data-type="song" data-username="hoostcom"></marquee>
            </div>
    <!-- REDES SOCIAIS -->
        <div class="h-50">            
            <div class="w-100 d-j-a">
                <div style="width:30%;" class="bg-white rounded d-j-a m-1 iconeSocial">
                    <a href="<?=$facebook?>" class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-brands fa-facebook fs-2"></i>
                            <div style="font-size: 10px;">facebook</div>
                        </div>  
                    </a>                  
                </div> 
                <div style="width:30%;" class="bg-white rounded d-j-a m-1 iconeSocial">
                    <a href="https://wa.me/+55<?=$whatsapp?>?text=Gostei+da+sua+web+rádio." class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-brands fa-whatsapp fs-2"></i>
                            <div style="font-size: 10px;">whatsapp</div>
                        </div>  
                    </a>                  
                </div>
                <div style="width:30%;" class="bg-white rounded d-j-a m-1 iconeSocial">
                    <a href="<?=$instagram?>" class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-brands fa-instagram fs-2"></i>
                            <div style="font-size: 10px;">instagram</div>
                        </div>     
                    </a>               
                </div>
            </div>
            <div class="w-100 d-j-a">
                <div style="width:30%;" class="bg-white rounded d-j-a m-1 iconeSocial">
                    <a href="<?=$tiktok?>" class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-brands fa-tiktok fs-2"></i>
                            <div style="font-size: 10px;">tiktok</div>
                        </div>   
                    </a>                 
                </div>
                <div style="width:30%;" class="bg-white rounded d-j-a m-1 iconeSocial">
                    <a href="<?=$youtube?>" class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-brands fa-youtube fs-2"></i>
                            <div style="font-size: 10px;">youtube</div>
                        </div>   
                    </a>                 
                </div>
                <div style="width:30%;" class="bg-white rounded d-j-a m-1 iconeSocial">
                    <a href="../../" class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-solid fa-globe fs-2"></i>
                            <div style="font-size: 10px;">site</div>
                        </div>  
                    </a>                  
                </div>
            </div>
            <div class="w-100 d-j-a mt-2">
                <a href="https://wa.me/+55<?=$whatsapp?>?text=Gostaria+de+fazer+uma+doação, como faço?" class="text-decoration-none text-black w-100 dja" target="_blank">
                    <div style="border-radius:50px" class="w-75 bg-white d-j-a p-2"><i class="fa-solid fa-money-bill-1-wave me-2"></i> fazer uma doação!</div>
                </a>
            </div>
        </div>

        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.gostei_1').click(function(){   
                $(this).hide();
                $('.gostei_2').show();

            });
            $('.gostei_2').click(function(){   
                $(this).hide();
                $('.gostei_1').show();
            });
        });
    </script>