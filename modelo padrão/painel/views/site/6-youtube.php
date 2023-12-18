
<!-- YOUTUBE -->
<div id="section6" class="container mt-50">
    <div class="row row-cols-1 row-cols-md-2 d-j-a">
        <div style="height: 350px;" class="col-lg-7 mt-5">
            <div style="height:50px;" class="w-100 d-j-a">
                <h2>Canal Do Youtube</h2>
                <div style="width:100px;height:30px;" 
                    class="rounded border text-center text-primary d-j-a bg-primary-subtle ms-auto PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#atualizar_videos">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-5"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </div> 
            <div class="df">
                <iframe width="100%" height="300" src="<?=$youtube?>" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div> 
        </div>
        <div style="height: 350px;" class="col-lg-3 mt-5">            
            <div style="height:50px;" class="w-100 d-j-a">
                <p>Publicidade</p>
                <div style="width:100px;height:30px;" 
                    class="rounded border text-primary d-j-a bg-primary-subtle ms-auto PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#publicidade_04">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-5"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </div> 
            <a href="<?=$link[4]['link']?>" target="_blank">
                <div style="height:100px;" class="w-100 mt-1 fotoHover">
                    <img class="rounded border w-100 h-100" src="../../../public/img/publicidade/<?=$imagem[4]['imagem']?>" onerror="substituirImagemErro4(this)">
                </div>
            </a>
            <a href="<?=$link[5]['link']?>" target="_blank">
                <div style="height:100px;" class="w-100 mt-1 fotoHover">
                    <img class="rounded border w-100 h-100" src="../../../public/img/publicidade/<?=$imagem[5]['imagem']?>" onerror="substituirImagemErro1(this)">
                </div>
            </a>
            <a href="<?=$link[6]['link']?>" target="_blank">
                <div style="height:100px;" class="w-100 mt-1 fotoHover">
                    <img class="rounded border w-100 h-100" src="../../../public/img/publicidade/<?=$imagem[6]['imagem']?>" onerror="substituirImagemErro2(this)">
                </div>   
            </a>                          
        </div>
    </div>
</div>
