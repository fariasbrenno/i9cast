
<!-- PEDIDO MUSICAL -->
<div class="container mt-50">
    <div class="row">
        <div class="col-lg-12 d-j-a text-primary">
            <div style="width:250px;height:45px;" 
                class="rounded border text-center d-j-a bg-primary-subtle PointerEvent menuHover"
                data-bs-toggle="modal" 
                data-bs-target="#atualizar_publicidade_02">
                <span class="me-2">Editar</span>
                <i class="fa-solid fa-pen-to-square fs-2"
                    data-bs-title="Clique Para Editar!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </i>
            </div>                
        </div>
    </div>
</div>
<div class="container">        
    <div class="row row-cols-1 row-cols-md-2 d-j-a">
        <div class="col-lg-7 mt-3">                
            <div id="carouselExample" class="carousel slide h-100">
                <div class="carousel-inner">
                    <a href="<?=$link_slide[1]['link']?>" target="_blank">
                        <div style="height:250px;" class="carousel-item active fotoHover">
                            <img src="../../../public/img/publicidade_slide/<?=$slide[1]['slide']?>" class="d-block w-100 h-100 rounded" onerror="substituirBannerErro1(this)">
                        </div>
                    </a>
                    <a href="<?=$link_slide[2]['link']?>" target="_blank">
                        <div style="height:250px;" class="carousel-item fotoHover">
                            <img src="../../../public/img/publicidade_slide/<?=$slide[2]['slide']?>" class="d-block w-100 h-100 rounded" onerror="substituirBannerErro2(this)">
                        </div>
                    </a>
                    <a href="<?=$link_slide[3]['link']?>" target="_blank">
                        <div style="height:250px;" class="carousel-item fotoHover">
                            <img src="../../../public/img/publicidade_slide/<?=$slide[3]['slide']?>" class="d-block w-100 h-100 rounded" onerror="substituirBannerErro3(this)">
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
        <div style="height:250px;" class="col-lg-3 col-10 mt-3">
            <div class="rounded shadow-lg border border-2 p-1 h-100">
                <h4 class="text-center mt-1">Pedidos</h4>
                <div style="height:120px;overflow:scroll;" class="listar_pedidos z-3 text-white border rounded <?=$corFundo?> CorMudar p-2 mb-2"></div>
                <div class="w-100 d-j-a m-auto">
                    <button type="submit" 
                        class="Btn_Pedido CorMudar menuHover <?=$corFundo?> border-0 rounded text-white w-75 fs-4"
                        data-bs-toggle="modal" 
                        data-bs-target="#pedidos_musical">
                        ver todos
                    </button>
                </div>
            </div>
        </div> 
    </div>
</div>

    
