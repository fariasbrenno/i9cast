
<!-- AGENDA -->
<div id="section5" class="container mt-50">        
    <div class="row d-j-a">
        <div style="height:450px;" class="col-lg-7 col-12">           
            <div style="height:50px;" class="w-100 d-j-a">
                <h2>Nossa Agenda</h2>
                <div style="width:100px;height:30px;" 
                    class="rounded border text-center text-primary d-j-a bg-primary-subtle ms-auto PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#atualizar_agenda">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-5"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </div>
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
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
        <?php if($local[3]['local'] !== '' or $descricao[3]['descricao'] !== ''): ?>
                <div class="w-50 p-1">
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
            <div style="height:50px;" class="w-100 d-j-a">
                <p>Publicidade</p>
                <div style="width:100px;height:30px;" 
                    class="rounded border text-center text-primary d-j-a bg-primary-subtle ms-auto PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#publicidade_05">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-5"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </div>
            <a href="<?=$link[7]['link']?>" target="_blank">
                <div style="height:100px;" class="w-100 mt-1 fotoHover">
                    <img class="rounded border w-100 h-100" src="../../../public/img/publicidade/<?=$imagem[7]['imagem']?>" onerror="substituirImagemErro3(this)">
                </div>
            </a>
            <a href="<?=$link[8]['link']?>" target="_blank">
                <div style="height:100px;" class="w-100 mt-1 fotoHover">
                    <img class="rounded border w-100 h-100" src="../../../public/img/publicidade/<?=$imagem[8]['imagem']?>" onerror="substituirImagemErro2(this)">
                </div>
            </a>
            <a href="<?=$link[9]['link']?>" target="_blank">
                <div style="height:100px;" class="w-100 mt-1 fotoHover">
                    <img class="rounded border w-100 h-100" src="../../../public/img/publicidade/<?=$imagem[9]['imagem']?>" onerror="substituirImagemErro1(this)">
                </div>    
            </a>                     
        </div>
    </div>
</div>

