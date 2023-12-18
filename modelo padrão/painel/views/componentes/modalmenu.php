
<!-- MODAL MENU -->
<form action="controllers/SairController.php" method="POST">
    <div class="modal fade" id="modal_menu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="fs-4">
                        <li class="m-3 menuHover PointerEvent" data-bs-toggle="modal" data-bs-target="#dados_radio">
                            <i class="fa-regular fa-folder-open"></i> - Dados da Rádio</li>
                        <li class="m-3 menuHover PointerEvent" data-bs-toggle="modal" data-bs-target="#atualizar_senha">
                            <i class="fa-solid fa-key"></i> - Trocar Senha</li>

                        <li class="m-3 menuHover PointerEvent" data-bs-toggle="modal" data-bs-target="#alterar_site">
                            <i class="fa-solid fa-rotate"></i> - Alterar Site</li>

                        <li class="m-3 menuHover PointerEvent" data-bs-toggle="modal" data-bs-target="#atualizar_app">
                            <i class="fa-brands fa-android"></i> - Atualização App</li>

                        <li class="m-3 menuHover PointerEvent" data-bs-toggle="modal" data-bs-target="#designer">
                            <i class="fa-solid fa-palette"></i> - Artes Personalizada</li>

                    <?php if ($_SESSION['nivel_permissao'] === 'admin'): ?>
                        <li class="m-3 menuHover PointerEvent" data-bs-toggle="modal" data-bs-target="#cadastrar_usuario">
                            <i class="fa-solid fa-user-plus"></i> - Cadastrar Usuario</li>
			            <li class="m-3 menuHover PointerEvent" data-bs-toggle="modal" data-bs-target="#cadastrar_radio">
                            <i class="fa-solid fa-radio"></i> - Cadastrar Radio</li>
                        <li class="m-3 menuHover PointerEvent" data-bs-toggle="modal" data-bs-target="#cadastrar_modelo">
                            <i class="fa-solid fa-rotate"></i> - Cadastrar Modelo</li>
                    <?php endif; ?>
                    
                        <li class="m-3 menuHover PointerEvent">                    
                            <a class="text-decoration-none text-dark" href="https://wa.me/+5548991366942?text=Olá,+Preciso+de+uma+ajuda!">
                            <i class="fa-solid fa-headset"></i> - Solicitar Ajuda</a>
                        </li>      

                        <button type="submit" name="sair" class="btn bg-secondary-subtle w-50"><i class="fa-solid fa-right-from-bracket"></i> - sair</button>
                    </ul>

                    <div class="modal-footer">
                        <button id="close" type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

