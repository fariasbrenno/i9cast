
<!-- PUBLICIDADE / LOGO - TEMA 01--> 
    <div class="container m-top-logo">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col-lg-6 col-12 d-j-a text-primary">
                <div style="width:250px;height:45px;" 
                    class="rounded border d-j-a bg-primary-subtle PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#atualizar_logo">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-2"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>    
            </div>
            <div class="col-lg-6 col-12 d-j-a">     
                <div id="corVermelho"
                    class="CorFundo corHover rounded-circle shadow-lg border bg-danger bg-gradient m-1"
                    data-bs-title="Vermelho!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </div>
                <div id="corVerde" 
                    class="CorFundo corHover rounded-circle shadow-lg border bg-success bg-gradient m-1"
                    data-bs-title="Verde!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </div>
                <div id="corRoxo" 
                    class="CorFundo corHover rounded-circle shadow-lg border bg-roxo bg-gradient m-1"
                    data-bs-title="Roxo!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </div>
                <div id="corAzul" 
                    class="CorFundo corHover rounded-circle shadow-lg border bg-primary bg-gradient m-1"
                    data-bs-title="Azul!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </div>
                <div id="corPreto" 
                    class="CorFundo corHover rounded-circle shadow-lg border bg-black bg-gradient m-1"
                    data-bs-title="Preto!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </div>
                <div id="corLilas" 
                    class="CorFundo corHover rounded-circle shadow-lg border bg-lilas bg-gradient m-1"
                    data-bs-title="Lilas!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </div>
                <div id="corLaranja" 
                    class="CorFundo corHover rounded-circle shadow-lg border bg-laranja bg-gradient m-1"
                    data-bs-title="Laranja!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </div>
                <div id="corRosa" 
                    class="CorFundo corHover rounded-circle shadow-lg border bg-rosa bg-gradient m-1"
                    data-bs-title="Rosa!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </div>
                <div id="corCinza" 
                    class="CorFundo corHover rounded-circle shadow-lg border bg-secondary bg-gradient m-1"
                    data-bs-title="Cinza!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </div>
                <div id="corAmarelo" 
                    class="CorFundo corHover rounded-circle shadow-lg border bg-warning bg-gradient m-1"
                    data-bs-title="Amarelo!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-2 tema_01">  
        <div class="row row-cols-1 row-cols-md-2 d-j-a">
            <div class="col-lg-3 col-10 d-j-a">
                <div class="w-75">
                    <div style="height: 150px;" class="w-100 mt-2">
                        <img src="../../../public/img/logo/<?=$logo?>" class="d-block w-100 h-100 shadow-lg border rounded">
                    </div>
                    <div style="height:20px;" class="w-100 mt-2 d-j-a">
                        <i class="fa-solid fa-mobile me-2 fs-5"></i> 
                        <h6 class="mt-auto">Baixe nosso Aplicativo</h6>                         
                    </div>                    
                    <div style="height:80px;" class="AppHover mt-1"
                        data-bs-title="Biaxe nosso Aplicativo"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                        <div id="carouselExampleSlidesOnly" class="carousel slide w-100" data-bs-ride="carousel">
                            <div class="carousel-inner">
                <?php if ($link_google_play == ''): ?>
                            <a href="../app/<?=$link_aplicativo?>.apk">
                                <div class="carousel-item active">  
                                    <img width="100%" src="../../../public/img/baixarapp/apkandroid.png">                                         
                                </div>
                            </a>
                    <?php else: ?>
                            <a href="<?=$link_google_play?>"  target="_blank">
                                <div class="carousel-item active">
                                    <img class="rounded" width="100%" src="../../../public/img/baixarapp/baixarApp.png">
                                </div>
                            </a>
                        <?php endif; ?>
                            </div>
                        </div>                             
                    </div>             
                </div>
            </div>
            <div style="height:250px;" class="col-lg-7 d-j-a mt-2">            
                <div id="carouselExampleSlidesOnly" class="carousel slide w-100" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <a href="<?=$img_link[1]['link']?>" target="_blank">
                            <div style="height:250px;" class="carousel-item active fotoHover">
                                <img src="../../../public/img/slide_logo/<?=$img[1]['img']?>" class="d-block w-100 h-100 rounded" onerror="substituirBannerErro3(this)">                           
                            </div>
                        </a>
                        <a href="<?=$img_link[2]['link']?>" target="_blank">
                            <div style="height:250px;" class="carousel-item fotoHover">
                                <img src="../../../public/img/slide_logo/<?=$img[2]['img']?>" class="d-block w-100 h-100 rounded" onerror="substituirBannerErro2(this)">
                            </div>
                        </a>
                        <a href="<?=$img_link[3]['link']?>" target="_blank">
                            <div style="height:250px;" class="carousel-item fotoHover">
                                <img src="../../../public/img/slide_logo/<?=$img[3]['img']?>" class="d-block w-100 h-100 rounded" onerror="substituirBannerErro1(this)">
                            </div>
                        </a>
                    </div>
                </div>                
            </div> 
        </div>
    </div>
