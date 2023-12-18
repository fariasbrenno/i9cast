

<!-- MENU LATERAL OFFCANVAS -->
    <div class="offcanvas offcanvas-end border offcanva-adm" data-bs-backdrop="false" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close m-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            <button class="btn btn-primary border w-50 m-1 scale" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLogo" aria-controls="offcanvasLogo">Alterar logo</button>
            <button class="btn btn-primary border w-50 m-1 scale" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFundo" aria-controls="offcanvasFundo">Alterar fundo</button>            
        </div>
        <div class="offcanvas-body">
            <ul class="w-75">
                <div class="m-2 df">
                    <h5>Dados da rádio</h5>
                    <div class="border rounded-circle dja ms-auto scale menu-adm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRadio" aria-controls="offcanvasRadio">                
                        <i class="fa-solid fa-microphone"></i>
                    </div>
                </div>
                <div class="m-2 df">
                    <h5>Trocar senha</h5>
                    <div class="border rounded-circle dja ms-auto menu-adm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSenha" aria-controls="offcanvasSenha">                
                        <i class="fa-solid fa-key"></i>
                    </div>
                </div>
                <div class="m-2 df">
                    <h5>Alterar site</h5>
                    <div class="border rounded-circle dja ms-auto menu-adm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAlterarSite" aria-controls="offcanvasAlterarSite">                
                        <i class="fa-solid fa-repeat"></i>
                    </div>
                </div>
                <div class="m-2 df">
                    <h5>Alterar App</h5>
                    <div class="border rounded-circle dja ms-auto menu-adm"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasAlterarApp" aria-controls="offcanvasAlterarApp">                
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                </div>
                <div class="m-2 df">
                    <h5>Estatísticas</h5>
                    <div class="border rounded-circle dja ms-auto menu-adm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEstatisticas" aria-controls="offcanvasEstatisticas">                
                        <i class="fa-solid fa-eye"></i>
                    </div>
                </div>
                <div class="m-2 df">
                    <h5>Cadastrar usuario</h5>
                    <div class="border rounded-circle dja ms-auto menu-adm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasUsuario" aria-controls="offcanvasUsuario">                
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
                <div class="m-2 df">
                    <h5>Cadastrar rádio</h5>
                    <div class="border rounded-circle dja ms-auto menu-adm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCadastrarRadio" aria-controls="offcanvasCadastrarRadio">                
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
                <button id="sair" class="btn btn-danger border p-2 scale">Sair do painel</button>
            </ul>                
        </div>
    </div>

<!-- SCRIPT AJAX DE CADASTRO --> 
<script>
        $(document).ready(function() {
            $('#sair').click(function() {

                var sair = 'sair';
                var dados = {
                    sair: sair
                }

                $.ajax({
                    method: 'POST',
                    data: dados,
                    url: 'controllers/SairController.php',
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