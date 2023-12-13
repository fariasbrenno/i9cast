
<!-- ATUALIZAR BANNER PUBLICIDADE -->
<form action="controllers/PubliBannerController.php" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="alterar_banner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">

                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Alterar Banner</h2>
                                <p class="text-center">mude somente o necessário!</p>
                            </div>
                        </div>  

                        <div class="row"> 
                            <div class="col-12 d-j-a">
                                <label for="banner">
                                    <div style="width:200px;height:300px;" class="d-j-a">
                                        <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                        <img class="preview-image shadow rounded w-100 imgHover h-100" src="../../public/img/banner/<?=$banner?>" onerror="substituirBanner(this)">
                                        <input id="banner" class="image-input" type="file" hidden  name="banner">
                                    </div> 
                                </label>
                            </div>
                            <div class="col-12">                                
                                <div class="form-floating mt-2">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="link_banner" value="<?=$link_banner?>">
                                    <label for="floatingInput">Link da Publicidade:</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar_banner">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>