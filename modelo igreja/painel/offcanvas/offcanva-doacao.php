

<!-- OFFCANVA DOAÇÃO -->    
    <form id="salvar-doacao" enctype="multipart/form-data">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasDoacao" aria-labelledby="offcanvasDoacaoLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Dados Para Doação</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">     
                <div class="row">
                    <div class="col-lg-6">
                        <label for="qr_code" style="height:300px;" class="border rounded dja">
                            <div style="position: absolute;" class="text-center">
                                <i class="fa-solid fa-plus fs-1"></i>
                                <h3>adicionar</h3>
                            </div>                            
                            <img class="preview-image w-100 h-100 z-3 rounded">
                            <input class="image-input" type="file" id="qr_code" hidden>
                        </label>                        
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nome" placeholder="name@example.com">
                            <label for="nome">Nome proprietario do PIX:</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="chave_pix" placeholder="name@example.com">
                            <label for="chave_pix">Chave PIX:</label>
                        </div>
                    </div>
                </div>          
                <div class="dja mt-4">
                    <button class="btn btn-primary btn-salvar p-2">salvar</button>
                </div>
            </div>
        </div>
    </form>

<!-- SCRIPT AJAX DE CADASTRO --> 
    <script>
        $(document).ready(function() {
            $('#salvar-doacao').submit(function(e) {
                e.preventDefault();

                var formData = new FormData();
                
                var fileInput = $('#qr_code')[0].files[0];
                formData.append('qr_code', fileInput);
                var nome = $('#nome').val();
                formData.append('nome', nome);
                var chave_pix = $('#chave_pix').val();
                formData.append('chave_pix', chave_pix);

                $.ajax({
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    url: 'controllers/DoacaoController.php',
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