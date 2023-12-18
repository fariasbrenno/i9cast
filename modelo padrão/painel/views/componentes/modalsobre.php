

<!-- ATUALIZAR SOBRE -->
<form action="controllers/SobreController.php" method="post">
    <div class="modal fade" id="atualizar_sobre" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Sobre Sua Web Rádio</h2>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-12">                                
                                <textarea style="height: 100px;" class="form-control" aria-label="With textarea" name="sobre" maxlength="185"><?=$sobre?></textarea>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar_sobre">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>