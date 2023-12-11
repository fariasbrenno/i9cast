

<!-- FOTOS -->
<div id="section2" class="container mt-50">
    <div class="row row-cols-1 row-cols-md-2 d-j-a">
        <div style="height:350px;" class="col-lg-7 mt-5">                     
            <div style="height:50px;" class="w-100 d-j-a">
                <h2>Mural de Fotos</h2>
                <div style="width:100px;height:30px;" 
                    class="rounded border text-center text-primary d-j-a bg-primary-subtle ms-auto PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#atualizar_fotos">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-5"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>                    
            </div>      
            <div style="height:150px;" class="df">
                <div style="width: 33%;" 
                    class="m-1 fotoHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#ver_1">
                    <img class="rounded w-100 h-100" src="../../../public/img/fotos/<?=$foto[1]['foto']?>">
                </div>
                <div style="width: 33%;" 
                    class="m-1 fotoHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#ver_2">
                    <img class="rounded w-100 h-100" src="../../../public/img/fotos/<?=$foto[2]['foto']?>">
                </div>
                <div style="width: 33%;" 
                    class="m-1 fotoHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#ver_3">
                    <img class="rounded w-100 h-100" src="../../../public/img/fotos/<?=$foto[3]['foto']?>">
                </div>
            </div>   
            <div style="height:150px;" class="df"> 
                <div style="width: 33%;" 
                    class="m-1 fotoHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#ver_4">
                    <img class="rounded w-100 h-100" src="../../../public/img/fotos/<?=$foto[4]['foto']?>">
                </div>
                <div style="width: 33%;" 
                    class="m-1 fotoHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#ver_5">
                    <img class="rounded w-100 h-100" src="../../../public/img/fotos/<?=$foto[5]['foto']?>">
                </div>
                <div style="width: 33%;" 
                    class="m-1 fotoHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#ver_6">
                    <img class="rounded w-100 h-100" src="../../../public/img/fotos/<?=$foto[6]['foto']?>">
                </div>
            </div>  
        </div>
        <div style="height: 350px;" class="col-lg-3 mt-5">               
            <div style="height:50px;" class="w-100 d-j-a">
                <p>Publicidade</p>
                <div style="width:100px;height:30px;" 
                    class="rounded border text-primary d-j-a bg-primary-subtle ms-auto PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#publicidade_01">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-5"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </div>
            <a href="<?=$link[1]['link']?>" target="_blank">
                <div style="height:100px;" class="w-100 mt-1 fotoHover">
                    <img class="rounded border w-100 h-100" src="../../../public/img/publicidade/<?=$imagem[1]['imagem']?>" onerror="substituirImagemErro1(this)">
                </div>
            </a>
            <a href="<?=$link[2]['link']?>" target="_blank">
                <div style="height:100px;" class="w-100 mt-1 fotoHover">
                    <img class="rounded border w-100 h-100" src="../../../public/img/publicidade/<?=$imagem[2]['imagem']?>" onerror="substituirImagemErro2(this)">
                </div>
            </a>
            <a href="<?=$link[3]['link']?>" target="_blank">
                <div style="height:100px;" class="w-100 mt-1 fotoHover">
                    <img class="rounded border w-100 h-100" src="../../../public/img/publicidade/<?=$imagem[3]['imagem']?>" onerror="substituirImagemErro3(this)">
                </div>    
            </a>                         
        </div>
    </div>
</div>

