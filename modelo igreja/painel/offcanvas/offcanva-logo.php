

<!-- OFFCANVA ALTERAR LOGOMARCA -->    
    <form id="salvar-logo" enctype="multipart/form-data">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasLogo" aria-labelledby="offcanvasLogoLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Logo Marca</h5>
                <button type="button" class="btn-close" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"></button>
            </div>
            <div class="offcanvas-body">  
                <div class="text-center">
                    <h5>Tamanho Recomendado</h5>
                    <p>500 x 500 pixel</p>
                </div>             
                <div class="row p-2">
                    <div class="col-lg-5">                        
                        <label for="logo" style="height:300px;" class="border rounded dja">
                            <div style="position: absolute;" class="text-center">
                                <i class="fa-solid fa-plus fs-1"></i>
                                <h3>adicionar</h3>
                            </div>                            
                            <img class="preview-image w-100 h-100 z-3 rounded">
                            <input class="image-input" type="file" id="logo" hidden>
                        </label>                           
                    </div>
                    <div class="col-lg-6 dja mt-3">
                        <button type="submit" class="btn btn-primary w-75 p-2">salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

<!-- SCRIPT AJAX DE CADASTRO --> 
    <script>
        $(document).ready(function() {
            $('#salvar-logo').submit(function(e) {
                e.preventDefault();

                var formData = new FormData();
                var fileInput = $("#logo")[0].files[0];
                formData.append('logo', fileInput);

                $.ajax({
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    url: 'controllers/LogoController.php',
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