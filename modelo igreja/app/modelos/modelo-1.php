

<!-- APLICATIVO WEB -->
    <div style="height:100vh;" class="container-fluid img-fundo">
        <div class="row d-j-a p-3">
            <div class="col-8 text-white">
                <marquee class="status cc_streaminfo letreiro-ajax" data-type="song" data-username="hoostcom"></marquee>
            </div>
            <!--
        <?php if($dadosXML->status == 'Ligado'): ?>
            <div class="col-2 d-j-a bg-danger rounded text-white p-1 fw-bold">ON!</div>  
        <?php else:?>    
            <div class="col-2 d-j-a bg-black rounded text-white p-1">OFF!</div>    
        <?php endif; ?>   
        --> 
        </div>
        <div class="row">
            <div class="col-lg-12 d-j-a">
                <img style="width:250px;height:250px;border-radius:45px;box-shadow:0 0 8px white;" src="../public/img/logo/<?=$logo?>">              
            </div>     
            <div id="sumir-baixar-app" style="display: none;" class="w-100 dja mt-3">
                <div id="install-button" style="display:none;">
                    <div style="height:50px;border-radius:50px;" class="instalar-App shadow text-center <?=$CorSite?> CorMudar dja m-auto fs-2 scale btn-baixar-app w-75">Baixar app</div>   
                </div>
            </div>        
        </div>       
    </div>

<!-- PLAY -->
    <div id="fixed-bottom" class="container-fluid fixed-bottom mb-4">
        <div class="row d-j-a">
            <div style="border-radius:60px;height:75px;" class="col-lg-4 col-10 bg-secondary-subtle d-j-a">
                <div style="width:35px;height:35px;" class="rounded-circle d-j-a me-3 btn-hover border border-secondary">
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
                    <div style="width:35px;height:35px;" class="rounded-circle d-j-a ms-3 btn-hover border border-secondary">
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
                    <a href="../../" class="text-decoration-none text-black" target="_blank">
                        <div class="text-center">
                            <i class="fa-solid fa-globe fs-2"></i>
                            <div style="font-size: 10px;">site</div>
                        </div>  
                    </a>                  
                </div>
            </div>
            <div class="row fixed-bottom teste">
                <h5 class="text-center texto-like">Está gostando?</h5>
                <div class="d-j-a">
                    <div style="width:65px;height:65px;font-size:30px;" class="rounded-circle border d-j-a m-2 like-up">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </div>
                    <div style="width:65px;height:65px;font-size:30px;" class="rounded-circle border d-j-a  m-2 like-down">
                        <i class="fa-regular fa-thumbs-down"></i>
                    </div>
                </div>               
            </div>
        </div>
    </div>
