

<!-- OFFCANVA ESTATISTICAS DE OUVINTES -->    
    <form id="salvar-dados-radio">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasRadio" aria-labelledby="offcanvasRadioLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Dados da Minha Rádio</h5>
                <button type="button" class="btn-close" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"></button>
            </div>
            <div class="offcanvas-body">               
                <div class="row row-cols-1 row-cols-md-1 dja">
                    <div class="col-lg-5 col-12">                                
                        <div class="form-floating m-1">
                            <input type="text" class="form-control" value="<?=$nome_radio?>">
                            <label>Nome Radio:</label>
                        </div>                        
                    </div> 
                    <div class="col-lg-5 col-12">
                        <div class="form-floating m-1">
                            <input type="text" class="form-control" value="<?=$ip?>">
                            <label>IP streaming:</label>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">                               
                        <div class="form-floating m-1">
                            <input type="text" class="form-control" value="<?=$porta?>">
                            <label>Porta streaming:</label>
                        </div>                        
                     </div> 
                     <div class="col-lg-5 col-12">
                        <div class="form-floating m-1">
                            <input type="text" class="form-control" value="<?=$senha_streaming?>">
                            <label>Senha streaming:</label>
                        </div>
                     </div>
                    <div class="col-lg-8 col-12 dja mt-3">      
                        <a href="http://ipstm.net" target="_blank" class="w-100 dja text-decoration-none">                          
                            <button type="button" class="btn btn-warning w-75 p-2">Acessar Painel Controle</button>
                        </a>
                    </div>
                </div>                
            </div>
        </div>
    </form>

<!-- SCRIPT AJAX DE CADASTRO --> 
    <script>
        $(document).ready(function() {
            $('#salvar-dados-radio').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    method: 'POST',
                    data: dados,
                    url: '',
                    success: function(response) {   
                        window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error('Erro na requisição AJAX:', error);
                        alert('Erro na requisição AJAX. Por favor, tente novamente mais tarde.');
                    }
                });

            });
        });
    </script>