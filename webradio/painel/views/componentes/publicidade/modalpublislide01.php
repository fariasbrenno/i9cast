

<!-- ATUALIZAR PUBLICIDADE - SLIDE 01 -->
<form action="controllers/SlidePubliController.php" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="atualizar_publicidade_02" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h2>Trocar Publicidade</h2>
                                <P>mude somente o necessário</P>
                            </div>
                        </div>   
                        <div class="row mt-2 d-j-a">
                            <div class="col-12">
                                <label for="img-01" class="d-j-a">
                                    <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:150px;" class="preview-image shadow rounded w-100 imgHover" src="../../../public/img/publicidade_slide/<?=$slide[1]['slide']?>" onerror="substituirBannerErro1(this)">
                                    <input id="img-01" class="image-input" type="file" hidden  name="img_publi01">
                                </label>
                            </div> 
                        </div> 
                        <div class="row">
                            <div class="col-12">                                
                                <div class="form-floating mt-2 mb-2">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="link_1" value="<?=$link_slide[1]['link']?>">
                                    <label for="floatingInput">Link da Publicidade:</label>
                                </div>
                            </div>
                        </div>  
                        <div class="row mt-2 d-j-a">
                            <div class="col-12">
                                <label for="img-02" class="d-j-a">
                                    <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:150px;" class="preview-image shadow rounded w-100 imgHover" src="../../../public/img/publicidade_slide/<?=$slide[2]['slide']?>" onerror="substituirBannerErro2(this)">
                                    <input id="img-02" class="image-input" type="file" hidden  name="img_publi02">
                                </label>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-12">                                
                                <div class="form-floating mt-2 mb-2">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="link_2" value="<?=$link_slide[2]['link']?>">
                                    <label for="floatingInput">Link da Publicidade:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 d-j-a">
                            <div class="col-12">
                                <label for="img-03" class="d-j-a">
                                    <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:150px;" class="preview-image shadow rounded w-100 imgHover" src="../../../public/img/publicidade_slide/<?=$slide[3]['slide']?>" onerror="substituirBannerErro3(this)">
                                    <input id="img-03" class="image-input" type="file" hidden  name="img_publi03">
                                </label>
                            </div> 
                        </div>  
                        <div class="row">
                            <div class="col-12">                                
                                <div class="form-floating mt-2 mb-2">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="link_3" value="<?=$link_slide[3]['link']?>">
                                    <label for="floatingInput">Link da Publicidade:</label>
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" name="atualizar_slide" class="btn btn-primary" value="Salvar">
                </div>
            </div>
        </div>
    </div>
</form>



