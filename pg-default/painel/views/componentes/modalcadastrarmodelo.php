
<!-- ATUALIZAR -->
<form action="controllers/AlterarModeloController.php" method="post">
    <div class="modal fade" id="cadastrar_modelo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">

                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Cadastrar Modelo</h2>
                                <p class="text-center">alterar modelo do site</p>
                            </div>
                        </div>  

                        <div class="row"> 
                            <div class="col-12 mt-1">                               
                                <div class="form-floating w-100">
                                    <select name="modelo" class="form-select text-center" aria-label="Default select example">
                                        <option disabled selected>--Escolher--</option>
                                        <option value="1">Modelo 01</option>
                                        <option value="2">Modelo 02</option>
                                        <option value="3">Modelo 03</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#modal_menu">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar_modelo">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

