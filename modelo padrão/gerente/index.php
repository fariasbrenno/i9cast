
<!--LOGIN DE ADMINISTRADORES-->
<!DOCTYPE html>
<html lang="pt-br">
<?php include('../views/estrutura/head.php'); ?>
<body>
    <form action="../painel/controllers/LoginAdmController.php" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 ColRadio d-j-a">
                    <i class="fa-solid fa-user-tie"></i>
                    <h1 class="NomeRadio ms-2">i9cast <br> Admin</h1>
                </div>
                <div class="col-lg-6 ColInput d-j-a">
                    <div class="Input rounded pt-5 pb-5 ps-2 pe-2">
                        <div class="form-floating mb-3">
                            <input type="text" name="email" class="shadow border form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email:</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="senha" class="shadow border form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Senha</label>
                        </div>
                        <div class="w-100 d-j-a mt-4">
                            <button type="submit" class="btn btn-primary w-75 fs-4" name="entrar_adm">Entrar <i class="fa-solid fa-arrow-right"></i></button>
                        </div>                    
                    </div>                
                </div>
            </div>
        </div>
    </form>
</body>
</html>