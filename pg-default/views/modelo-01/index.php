
<!-- TOPO PLAY - TEMA 01 -->
    <div class="container-fluid border-bottom fixed-top <?=$corFundo?> bg-gradient text-white CorMudar">
        <div class="row row-cols-1 row-cols-md-2"> 
            <div class="col-lg-4 col-4 d-j-a">
    <!-- PLAY STREAMING -->    
            <audio id="player" autoplay="autoplay"> 
                <source id="srcP" src="https://player.ipstm.net/ssl.php?ip=<?=$ip?>&port=<?=$porta?>&mount=/;" type="audio/mpeg">
                <span>Your browser dont support that element.</span>
            </audio>
                <div class="df">
                    <i style="display: none;" class="fa fa-play-circle iconPlaying fs-1"
                        data-bs-title="Rádio Desligada!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom"></i>
                    <i class="fa fa-pause-circle iconStoped fs-1"
                        data-bs-title="Rádio Ligada!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                    <span id="radio" style="font-size: 13px;" class="ms-2 mt-auto"></span>
                    <img width="35px;" height="35px;" class="ms-2 radio" src="public/img/baixarapp/tocar2.gif">
                    <img width="35px;" height="35px;" class="radio" src="public/img/baixarapp/tocar2.gif">
                </div> 
            </div>
            <div class="col-lg-2 col-3 d-j-a">
                <i class="fa-solid fa-users me-4 fs-5"
                        data-bs-title="Ouvintes Conectados"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom"></i> 
                <div class="fs-3"><?php echo $dadosXML->ouvintes_conectados; ?></div>
            </div>
    <!-- LETREIRO - MUSICA ATUAL -->
            <div class="col-lg-2 col-5 text-center">
                <span>Tocando Agora <i class="fa-solid fa-music"></i></span>
                <marquee class="status cc_streaminfo" data-type="song" data-username="hoostcom" style="color: #fff;opacity: 1;"><?php echo $dadosXML->musica_atual; ?></marquee>
            </div>
    <!-- REDES SOCIAIS / MUDAR COR -->
            <div class="col-lg-4 d-j-a">
        <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($facebook !== ''): ?>
                <a href="<?=$facebook?>" class="text-decoration-none" target="_blank">
                    <div style="width:30px;height:30px;" class="d-j-a m-1">
                        <i class="iconSociais fa-brands fa-facebook fs-3 text-white"
                            data-bs-title="Acesse Nossa Página Facebook"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom">
                        </i>
                    </div>
                </a>
        <?php endif; ?>
        <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($instagram !== ''): ?>
                <a href="<?=$instagram?>" class="text-decoration-none" target="_blank">
                    <div style="width:30px;height:30px;" class="d-j-a m-1">
                        <i class="iconSociais fa-brands fa-instagram fs-3 text-white"
                            data-bs-title="Acesse Nossa Página Instagram"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom">
                        </i>
                    </div>
                </a>
        <?php endif; ?>
        <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($whatsapp !== ''): ?>
                <a href="https://wa.me/+55<?=$whatsapp?>?text=Gostei+da+sua+webrádio!" class="text-decoration-none" target="_blank">
                    <div style="width:30px;height:30px;" class="d-j-a m-1">
                        <i class="iconSociais fa-brands fa-whatsapp fs-3 text-white"
                            data-bs-title="Me chame no Whatsapp"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom">
                        </i>
                    </div>
                </a>
        <?php endif; ?>
        <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($tiktok !== ''): ?>
                <a href="<?=$tiktok?>" class="text-decoration-none" target="_blank">
                    <div style="width:30px;height:30px;" class="d-j-a m-1">
                        <i class="iconSociais fa-brands fa-tiktok fs-3 text-white"
                            data-bs-title="Acesse Nossa Página tiktok"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom">
                        </i>
                    </div>
                </a>
        <?php endif; ?>
        <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($telefone !== ''): ?>
                <a href="tel:+55<?=$telefone?>" class="text-decoration-none" target="_blank">
                    <div style="width:30px;height:30px;" class="d-j-a m-1">
                    <i class="iconSociais fa-solid fa-phone-volume fs-3 text-white"
                        data-bs-title="Peça um alô na Ligação!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                    </div>
                </a>
        <?php endif; ?>
            </div>
        </div>
    </div>



<!-- LOGO - TEMA 01--> 
    <div class="container mb-2 tema_01 m-top-logo">   
        <div class="row row-cols-1 row-cols-md-2 d-j-a">
            <div class="col-lg-3 col-10 d-j-a">
                <div class="w-75">
                    <div style="height: 200px;" class="w-100 mt-2">
                        <img src="public/img/logo/<?=$logo?>" class="d-block w-100 h-100 shadow-lg rounded border">
                    </div>
                    <!--
                    <div style="height:20px;" class="w-100 mt-2 d-j-a">
                        <i class="fa-solid fa-mobile me-2 fs-4"></i> 
                        <h6 class="mt-auto">Baixe nosso Aplicativo</h6>                         
                    </div>
        -->

                        <div style="height:80px;" class="AppHover mt-1"
                            data-bs-title="Baixe nosso Aplicativo"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom">
                            <!--
                            <div id="carouselExampleSlidesOnly" class="carousel slide w-100" data-bs-ride="carousel">
                                <div class="carousel-inner">
                    <?php if ($link_google_play == ''): ?>
                                <a href="../app/<?=$link_aplicativo?>.apk">
                                    <div class="carousel-item active">   
                                        <img class="rounded" width="100%" src="public/img/baixarapp/apkandroid.png">                                    
                                    </div>
                                </a>
                        <?php else: ?>
                                <a href="<?=$link_google_play?>"  target="_blank">
                                    <div class="carousel-item active">
                                        <img class="rounded" width="100%" src="public/img/baixarapp/baixarApp.png">
                                    </div>
                                </a>
                            <?php endif; ?>
                                </div>                        
                            </div>     
                            -->  
                            <!-- BAIXAR APLICATIVO -->  
                        <div id="sumir-baixar-app" style="display: none;">
                            <div class="d-j-a w-100">
                                <button id="install-button" style="border-radius: 30px;display: none;" class="btn btn-warning w-100 fs-3">Baixar App <i class="fa-solid fa-download fs-5"></i></button>
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
                                <img src="public/img/slide_logo/<?=$img[1]['img']?>" class="d-block w-100 h-100 rounded" onerror="substituirBannerErro1(this)">    
                            </div>
                        </a>
                        <a href="<?=$img_link[2]['link']?>" target="_blank">
                            <div style="height:250px;" class="carousel-item fotoHover">
                                <img src="public/img/slide_logo/<?=$img[2]['img']?>" class="d-block w-100 h-100 rounded" onerror="substituirBannerErro2(this)">
                            </div>
                        </a>
                        <a href="<?=$img_link[3]['link']?>" target="_blank">
                            <div style="height:250px;" class="carousel-item fotoHover">
                                <img src="public/img/slide_logo/<?=$img[3]['img']?>" class="d-block w-100 h-100 rounded" onerror="substituirBannerErro3(this)">
                            </div>
                        </a>
                    </div>
                </div>                
            </div>  
        </div>
    </div>



<!-- MENU -->
    <div id="menu" class="container-fluid sticky-top <?=$corFundo?> bg-gradient CorMudar m-top-fixed">
        <div style="height:50px;" class="row d-j-a">
            <div class="col-lg-2 col d-j-a">
                <a class="menuHover text-decoration-none text-white fw-bold" href="#section1">Músicas</a> 
            </div>
            <div class="col-lg-2 col d-j-a">
                <a class="menuHover text-decoration-none text-white fw-bold" href="#section2">Fotos</a> 
            </div>
            <div class="col-lg-2 col d-j-a">
                <a class="menuHover text-decoration-none text-white fw-bold" href="#section3">Programação</a>              
            </div>
            <div class="col-lg-2 col d-j-a">
                <a class="menuHover text-decoration-none text-white fw-bold" href="#section4">Contato</a>      
            </div>
        </div>
    </div>

  

<!-- PEDIDO MUSICAL -->
    <div class="container mt-50">      
        <div class="row row-cols-1 row-cols-md-2 d-j-a">
            <div style="height:250px;" class="col-lg-7 mt-5">
                <div id="carouselExample" class="carousel slide h-100">
                    <div class="carousel-inner">
                        <a href="<?=$link_slide[1]['link']?>" target="_blank">
                            <div style="height:250px;" class="carousel-item active fotoHover">
                                <img src="public/img/publicidade_slide/<?=$slide[1]['slide']?>" class="d-block w-100 h-100 rounded" onerror="substituirBannerErro3(this)">
                            </div>
                        </a>
                        <a href="<?=$link_slide[2]['link']?>" target="_blank">
                            <div style="height:250px;" class="carousel-item fotoHover">
                                <img src="public/img/publicidade_slide/<?=$slide[2]['slide']?>" class="d-block w-100 h-100 rounded" onerror="substituirBannerErro2(this)">
                            </div>
                        </a>
                        <a href="<?=$link_slide[3]['link']?>" target="_blank">
                            <div style="height:250px;" class="carousel-item fotoHover">
                                <img src="public/img/publicidade_slide/<?=$slide[3]['slide']?>" class="d-block w-100 h-100 rounded" onerror="substituirBannerErro1(this)">
                            </div>
                        </a>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div style="height:250px;" class="col-lg-3 col-10 mt-5">

                <form id="form_pedidos">
                    <div class="rounded shadow-lg border border-2 p-1 h-100">
                        <h4 class="text-center mt-2">Pedido Músical</h4>

                        <div style="display: none;" id="chat" class="text-center text-success fs-5">Salvo com Sucesso!</div>

                        <div class="form-floating shadow mb-2">
                            <input type="text" class="form-control" id="nome" placeholder="Password">
                            <label for="nome">Seu nome?</label>
                        </div>
                        <div class="form-floating shadow">
                            <input type="text" class="form-control" id="musica" placeholder="name@example.com">
                            <label for="musica">Diga algo.</label>
                        </div>
                        
                        <div class="w-100 d-j-a mt-3 pb-3">
                            <button type="submit" class="<?=$corFundo?> border-0 rounded text-white w-75 fs-5 menuHover">Enviar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

<!-- FOTOS -->
    <div id="section2" class="container mt-50">
        <div class="row row-cols-1 row-cols-md-2 d-j-a">
            <div style="height:350px;" class="col-lg-7 mt-5">                     
                <div style="height:50px;" class="w-100">
                    <h2>Mural de Fotos</h2>
                </div>      
                <div style="height:150px;" class="df">
                    <div style="width: 33%;" 
                        class="m-1 fotoHover"
                        data-bs-toggle="modal" 
                        data-bs-target="#ver_1">
                        <img class="rounded w-100 h-100" src="public/img/fotos/<?=$foto[1]['foto']?>">
                    </div>
                    <div style="width: 33%;" 
                        class="m-1 fotoHover"
                        data-bs-toggle="modal" 
                        data-bs-target="#ver_2">
                        <img class="rounded w-100 h-100" src="public/img/fotos/<?=$foto[2]['foto']?>">
                    </div>
                    <div style="width: 33%;" 
                        class="m-1 fotoHover"
                        data-bs-toggle="modal" 
                        data-bs-target="#ver_3">
                        <img class="rounded w-100 h-100" src="public/img/fotos/<?=$foto[3]['foto']?>">
                    </div>
                </div>   
                <div style="height:150px;" class="df">              
                    <div style="width: 33%;" 
                        class="m-1 fotoHover"
                        data-bs-toggle="modal" 
                        data-bs-target="#ver_4">
                        <img class="rounded w-100 h-100" src="public/img/fotos/<?=$foto[4]['foto']?>">
                    </div>
                    <div style="width: 33%;" 
                        class="m-1 fotoHover"
                        data-bs-toggle="modal" 
                        data-bs-target="#ver_5">
                        <img class="rounded w-100 h-100" src="public/img/fotos/<?=$foto[5]['foto']?>">
                    </div>
                    <div style="width: 33%;" 
                        class="m-1 fotoHover"
                        data-bs-toggle="modal" 
                        data-bs-target="#ver_6">
                        <img class="rounded w-100 h-100" src="public/img/fotos/<?=$foto[6]['foto']?>">
                    </div>
                </div>  
            </div>
            <div style="height: 350px;" class="col-lg-3 mt-5">                
                <div style="height:50px;" class="w-100">
                    <p>Publicidade</p>
                </div>
                <a href="<?=$link[1]['link']?>" target="_blank">
                    <div style="height:100px;" class="w-100 mt-1 fotoHover">
                        <img class="rounded border w-100 h-100" src="public/img/publicidade/<?=$imagem[1]['imagem']?>" onerror="substituirImagemErro1(this)">
                    </div>
                </a>
                <a href="<?=$link[2]['link']?>" target="_blank">
                    <div style="height:100px;" class="rw-100 mt-1 fotoHover">
                        <img class="rounded border w-100 h-100" src="public/img/publicidade/<?=$imagem[2]['imagem']?>" onerror="substituirImagemErro2(this)">
                    </div>
                </a>
                <a href="<?=$link[3]['link']?>" target="_blank">
                    <div style="height:100px;" class="w-100 mt-1 fotoHover">
                        <img class="rounded border w-100 h-100" src="public/img/publicidade/<?=$imagem[3]['imagem']?>" onerror="substituirImagemErro3(this)">
                    </div>    
                </a>                          
            </div>
        </div>
    </div>



<!-- YOUTUBE -->
    <div id="section6" class="container mt-50">
        <div class="row row-cols-1 row-cols-md-2 d-j-a">
            <div style="height: 350px;" class="col-lg-7 mt-5">
                <h2>Canal Do Youtube</h2>
                <div class="df">
                    <iframe width="100%" height="300" src="<?=$youtube?>" title="YouTube video player" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div> 
            </div>
            <div style="height: 350px;" class="col-lg-3 mt-5">            
                    <p>Publicidade</p>
                <a href="<?=$link[4]['link']?>" target="_blank">
                    <div style="height:100px;" class="w-100 mt-1 fotoHover">
                        <img class="rounded border w-100 h-100" src="public/img/publicidade/<?=$imagem[4]['imagem']?>" onerror="substituirImagemErro4(this)">
                    </div>
                </a>
                <a href="<?=$link[5]['link']?>" target="_blank">
                    <div style="height:100px;" class="w-100 mt-1 fotoHover">
                        <img class="rounded border w-100 h-100" src="public/img/publicidade/<?=$imagem[5]['imagem']?>" onerror="substituirImagemErro1(this)">
                    </div>
                </a>
                <a href="<?=$link[6]['link']?>" target="_blank">
                    <div style="height:100px;" class="w-100 mt-1 fotoHover">
                        <img class="rounded border w-100 h-100" src="public/img/publicidade/<?=$imagem[6]['imagem']?>" onerror="substituirImagemErro2(this)">
                    </div>    
                </a>                         
            </div>
        </div>
    </div>

<!-- TOPS MUSICAS -->
    <div id="section1" class="container mt-50">
        <div class="row row-cols-1 row-cols-md-2  d-j-a">        
            <div style="height:max-content;" class="col-lg-7 mt-5">   
                <div style="height: 100px;" class="w-100">
                    <h2>Top 10 Músicas</h2>
                    <p>a semana ta bombando</p>
                </div>      
                <table class="table">
                        <thead>
        <?php
        $dado = $conexao->query('select * from top_10_musicas');
        foreach($dado as $row):
        ?>
                            <tr class="border">
                                <th scope="col"><i class="fa-solid fa-music"></th>
                                <th style="font-size: 14px;" scope="col"><?=$row['nome']?></th>
                                <th scope="col">
                                    <a href="<?=$row['link']?>" target="_blank" class="text-decoration-none">
                                        <div style="width:25px;height:25px;" class="rounded <?=$corFundo?> CorMudar menuHover d-j-a">
                                            <i class="fa-solid fa-play text-white"></i>
                                        </div>
                                    </a>
                                </th>
                            </tr>
        <?php endforeach; ?>

                        </thead>
                    </table>
            </div>
            <div  class="col-lg-3 col-10 mt-5"> 
                <div style="height: 50px;" class="w-100">
                    <p>Publicidade</p>
                </div>   
                <a href="<?=$link_banner?>" target="_blank" class="w-100 d-j-a">          
                    <div style="height:450px;" class="w-75 shadow-lg rounded fotoHover">
                        <img class="w-100 h-100 rounded" src="public/img/banner/<?=$banner?>" onerror="substituirBanner(this)">
                    </div>
                </a>
            </div>
        </div>        
    </div>



<!-- AGENDA -->
    <div id="section5" class="container mt-50">       
        <div class="row d-j-a">
            <div style="height:450px;" class="col-lg-7 col-12">            
                <h2>Nossa Agenda</h2>
                <div class="w-100 df">
                    <div class="w-50 p-1">
        <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
            <?php if($local[1]['local'] !== '' or $descricao[1]['descricao'] !== ''): ?>
                        <div style="height:max-content;" class="w-100 border text-break p-1 rounded bg-primary-subtle m-1">
                            <h6 class="text-center p-2"><?=$dataAg[1]['data']?> às <?=$horaAg[1]['hora']?></h6>
                            <h6 class="">Local: <?=$local[1]['local']?></h6>
                            <h6><?=$descricao[1]['descricao']?></h6>
                        </div>
            <?php endif; ?>
        <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
            <?php if($local[2]['local'] !== '' or $descricao[2]['descricao'] !== ''): ?>
                        <div style="height:max-content;" class="w-100 border text-break p-1 rounded bg-warning-subtle m-1">
                            <h6 class="text-center p-2"><?=$dataAg[2]['data']?> às <?=$horaAg[2]['hora']?></h6>
                            <h6 class="">local: <?=$local[2]['local']?></h6>
                            <h6><?=$descricao[2]['descricao']?></h6>
                        </div>
                    </div>
            <?php endif; ?>
                    <div class="w-50 p-1">
        <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
            <?php if($local[3]['local'] !== '' or $descricao[3]['descricao'] !== ''): ?>
                        <div style="height:max-content;" class="w-100 border text-break p-1 rounded bg-warning-subtle m-1">
                            <h6 class="text-center p-2"><?=$dataAg[3]['data']?> às <?=$horaAg[3]['hora']?></h6>
                            <h6 class="">local: <?=$local[3]['local']?></h6>
                            <h6><?=$descricao[3]['descricao']?></h6>
                        </div>
            <?php endif; ?>
        <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
            <?php if($local[4]['local'] !== '' or $descricao[4]['descricao'] !== ''): ?>
                        <div style="height:max-content;" class="w-100 border text-break p-1 rounded bg-primary-subtle m-1">
                            <h6 class="text-center p-2"><?=$dataAg[4]['data']?> às <?=$horaAg[4]['hora']?></h6>
                            <h6>Local: <?=$local[4]['local']?></h6>
                            <h6><?=$descricao[4]['descricao']?></h6>
                        </div>
            <?php endif; ?>
                    </div>
                </div>                                                    
            </div>
            <div style="height: 450px;" class="col-lg-3 mt-5">           
                <p>Publicidade</p>
                <a href="<?=$link[7]['link']?>" target="_blank">
                    <div style="height:100px;" class="w-100 mt-1 fotoHover">
                        <img class="rounded border w-100 h-100" src="public/img/publicidade/<?=$imagem[7]['imagem']?>" onerror="substituirImagemErro3(this)">
                    </div>
                </a>
                <a href="<?=$link[8]['link']?>" target="_blank">
                    <div style="height:100px;" class="w-100 mt-1 fotoHover">
                        <img class="rounded border w-100 h-100" src="public/img/publicidade/<?=$imagem[8]['imagem']?>" onerror="substituirImagemErro4(this)">
                    </div>
                </a>
                <a href="<?=$link[9]['link']?>" target="_blank">
                    <div style="height:100px;" class="w-100 mt-1 fotoHover">
                        <img class="rounded border w-100 h-100" src="public/img/publicidade/<?=$imagem[9]['imagem']?>" onerror="substituirImagemErro1(this)">
                    </div>  
                </a>                      
            </div>
        </div>
    </div>

<!-- PROGRAMAÇÃO -->
    <div  id="section3" class="container">       
        <div class="row d-j-a">
            <div style="height:max-content;" class="col-lg-7 mt-5">              
                <h2>Programação Semanal</h2> 
                <table class="table table-striped shadow-lg border">
                    <thead>
                        <tr class="table-primary text-center">
                            <th scope="col">Dia/Hora</th>
                            <th scope="col">Programa</th>
                            <th scope="col">Apresentador</th>
                        </tr>                            
                    </thead>
                    <tbody>
    <?php
    $programacao = $conexao->query('select * from programacao');
    foreach($programacao as $row):  
    ?>
                        <tr class="text-center">
                            <td><?=$row['dia']?> às <?=$row['hora']?></td>
                            <td><?=$row['programa']?></td>
                            <td><?=$row['apresentador']?></td>
                        </tr>
    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div style="height: 450px;" class="col-lg-3 mt-5">                
                <p>Publicidade</p> 
                <a href="<?=$link[10]['link']?>" target="_blank">
                    <div style="height:100px;" class="rw-100 mt-1 fotoHover">
                        <img class="rounded border w-100 h-100" src="public/img/publicidade/<?=$imagem[10]['imagem']?>" onerror="substituirImagemErro2(this)">
                    </div>
                </a>
                <a href="<?=$link[11]['link']?>" target="_blank">
                    <div style="height:100px;" class="w-100 mt-1 fotoHover">
                        <img class="rounded border w-100 h-100" src="public/img/publicidade/<?=$imagem[11]['imagem']?>" onerror="substituirImagemErro3(this)">
                    </div>
                </a>
                <a href="<?=$link[12]['link']?>" target="_blank">
                    <div style="height:100px;" class="w-100 mt-1 fotoHover">
                        <img class="rounded border w-100 h-100" src="public/img/publicidade/<?=$imagem[12]['imagem']?>" onerror="substituirImagemErro4(this)">
                    </div>  
                </a>                      
            </div>
        </div>
    </div>

<!-- RODAPÉ -->    
    <div id="section4" class="container-fluid <?=$corFundo?> bg-gradient text-white mt-50">
        <div class="row row-cols-1 row-cols-md-3 d-j-a">
            <div style="height:300px;" class="col-lg-4 col-6 mt-5">
                    <h5>Acesso Rápido</h5>
                    <h6><a href="#section1" class="text-decoration-none text-white menuHover">Músicas</a></h6>
                    <h6><a href="#section2" class="text-decoration-none text-white menuHover">Fotos</a></h6>
                    <h6><a href="#section6" class="text-decoration-none text-white menuHover">Youtube</a></h6>
                    <h6><a href="#section3" class="text-decoration-none text-white menuHover">Programação</a></h6>
                    <h6><a href="#section5" class="text-decoration-none text-white menuHover">Agenda</a></h6>
            </div>
                             
            <div style="height:300px;" class="col-lg-4 col-6 mt-5">                
                <h5>Atendimento</h5>                
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($telefone !== ''): ?>
                    <div class="menuHover">
                        <a href="tel:+55<?=$telefone?>" class="text-white df text-decoration-none" target="_blank">
                            <div class="rounded shadow border d-j-a m-1 IconeSocial"                            
                                data-bs-title="Ligue e peça um alô!"
                                data-bs-toggle="tooltip"
                                data-bs-placement="bottom">
                                <i class="fa-solid fa-phone"></i>                       
                            </div>
                            <h6 class="mt-auto"><?=$telefone?></h6>
                        </a>
                    </div>
        <?php endif; ?>
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($facebook !== ''): ?>
                    <div class="menuHover">
                        <a href="<?=$facebook?>" class="text-white df text-decoration-none" target="_blank">
                            <div class="rounded shadow border d-j-a m-1 IconeSocial"                            
                                data-bs-title="Curta Minha Pagina No Facebook"
                                data-bs-toggle="tooltip"
                                data-bs-placement="bottom">
                                <i class="fa-brands fa-facebook"></i>                        
                            </div>
                            <h6 class="mt-auto">@facebook</h6>
                        </a>
                    </div>
        <?php endif; ?>
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($instagram !== ''): ?>
                    <div class="menuHover">
                        <a href="<?=$instagram?>" class="text-white df text-decoration-none" target="_blank">
                            <div class="rounded shadow border d-j-a m-1 IconeSocial"                            
                                data-bs-title="Curta Minha Pagina No instagram"
                                data-bs-toggle="tooltip"
                                data-bs-placement="bottom">
                                <i class="fa-brands fa-instagram"></i>                      
                            </div>
                            <h6 class="mt-auto">@instagram</h6>
                        </a>
                    </div>
        <?php endif; ?>
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($whatsapp !== ''): ?>
                    <div class="menuHover">
                        <a href="https://wa.me/+55<?=$whatsapp?>?text=Quero+criar+minha+web+r%C3%A1dio" class="text-white df text-decoration-none" target="_blank">
                            <div class="rounded shadow border d-j-a m-1 IconeSocial"                            
                                data-bs-title="Me chame no Whatsapp"
                                data-bs-toggle="tooltip"
                                data-bs-placement="bottom">
                                <i class="fa-brands fa-whatsapp"></i>                       
                            </div>
                            <h6 class="mt-auto"><?=$whatsapp?></h6>
                        </a>
                    </div>
        <?php endif; ?>
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($tiktok !== ''): ?>
                    <div class="menuHover">
                        <a href="<?=$tiktok?>" class="text-white df text-decoration-none" target="_blank">
                            <div class="rounded shadow border d-j-a m-1 IconeSocial"                           
                                data-bs-title="Curta Minha Pagina No tiktok"
                                data-bs-toggle="tooltip"
                                data-bs-placement="bottom">
                                <i class="fa-brands fa-tiktok"></i>                      
                            </div>
                            <h6 class="mt-auto">@tiktok</h6>
                        </a>
                    </div>
        <?php endif; ?>
            </div>      
            <div style="height:300px;" class="col-lg-4 col-12 mt-5">
                <div class="df">
                    <h5>Sobre</h5>
                </div>                    
                    <p><?=$sobre?></p>
                <div class="df">
                    <h5>Endereço</h5>
                </div>                    
                    <p>
                        CEP: <?=$cep?>
                        <br>
                        <?=$rua?>, Nº <?=$numerocasa?>/<?=$complemento?> - <?=$bairro?>                
                        <br>                        
                        <?=$cidade?>-<?=$estado?>
                    </p>
            </div>
        </div>        
    </div>

    <div class="container-fluid <?=$corFundo?> bg-gradient text-white">
        <div class="row row-cols-1 row-cols-md-2 d-j-a">
            <div class="col-lg-7 d-j-a">
                <p >Copyright © <?=$anoAtual?> | <?=$nome_radio?></p>                               
            </div>
            <div class="col-lg-3 d-j-a">
                <p>criado por: <a target="_blank" href="https://i9cast.com.br">i9cast.com.br</a></p>
            </div>
        </div>
    </div>























    

