

<!-- ATUALIZAR FOTOS -->
<form action="controllers/FotoController.php" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="atualizar_fotos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Atualizar Fotos</h2>
                                <p class="text-center">Mude somente a desejada</p>
                            </div>
                        </div>                    
                        <div class="row mt-2">
                            <div class="col-6">
                                <label for="foto-01" class="w-100 h-100 d-j-a">
                                <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:150px;" class="preview-image rounded w-100 imgHover" src="../../../public/img/fotos/<?=$foto[1]['foto']?>">                                
                                    <input id="foto-01" type="file" hidden class="image-input" name="foto_01">
                                </label>
                            </div> 
                            <div class="col-6">
                                <label for="foto-02" class="w-100 h-100 d-j-a">
                                <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:150px;" class="preview-image rounded w-100 imgHover" src="../../../public/img/fotos/<?=$foto[2]['foto']?>">
                                    <input id="foto-02" type="file" hidden class="image-input" name="foto_02">
                                </label>
                            </div> 
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <label for="foto-03" class="w-100 h-100 d-j-a">
                                <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:150px;" class="preview-image rounded w-100 imgHover" src="../../../public/img/fotos/<?=$foto[3]['foto']?>">                               
                                    <input id="foto-03" type="file" hidden class="image-input" name="foto_03">
                                </label>
                            </div> 
                            <div class="col-6">
                                <label for="foto-04" class="w-100 h-100 d-j-a">
                                <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:150px;" class="preview-image rounded w-100 imgHover" src="../../../public/img/fotos/<?=$foto[4]['foto']?>">
                                    <input id="foto-04" type="file" hidden class="image-input" name="foto_04">
                                </label>
                            </div> 
                        </div>
                        <div style="height:150px;" class="row mt-2">
                            <div class="col-6">
                                <label for="foto-05" class="w-100 h-100 d-j-a">
                                <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:150px;" class="preview-image rounded w-100 imgHover" src="../../../public/img/fotos/<?=$foto[5]['foto']?>">                                
                                    <input id="foto-05" type="file" hidden class="image-input" name="foto_05">
                                </label>
                            </div> 
                            <div class="col-6 ">
                                <label for="foto-06" class="w-100 h-100 d-j-a">
                                <div style="width:50px;height:50px;position:absolute;" class="rounded-circle bg-info-subtle d-j-a fs-4 PointerEvent menuHover z-3"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <img style="height:150px;" class="preview-image rounded w-100 imgHover" src="../../../public/img/fotos/<?=$foto[6]['foto']?>">
                                    <input id="foto-06" type="file" hidden class="image-input" name="foto_06">
                                </label>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar_fotos">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>