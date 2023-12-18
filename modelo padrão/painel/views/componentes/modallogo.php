

<!-- ATUALIZAR LOGO/APP/PUBLICIDADE -->
<form action="controllers/LogoController.php" method="post" enctype="multipart/form-data">   
    <div class="modal fade" id="atualizar_logo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-4 d-j-a">
                                Trocar Cor:
                            </div>                        
                            <div class="col-6">
                                <select name="background" class="form-select" aria-label="Default select example">
                                    <option selected disabled>--Escolhar Aqui--</option>
                                    <option value="bg-success">Verde</option>
                                    <option value="bg-danger">Vermelho</option>
                                    <option value="bg-primary">Azul</option>
                                    <option value="bg-roxo">Roxo</option>
                                    <option value="bg-black">Preto</option>
                                    <option value="bg-warning">Amarelo</option>
                                    <option value="bg-secondary">Cinza</option>
                                    <option value="bg-lilas">Lilas</option>
                                    <option value="bg-laranja">Laranja</option>
                                    <option value="bg-rosa">Rose</option>
                                </select>
                            </div>                        
                        </div>
                        <div style="height:100px;" class="row mt-2">
                            <div class="col-4 d-j-a fs-6">
                                Trocar Favicon:
                            </div>                        
                            <div class="col-6">
                                <label for="img-favicon" class="w-100 h-100 d-j-a">
                                    <div style="width:30px;height:30px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:80px;widht:80px;" class="preview-image shadow border rounded imgHover" src='../../public/img/favicon/<?=$favicon?>'>
                                    <input id="img-favicon" class="image-input" type="file" hidden name="favicon">
                                </label>
                            </div>                        
                        </div>
                        <div style="height:160px;" class="row mt-2">
                            <div class="col-4 d-j-a fs-6">
                                Trocar Logo:
                            </div>                        
                            <div class="col-6">
                                <label for="img-logo" class="w-100 h-100 d-j-a">
                                    <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:160px;widht:600px;" class="preview-image shadow border rounded imgHover" src='../../public/img/logo/<?=$logo?>'>
                                    <input id="img-logo" class="image-input" type="file" hidden name="logo">
                                </label>                                
                            </div>                        
                        </div>
                        <h6 class="text-center">Trocar Publicidade</h6>
                        <div class="row mt-2 d-j-a">
                            <div class="col-10">
                                <label for="img-publi01" class="d-j-a">
                                    <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:125px;" class="preview-image shadow rounded w-100 imgHover" src='../../../public/img/slide_logo/<?=$img[1]['img']?>' onerror="substituirBannerErro3(this)">
                                    <input id="img-publi01" class="image-input" type="file" hidden  name="img_slide1">
                                </label>
                            </div> 
                            <div class="col-10">                                
                                <div class="form-floating mt-2">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="link1" value="<?=$img_link[1]['link']?>">
                                    <label for="floatingInput">Link da Publicidade:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 d-j-a">
                            <div class="col-10">
                                <label for="img-publi02" class="d-j-a">
                                    <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:125px;" class="preview-image shadow rounded w-100 imgHover" src='../../../public/img/slide_logo/<?=$img[2]['img']?>' onerror="substituirBannerErro2(this)">
                                    <input id="img-publi02" class="image-input" type="file" hidden  name="img_slide2">
                                </label>                                
                            </div> 
                            <div class="col-10">                                
                                <div class="form-floating mt-2">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="link2" value="<?=$img_link[2]['link']?>">
                                    <label for="floatingInput">Link da Publicidade:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 d-j-a">
                            <div class="col-10">
                                <label for="img-publi03" class="d-j-a">
                                    <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:125px;" class="preview-image shadow rounded w-100 imgHover" src='../../../public/img/slide_logo/<?=$img[3]['img']?>' onerror="substituirBannerErro1(this)">
                                    <input id="img-publi03" class="image-input" type="file" hidden  name="img_slide3">
                                </label>
                            </div> 
                            <div class="col-10">                                
                                <div class="form-floating mt-2">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="link3" value="<?=$img_link[3]['link']?>">
                                    <label for="floatingInput">Link da Publicidade:</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" name="salvar" class="btn btn-primary" value="Salvar">
                </div>
            </div>
        </div>
    </div>
</form>



