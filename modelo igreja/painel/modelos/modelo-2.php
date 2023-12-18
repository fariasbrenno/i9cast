<style>
    .borda{
        border-top-right-radius:25px;
        border-top-left-radius:25px;
        border-bottom-right-radius:10px;
        border-bottom-left-radius:6px;
    }
    .fundo_app{
        background-image: url('../public/img/fundo/<?=$fundo_app?>');
        background-position: center;
        background-size: cover;
    }
    .play_m2{
        right:20%;
        top:40%;
    }
    @media screen and (max-width: 768px) {
        .play_m2{
            right:25%;
            top:75%;
        }
    }
</style>
<?php 
    include('../estrutura/menu.php');
    include('../estrutura/menu-cores.php');
?>
<div style="margin-top:50px;" class="container-fluid img-fundo">
    <div class="row">
        <div class="col-lg-6 dja vh-100">
            <div class="text-white text-center">
                <h1>A Rádio tem PODER!</h1>
                <h3>Baixe nosso aplicativo aqui!</h3>
                <div id="sumir-baixar-app" style="display: block;" class="dja w-100">
                    <div id="install-button" style="height:45px;border-radius:50px;display:block;" class="w-100 shadow text-center <?=$CorSite?> CorMudar dja fs-2 scale btn-baixar-app">
                    Baixar app
                    </div>
                </div> 
                <div class="w-100 dja mt-3">
                    <a href="<?=$facebook?>" class="text-decoration-none text-white" target="_blank">
                        <i class="fa-brands fa-facebook fs-2 m-2 scale"></i>
                    </a>
                    <a href="<?=$instagram?>" class="text-decoration-none text-white" target="_blank">
                        <i class="fa-brands fa-instagram fs-2 m-2 scale"></i>
                    </a>
                    <a href="<?=$tiktok?>" class="text-decoration-none text-white" target="_blank">
                        <i class="fa-brands fa-tiktok fs-2 m-2 scale"></i>
                    </a>
                    <a href="<?=$twitter?>" class="text-decoration-none text-white" target="_blank">
                        <i class="fa-brands fa-twitter fs-2 m-2 scale"></i>
                    </a>
                    <a href="mailto:<?=$email?>" class="text-decoration-none text-white" target="_blank">
                        <i class="fa-regular fa-envelope fs-2 m-2 scale"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=55<?=$whatsapp?>" class="text-decoration-none text-white" target="_blank">
                        <i class="fa-brands fa-whatsapp fs-2 m-2 scale"></i>
                    </a>
                    <a href="tel:<?=$telefone?>" class="text-decoration-none text-white" target="_blank">
                        <i class="fa-solid fa-phone-volume fs-2 m-2 scale"></i>
                    </a>
                    <a href="<?=$youtube?>" class="text-decoration-none text-white" target="_blank">
                        <i class="fa-brands fa-youtube fs-2 m-2 scale"></i>
                    </a>
                </div>               
            </div>
        </div> 
                <div style="position: absolute;width:200px;height:200px;background-color:rgba(000, 000, 000, 0.3);" class="rounded play_m2">
                    <h5 class="text-center text-white p-3 texto-radio">Ligar Rádio</h5>
                    <div class="w-100 dja">
                        <div style="width:95px;height:95px;" class="dja rounded-circle <?=$CorSite?> CorMudar shadow scale">
                            <i style="font-size:40px;" class="fa-solid fa-play play"></i>
                            <i style="display: none;font-size:40px;" class="fa-solid fa-pause pause"></i>
                        </div>
                    </div> 
                    <audio id="player"> 
                        <source id="srcP" type="audio/mpeg">
                        <span>Your browser dont support that element.</span>
                    </audio>
                    <marquee class="status cc_streaminfo p-2 text-white letreiro-ajax" data-type="song" data-username="hoostcom"></marquee> 
                </div>              
    </div>
</div>