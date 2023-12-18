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
            top:15%;
        }
    }
</style>

<!-- OFFCANVA MENU -->
    <div style="margin-top:70px;height:22%;" class="offcanvas offcanvas-top z-1" 
        data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" 
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-body">
    <?php if ($temaAtivo === 'tema 1'): ?>
            <div class="df">
                <ul class="w-50">
                    <li class="scale" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><a class="text-decoration-none text-black" href="#container1">Versiculo</a></li>
                    <li class="scale" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><a class="text-decoration-none text-black" href="#container2">Fotos</a></li>                    
                </ul>
                <ul class="w-50">
                    <li class="scale" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><a class="text-decoration-none text-black" href="#container3">Doação</a></li>
                    <li class="scale" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><a class="text-decoration-none text-black" href="#container5">Contatos</a></li>
                </ul>
            </div>    
    <?php endif; ?>
                <a href="painel" class="text-decoration-none w-100 dja">
                    <button class="btn border shadow <?=$CorSite?> CorMudar w-50">Entrar</button>
                </a>     
        </div>
    </div>

<!-- MENU -->
    <div class="container-fluid fixed-top border-bottom <?=$CorSite?> CorMudar mobile">
    <!-- MENU MOBILE -->
        <div class="row">
            <div class="col-12 dja">
                <div style="width:45px;height:45px;" 
                class="rounded-circle shadow border dja fs-3"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <marquee class="status cc_streaminfo w-50" data-type="song" data-username="hoostcom"><?=$nome_radio?></marquee>
                <img width="75" height="75" class="rounded ms-auto" src="../public/img/logo/<?=$logo?>">
            </div>
        </div>
    </div>

<!-- MENU DESKTOP -->
    <div class="container-fluid fixed-top border-bottom <?=$CorSite?> CorMudar desktop">
        <div class="row row-menu">
            <div class="col-lg-2 dja">
                <img width="100" height="100" class="rounded m-2" src="../public/img/logo/<?=$logo?>">
            </div>
            <div class="col-lg-3 p-2 fs-5">
                <marquee class="status cc_streaminfo" data-type="song" data-username="hoostcom"><?=$nome_radio?></marquee>
            </div>
            <div class="col-lg-5 df justify-content-end p-2">
    <?php if ($temaAtivo === 'tema 1'): ?>
                <div class="m-2 fs-6 scale"><a class="text-decoration-none <?=$CorSite?> CorMudar" href="#container1">Versiculo</a></div>
                <div class="m-2 fs-6 scale"><a class="text-decoration-none <?=$CorSite?> CorMudar" href="#container2">Fotos</a></div>
                <div class="m-2 fs-6 scale"><a class="text-decoration-none <?=$CorSite?> CorMudar" href="#container3">Doação</a></div>
                <div class="m-2 fs-6 scale"><a class="text-decoration-none <?=$CorSite?> CorMudar" href="#container5">Contatos</a></div>
    <?php endif; ?>
            </div>
            <div class="col-lg-2 p-2">
                <a href="painel" class="text-decoration-none">
                    <div style="height:35px;" class="border rounded dja shadow <?=$CorSite?> CorMudar w-50 ms-5 scale">Entrar</div>
                </a>
            </div>
        </div>
    </div>
<!-- SITE -->
    <div style="margin-top:50px;" class="container-fluid img-fundo">
        <div class="row">
            <div class="col-lg-6 dja vh-100">
                <div class="text-white text-center">
                    <h1>A Rádio tem PODER!</h1>
                    <h3>Baixe nosso aplicativo aqui!</h3>
                    <div id="sumir-baixar-app" style="display: none;" class="dja w-100">
                        <div id="install-button" style="height:45px;border-radius:50px;display:none;" class="instalar-app w-100 shadow text-center <?=$CorSite?> CorMudar dja fs-2 scale btn-baixar-app">
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