

<!-- OFFCANVA YOUTUBE -->    
    <form id="salvar-youtube">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasYoutube" aria-labelledby="offcanvasYoutubeLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Meus contatos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">               
                <div class="form-floating mb-1">
                    <input type="url" class="form-control" id="youtube" placeholder="name@example.com">
                    <label for="youtube">Link Vídeo do Youtube:</label>
                </div>
                <div class="dja">
                    <button type="submit" class="btn btn-primary w-25 ms-auto">salvar</button>
                </div>
            </div>
        </div>
    </form>

<!-- SCRIPT AJAX DE CADASTRO --> 
    <script>
        $(document).ready(function() {
            $('#salvar-youtube').submit(function(e) {
                e.preventDefault();

                var youtube = $('#youtube').val();
                var dados = {
                    youtube: youtube
                }
                $.ajax({
                    method: 'POST',
                    data: dados,
                    url: 'controllers/RedesSocialController.php',
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