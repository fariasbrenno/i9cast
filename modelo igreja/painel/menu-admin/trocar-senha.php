

<!-- OFFCANVA ESTATISTICAS DE OUVINTES -->    
    <form id="trocar-senha">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasSenha" aria-labelledby="offcanvasSenhaLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Alterar Senha</h5>
                <button type="button" class="btn-close" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"></button>
            </div>
            <div class="offcanvas-body">               
                <div class="row row-cols-1 row-cols-md-1 dja">
                    <div class="col-lg-5 col-12">                                
                        <div class="form-floating">
                            <input type="text" class="form-control" id="senha_nova" placeholder="Digite a nova senha">
                            <label for="senha_nova">Nova Senha:</label>
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
            $('#trocar-senha').submit(function(e) {
                e.preventDefault();

                var senha = $('#senha_nova').val();

                $.ajax({
                    method: 'POST',
                    data: {senha: senha},
                    url: 'controllers/SenhaController.php',
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