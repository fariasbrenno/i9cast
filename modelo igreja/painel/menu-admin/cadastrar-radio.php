

<!-- OFFCANVA ESTATISTICAS DE OUVINTES -->    
    <form id="cadastrar-radio">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasCadastrarRadio" aria-labelledby="offcanvasCadastrarRadioLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Dados da Rádio</h5>
                <button type="button" class="btn-close" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"></button>
            </div>
            <div class="offcanvas-body">               
                <div class="container"> 
                    <div class="row row-cols-1 row-cols-md-1 dja">
                        <div class="col-lg-10 col-12">                                
                            <div class="form-floating m-1">
                                <input type="text" id="nome_radio" class="form-control" placeholder="name@example.com" required>
                                <label for="nome_radio">Nome Radio:</label>
                            </div>
                        </div>                                                    
                        <div class="col-lg-10 col-12">                               
                            <div class="form-floating m-1">
                                <input type="text" class="form-control" id="api" placeholder="name@example.com" required>
                                <label for="api">API streaming:</label>
                            </div>
                        </div>                        
                    </div>
                    <div class="row row-cols-1 row-cols-md-1 dja">
                        <div class="col-lg-5 col-12">                                
                            <div class="form-floating m-1">
                                <input type="text" class="form-control" id="ip" placeholder="name@example.com" required>
                                <label for="ip">IP:</label>
                            </div>                            
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="form-floating m-1">
                                <input type="text" class="form-control" id="porta" placeholder="name@example.com" required>
                                <label for="porta">Porta:</label>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-1 dja">
                        <div class="col-lg-5 col-12">
                            <div class="form-floating m-1">
                                <input type="text" class="form-control" id="senha_streaming" placeholder="name@example.com" required>
                                <label for="senha_streaming">Senha streaming:</label>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="form-floating m-1">
                                <input type="text" class="form-control" id="genero" placeholder="name@example.com" required>
                                <label for="genero">Genero:</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 dja mt-5">
                    <button class="btn btn-primary btn-salvar p-2">Salvar</button>
                </div>
            </div>
        </div>
    </form>

<!-- SCRIPT AJAX DE CADASTRO --> 
    <script>
        $(document).ready(function() {
            $('#cadastrar-radio').submit(function(e) {
                e.preventDefault();

                var nome_radio = $('#nome_radio').val();
                var ip = $('#ip').val();
                var porta = $('#porta').val();
                var api = $('#api').val();
                var senha_streaming = $('#senha_streaming').val();
                var genero = $('#genero').val();

                var dados = {
                    nome_radio: nome_radio,
                    ip: ip,
                    porta: porta,
                    api: api,
                    senha_streaming: senha_streaming,
                    genero: genero
                }


                $.ajax({
                    method: 'POST',
                    data: dados,
                    url: 'controllers/CadastrarRadioController.php',
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