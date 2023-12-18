

<!-- ATUALIZAR PUBLICIDADE - VIDEOS 03 -->
<form action="controllers/PublicidadeController.php" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="publicidade_04" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Atualizar Publicidade</h2>
                                <p class="text-center">Mude somente o necessário</p>
                            </div>
                        </div>  
                        <div style="height:100px;" class="row">
                            <div class="col-2 d-j-a">
                                01
                            </div>
                            <div class="col-10">
                                <label for="publicidade04" class="w-100 d-j-a">
                                <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:100px;" class="preview-image rounded w-100 shadow imgHover" src="../../../public/img/publicidade/<?=$imagem[4]['imagem']?>" onerror="substituirImagemErro1(this)">                                
                                    <input class="image-input" name="img_publi04" id="publicidade04" type="file" hidden>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">                                
                                <div class="form-floating mt-2 mb-2">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="link04" value="<?=$link[4]['link']?>">
                                    <label for="floatingInput">Link da Publicidade:</label>
                                </div>
                            </div>
                        </div>
                        <div style="height:100px;" class="row mt-1">
                            <div class="col-2 d-j-a">
                                02
                            </div>
                            <div class="col-10">
                                <label for="publicidade05" class="w-100 d-j-a">
                                <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:100px;" class="preview-image rounded w-100 shadow imgHover" src="../../../public/img/publicidade/<?=$imagem[5]['imagem']?>" onerror="substituirImagemErro2(this)">                                
                                    <input class="image-input" name="img_publi05" id="publicidade05" type="file" hidden>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">                                
                                <div class="form-floating mt-2 mb-2">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="link05" value="<?=$link[5]['link']?>">
                                    <label for="floatingInput">Link da Publicidade:</label>
                                </div>
                            </div>
                        </div>
                        <div style="height:100px;" class="row mt-1">
                            <div class="col-2 d-j-a">
                                03
                            </div>
                            <div class="col-10">
                                <label for="publicidade06" class="w-100 d-j-a">
                                <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:100px;" class="preview-image rounded w-100 shadow imgHover" src="../../../public/img/publicidade/<?=$imagem[6]['imagem']?>" onerror="substituirImagemErro3(this)">                                
                                    <input class="image-input" name="img_publi06" id="publicidade06" type="file" hidden>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">                                
                                <div class="form-floating mt-2 mb-2">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="link06" value="<?=$link[6]['link']?>">
                                    <label for="floatingInput">Link da Publicidade:</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="atualizar_publi">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</from>