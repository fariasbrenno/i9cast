

<!-- CADASTRAR USUARIO -->
<form action="controllers/CadastrarRadioController.php" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="cadastrar_radio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">                
                    <div class="container"> 
                        <div class="row">
                            <div class="col-12 p-4">                               
                                <h1 class="text-center">Dados da Rádio</h1>
                            </div>
                            <div class="col-12">                                
                                <div class="form-floating mt-2">
                                    <input type="text" name="nome" class="form-control" id="email" placeholder="name@example.com" value="<?=$nome_radio?>">
                                    <label for="email">Nome Radio:</label>
                                </div>
                            </div> 
                                <div class="col-12 df">                                
                                    <div class="form-floating w-50 mt-2">
                                        <input type="text" name="ip" class="form-control" id="cpf" placeholder="name@example.com" value="<?=$ip?>">
                                        <label for="cpf">IP:</label>
                                    </div>
                                    <div class="form-floating w-50 mt-2">
                                        <input type="text" name="porta" class="form-control" id="senha" placeholder="name@example.com" value="<?=$porta?>">
                                        <label for="senha">Porta:</label>
                                    </div>
                                </div>                           
                            <div class="col-12 df">                               
                                <div class="form-floating w-50 mt-2">
                                    <input type="text" name="api" class="form-control" id="confirmar_senha" placeholder="name@example.com" value="<?=$api?>">
                                    <label for="confirmar_senha">API streaming:</label>
                                </div>
                                <div class="form-floating w-50 mt-2">
                                        <input type="text" name="senha_streaming" class="form-control" id="senha_streaming" placeholder="name@example.com" value="<?=$senha_streaming?>">
                                        <label for="senha_streaming">Senha streaming:</label>
                                    </div>
                            </div>
                            <div class="col-12">                               
                                <div class="form-floating mt-2">
                                    <input type="url" name="google_play" class="form-control" id="google_play" placeholder="name@example.com" value="<?=$link_google_play?>">
                                    <label for="google_play">Link Google Play:</label>
                                </div>
                            </div>
                            <div class="col-12 d-j-a">                               
                                <div class="form-floating w-75 mt-2">
                                    <input type="text" name="nome_apk" class="form-control" id="nome_apk" placeholder="name@example.com" value="<?=$link_aplicativo?>">
                                    <label for="nome_apk">Nome Aplicativo:</label>
                                </div>
                                <div class="w-25 mt-2 PointerEvent menuHover">
                                    <label for="apk" class="d-j-a">
                                        <i class="apkIcon fa-solid fa-cloud-arrow-up fs-1"></i>
                                        <input type="file" name="apk" id="apk" hidden>                                        
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal_menu">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar_radio">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>



<script>
    $(document).ready(function(){
        $('#apk').on('change', function(){
            var apkValue = $(this).val();

            if (apkValue !== '') {
                $('.apkIcon').css('color', 'green');
                $('.reset').css('display', 'block');
            } else {
                $('.apkIcon').css('color', ''); // Restaurar a cor padrão se nenhum arquivo for selecionado
            }
        });
    });
</script>