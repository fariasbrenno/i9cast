

<!-- OFFCANVA RODAPÉ -->    
    <form id="salvar-rodape">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasRodape" aria-labelledby="offcanvasRodapeLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Meus contatos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">                
                <div class="form-floating mb-1">
                    <input type="url" class="form-control" id="facebook" placeholder="name@example.com">
                    <label for="facebook">Link Facebook:</label>
                </div>
                <div class="form-floating mb-1">
                    <input type="url" class="form-control" id="instagram" placeholder="name@example.com">
                    <label for="instagram">Link Instagram:</label>
                </div>
                <div class="form-floating mb-1">
                    <input type="url" class="form-control" id="tiktok" placeholder="name@example.com">
                    <label for="tiktok">Link Tiktok:</label>
                </div>
                <div class="form-floating mb-1">
                    <input type="url" class="form-control" id="twitter" placeholder="name@example.com">
                    <label for="twitter">Link Twitter:</label>
                </div>
                <div class="form-floating mb-1">
                    <input type="url" class="form-control" id="youtube" placeholder="name@example.com">
                    <label for="youtube">Link Youtube:</label>
                </div>
                <div class="form-floating mb-1">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">E-mail:</label>
                </div>
                <div class="form-floating mb-1">
                    <input type="text" class="form-control" id="whatsapp" placeholder="name@example.com">
                    <label for="whatsapp">Whatsapp:</label>
                </div>
                <div class="form-floating mb-1">
                    <input type="text" class="form-control" id="telefone" placeholder="name@example.com">
                    <label for="telefone">Telefone:</label>
                </div>
                <div class="dja mt-3">
                    <button type="submit" class="btn btn-primary p-2 btn-salvar">salvar</button>
                </div>
            </div>
        </div>
    </form>

<!-- SCRIPT AJAX DE CADASTRO --> 
    <script>
        $(document).ready(function() {

            $('#telefone').mask('(99) 99999-9999');
            $('#whatsapp').mask('(99) 99999-9999');

            $('#salvar-rodape').submit(function(e) {
                e.preventDefault();

                var facebook = $('#facebook').val();
                var instagram = $('#instagram').val();
                var telefone = $('#telefone').val();
                var whatsapp = $('#whatsapp').val();
                var tiktok = $('#tiktok').val();
                var email = $('#email').val();
                var twitter = $('#twitter').val();
                var youtube = $('#youtube').val();

                var dados = {
                    facebook: facebook,
                    telefone: telefone,
                    whatsapp: whatsapp,
                    instagram: instagram,
                    tiktok: tiktok,
                    email: email,
                    twitter: twitter,
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