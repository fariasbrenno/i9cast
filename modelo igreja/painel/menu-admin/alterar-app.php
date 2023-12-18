

<!-- OFFCANVA ESTATISTICAS DE OUVINTES -->    
    <form id="alterar-app">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasAlterarApp" aria-labelledby="offcanvasAlterarAppLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Modelo Aplicativo</h5>
                <button type="button" class="btn-close" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"></button>
            </div>
            <div class="offcanvas-body">               
                <div class="container text-black">
                    <div class="row row-cols-1 row-cols-md-1 dja">
                        <div class="col-lg-6 col-10">               
                                <select id="app" class="form-select text-center">
                                    <option disabled selected>--Escolher aqui--</option>
                                    <option value="1">Modelo 01</option>
                                    <option value="2">Modelo 02</option>
                                    <option value="3">Modelo 03</option>
                                </select>
                        </div>
                    </div>      
                    <div class="row dja p-2">
                        <div class="col-lg-6 dja mt-2">
                            <img id="app-1" width="205" height="355" class="rounded border shadow" src="app-1.png">
                            <img style="display: none;" id="app-2" width="205" height="355" class="rounded border shadow" src="app-2.png">
                            <img style="display: none;" id="app-3" width="205" height="355" class="rounded border shadow" src="app-3.png">
                        </div>
                        <div class="col-lg-6 dja mt-2">
                            <button class="btn btn-primary btn-salvar p-2">Salvar</button>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </form>

<!-- SCRIPT AJAX DE CADASTRO --> 
    <script>
        $(document).ready(function() {

            $('#app').change(function() {
                var selectedValue = $(this).val();
                if (selectedValue === '1') {
                    $('#app-1').show();
                    $('#app-2').hide();
                    $('#app-3').hide();
                } else if (selectedValue === '2') {
                    $('#app-1').hide();
                    $('#app-2').show();
                    $('#app-3').hide();
                } else if (selectedValue === '3') {
                    $('#app-1').hide();
                    $('#app-2').hide();
                    $('#app-3').show();
                }
            });

            $('#alterar-app').submit(function(e) {
                e.preventDefault();

                app = $('#app').val();

                $.ajax({
                    method: 'POST',
                    data: {app: app},
                    url: 'controllers/AlterarAppController.php',
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