

<!-- OFFCANVA ESTATISTICAS DE OUVINTES -->    
    <form id="alterar-site">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasAlterarSite" aria-labelledby="offcanvasAlterarSiteLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Modelo do Site</h5>
                <button type="button" class="btn-close" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"></button>
            </div>
            <div class="offcanvas-body"> 
                <div class="row row-cols-1 row-cols-md-1 dja"> 
                    <div class="col-lg-5 col-12">                               
                        <div class="form-floating">
                            <select id="modelo" class="form-select text-center" aria-label="Default select example">
                                <option disabled selected>--Escolher--</option>
                                <option value="1">Modelo 01</option>
                                <option value="2">Modelo 02</option>
                                <option value="3">Modelo 03</option>
                            </select>
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
            $('#alterar-site').submit(function(e) {
                e.preventDefault();

                modelo = $('#modelo').val();

                $.ajax({
                    method: 'POST',
                    data: {modelo: modelo},
                    url: 'controllers/AlterarSiteController.php',
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