

<!-- ATUALIZAR SENHA -->
<form id="form_AlterarSenha">
    <div class="modal fade" id="atualizar_senha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">               
                    <div class="container"> 
                        <div class="row">
                            <div class="col-12 p-4">                                
                                <h1 class="text-center">Atualizar Senha</h1>
                                <div style="display: none;" class='alerta_senha alert alert-danger' role='alert'>Senhas não coincidem!</div>
                                <div style="display: none;" id="senha_salva" class="alert alert-success" role="alert">Senha Salvar!</div>
                            </div>
                            <div class="col-12">                                
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="senha_atual" placeholder="Digite a nova senha">
                                    <label for="senha_atual">Nova Senha:</label>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#modal_menu">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

