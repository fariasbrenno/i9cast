

<!-- ATUALIZAR REDES SOCIAIS -->
<form action="controllers/SocialController.php" method="post">
    <div class="modal fade" id="atualizar_sociais" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Atualizar Redes Sociais</h2>
                                <p class="text-center">Mude somente o necessário</p>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-12">                               
                                <div class="form-floating mt-1">
                                    <input type="text" class="telefone form-control" id="floatingInput" placeholder="name@example.com" name="telefone" value="<?=$telefone?>">
                                    <label for="floatingInput">Número de Contato:</label>
                                </div>
                            </div>
                            <div class="col-12">                                
                                <div class="form-floating mt-1">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="facebook" value="<?=$facebook?>">
                                    <label for="floatingInput">Link Facebook:</label>
                                </div>
                            </div>
                            <div class="col-12">                               
                                <div class="form-floating mt-1">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="instagram" value="<?=$instagram?>">
                                    <label for="floatingInput">Link Instagram:</label>
                                </div>
                            </div>
                            <div class="col-12">                                
                                <div class="form-floating mt-1">
                                    <input type="text" class="whatsapp form-control" id="floatingInput" placeholder="name@example.com" name="whatsapp" value="<?=$whatsapp?>">
                                    <label for="floatingInput">Número de Whatsapp:</label>
                                </div>
                            </div>
                            <div class="col-12">                                
                                <div class="form-floating mt-1">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="tiktok" value="<?=$tiktok?>">
                                    <label for="floatingInput">Link TikTok:</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar_social">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>