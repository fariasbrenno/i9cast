

<!-- CADASTRAR USUARIO -->
<form action="controllers/CadastrarController.php" method="post">
    <div class="modal fade" id="cadastrar_usuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">               
                    <div class="container"> 
                        <div class="row">
                            <div class="col-12 p-4">                                
                                <h1 class="text-center">Cadastrar Cliente</h1>
                                <div style="display: none;" class='alerta_senha alert alert-danger' role='alert'>Senhas não coincidem!</div>
                                <div style="display: none;" id="alerta_salva" class="alert alert-success" role="alert">Senha Salvar!</div>
                            </div>
                            <div class="col-12">                               
                                <div class="form-floating mt-2">
                                    <input type="text" name="email" class="form-control" id="email" placeholder="name@example.com" value="<?=$email?>">
                                    <label for="email">E-mail:</label>
                                </div>
                            </div> 
                            <div class="col-12">                                
                                <div class="form-floating mt-2">
                                    <input type="text" name="cpf" class="form-control" id="cpf" placeholder="name@example.com" value="<?=$cpf?>">
                                    <label for="cpf">CPF:</label>
                                </div>
                            </div>
                            <div class="col-12">                                
                                <div class="form-floating mt-2">
                                    <input type="text" name="senha" class="form-control" id="senha" placeholder="name@example.com">
                                    <label for="senha">Senha:</label>
                                </div>
                            </div>
                            <div class="col-12">                                
                                <div class="form-floating mt-2">
                                    <input type="text" name="confirmar_senha" class="form-control" id="confirmar_senha" placeholder="name@example.com">
                                    <label for="confirmar_senha">Confirmar Senha:</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal_menu">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar_usuario">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>



