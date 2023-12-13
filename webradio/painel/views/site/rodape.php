
<!-- RODAPÉ -->   
<div id="section4" class="container-fluid <?=$corFundo?> bg-gradient text-white CorMudar mt-50">
    <div class="row row-cols-1 row-cols-md-3 d-j-a">
        <div style="height:280px;" class="col-lg-4 col-6 mt-5">
                <h5>Acesso Rápido</h5>
                <h6><a href="#section1" class="text-decoration-none text-white menuHover">Músicas</a></h6>
                <h6><a href="#section2" class="text-decoration-none text-white menuHover">Fotos</a></h6>
                <h6><a href="#section6" class="text-decoration-none text-white menuHover">Vídeos</a></h6>
                <h6><a href="#section3" class="text-decoration-none text-white menuHover">Programação</a></h6>
                <h6><a href="#section5" class="text-decoration-none text-white menuHover">Agenda</a></h6>
                <h6><a href="#section0" class="text-decoration-none text-white menuHover">Top 10</a></h6>
        </div>                                          
        <div style="height:280px;" class="col-lg-4 col-6 mt-5">  
            <div style="width:100px;height:30px;" 
                class="rounded border text-primary d-j-a bg-primary-subtle PointerEvent menuHover"
                data-bs-toggle="modal" 
                data-bs-target="#atualizar_sociais">
                <span class="me-2">Editar</span>
                <i class="fa-solid fa-pen-to-square fs-5"
                    data-bs-title="Clique Para Editar!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </i>
            </div>
                <h5>Atendimento</h5>
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($telefone !== ''): ?>
                <div class="menuHover">
                    <a href="tel:+55<?=$telefone?>" class="text-white df text-decoration-none" target="_blank">
                        <div class="rounded shadow border d-j-a m-1 IconeSocial"                      
                            data-bs-title="Coloque um número telefone!"
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
                            data-bs-title="Coloque o link da Pagina No Facebook!"
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
                            data-bs-title="Coloque o link da Pagina No instagram!"
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
                    <a href="https://wa.me/+55<?=$whatsapp?>?text=Gostei+da+sua+webrádio!" class="text-white df text-decoration-none" target="_blank">
                        <div class="rounded shadow border d-j-a m-1 IconeSocial"                        
                            data-bs-title="Coloque um número de Whatsapp!"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom">
                            <i class="fa-brands fa-whatsapp"></i>       
                        </div>
                        <h6 class="mt-auto"><?=$numero?></h6>
                    </a>
                </div>  
        <?php endif; ?> 
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($tiktok !== ''): ?>     
                <div class="menuHover">
                    <a href="<?=$tiktok?>" class="text-white df text-decoration-none" target="_blank">
                        <div class="rounded shadow border d-j-a m-1 IconeSocial"                        
                            data-bs-title="Coloque o link da Pagina No tiktok"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom">
                            <i class="fa-brands fa-tiktok"></i>                     
                        </div>
                        <h6 class="mt-auto">@tikTok</h6>
                    </a>
                </div>                         
        <?php endif; ?>
                       
        </div>
        <div style="height:300px;" class="col-lg-4 col-12 mt-5">
            <div class="df">
                <h5>Sobre</h5>
                <div style="width:100px;height:30px;" 
                    class="rounded border text-primary d-j-a bg-primary-subtle ms-auto PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#atualizar_sobre">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-5"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </div>                    
                <p><?=$sobre?></p>
            <div class="df">
                <h5>Endereço</h5>
                <div style="width:100px;height:30px;" 
                    class="rounded border text-primary d-j-a bg-primary-subtle ms-auto PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#atualizar_endereco">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-5"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
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
<div class="container-fluid <?=$corFundo?> bg-gradient text-white CorMudar">
    <div class="row row-cols-1 row-cols-md-2 d-j-a">
        <div class="col-lg-7 d-j-a">
            <p>Copyright © <?=$anoAtual?> | <?=$nome_radio?></p>                                
        </div>
        <div class="col-lg-3 d-j-a">
            <p>criado por: <a target="_blank" href="https://i9cast.com.br">i9cast.com.br</a></p>
        </div>
    </div>
</div>



