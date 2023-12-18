

<!--LOGIN DE ADMINISTRADORES-->
<!DOCTYPE html>
<html lang="pt-br">
<?php include('../estrutura/head.php'); ?>
<style>   
    .dja{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .ColRadio{
        height: 100vh;
    }
    .ColInput{
        height: 100vh;
    }
    .fa-microphone-lines, .fa-user-tie{
        font-size: 200px;
    }
    .NomeRadio{
        font-size: 100px;
    }
    .Input{
        width: 70%;
        box-shadow: 0 0 4px blue;
    }
    @media screen and (max-width: 758px) {
        .ColRadio{
            height: 200px;
        }
        .ColInput{
            height: 400px;
        }
        .fa-microphone-lines, .fa-user-tie{
            font-size: 100px;
        }
        .NomeRadio{
            font-size: 40px;
        }
        .Input{
            width: 100%;
        }
    }

</style>
<body>
    <form action="../painel/controllers/LoginAdmController.php" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 ColRadio dja">
                    <i class="fa-solid fa-user-tie"></i>
                    <h1 class="NomeRadio ms-2">i9cast <br> Admin</h1>
                </div>
                <div class="col-lg-6 ColInput dja">
                    <div class="Input rounded pt-5 pb-5 ps-2 pe-2">
                        <div class="form-floating mb-3">
                            <input type="text" name="email" class="shadow border form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email:</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="senha" class="shadow border form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Senha:</label>
                        </div>
                        <div class="w-100 dja mt-4">
                            <button type="submit" class="btn btn-primary w-75 fs-4" name="entrar_adm">Entrar <i class="fa-solid fa-arrow-right"></i></button>
                        </div>                    
                    </div>                
                </div>
            </div>
        </div>
    </form>
</body>
</html>