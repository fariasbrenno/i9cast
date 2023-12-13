

<!-- CADASTRAR USUARIO -->
    <div class="modal fade" id="dados_radio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">                
                    <div class="container"> 
                        <div class="row">
                            <div class="col-12 p-4">                               
                                <h1 class="text-center">Minha Web Rádio</h1>
                            </div>
                            <div class="col-12 df">                                
                                <div class="form-floating w-50 mt-2">
                                    <input type="text" class="form-control" id="dados_nome" placeholder="name@example.com" value="<?=$nome_radio?>">
                                    <label for="dados_nome">Nome Radio:</label>
                                </div>
                                <div class="form-floating w-50 mt-2">
                                    <input type="text" class="form-control" id="dados_ip" placeholder="name@example.com" value="<?=$ip?>">
                                    <label for="dados_ip">IP streaming:</label>
                                </div>
                            </div> 
                            <div class="col-12 df">                               
                                <div class="form-floating w-50 mt-2">
                                    <input type="text" class="form-control" id="dados_porta" placeholder="name@example.com" value="<?=$porta?>">
                                    <label for="dados_porta">Porta streaming:</label>
                                </div>
                                <div class="form-floating mt-2">
                                    <input type="text" class="form-control" id="dados_senha" placeholder="name@example.com" value="<?=$senha_streaming?>">
                                    <label for="dados_senha">Senha streaming:</label>
                                </div>
                            </div> 
                            <div class="col-12">      
                                <a href="http://ipstm.net" target="_blank" class="pt-2 pb-4 d-j-a">                          
                                    <button type="button" class="btn btn-primary w-75">Acessar Painel Streaming</button>
                                </a>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12 mt-2">                    
                                <a href="../app/<?=$link_aplicativo?>.apk" class="text-decoration-none">
                                    <div class="input-group">                                        
                                        <input disabled type="text" class="form-control" value="<?=$link_aplicativo?>.apk">
                                        <span class="input-group-text btn btn-primary">Baixar Aplicativo</span>
                                    </div>
                                </a>
                            </div>
                <?php if ($link_google_play == ''): else: ?>
                            <div class="col-12 mt-2">                
                                <a href="<?=$link_google_play?>" class="text-decoration-none" target="_blank">
                                    <div class="input-group">                                        
                                        <input disabled type="text" class="form-control" value="<?=$link_google_play?>">
                                        <span class="input-group-text btn btn-primary">Acessar App Google Play </span>
                                    </div>
                                </a>                    
                            </div>
                    <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal_menu">Sair</button>                    
                </div>
            </div>
        </div>
    </div>

