

<!-- OFFCANVA ESTATISTICAS DE OUVINTES -->    
    <form id="cadastrar-usuario">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasUsuario" aria-labelledby="offcanvasUsuarioLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Dados do Cliente</h5>
                <button type="button" class="btn-close" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"></button>
            </div>
            <div class="offcanvas-body">        
                <div class="container"> 
                    <div class="row row-cols-1 row-cols-md-1 dja">
                        <div class="col-12 col-lg-10">                               
                            <div class="form-floating m-1">
                                <input type="email" class="form-control" id="e_mail" placeholder="name@example.com">
                                <label for="e_mail">E-mail:</label>
                            </div>
                        </div>                         
                    </div>
                    <div class="row row-cols-1 row-cols-md-1 dja">
                        <div class="col-12 col-lg-5">                                
                            <div class="form-floating m-1">
                                <input type="text" class="form-control" id="senha" placeholder="name@example.com">
                                <label for="senha">Senha:</label>
                            </div>   
                        </div> 
                        <div class="col-12 col-lg-5">                                                     
                            <div class="form-floating m-1">
                                <input type="text" class="form-control" id="confirmar_senha" placeholder="name@example.com">
                                <label for="confirmar_senha">Confirmar Senha:</label>
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
            $('#cadastrar-usuario').submit(function(e) {
                e.preventDefault();

                email = $('#e_mail').val();
                senha = $('#senha').val();
                confirmar_senha = $('#confirmar_senha').val();

                var dados = {
                    email: email,
                    senha: senha,
                    confirmar_senha: confirmar_senha
                }

                $.ajax({
                    method: 'POST',
                    data: dados,
                    url: 'controllers/CadastrarUsuarioController.php',
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