<?php
include('../models/conexao.php');
$radio = $conexao->query("SELECT * FROM informacao_radio WHERE id=1");
foreach($radio as $row){
    $nome_radio = $row['nome_radio'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php include('../views/estrutura/head.php'); ?>
<body>
    <form action="../painel/controllers/LoginController.php" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 ColRadio d-j-a">
                    <i class="fa-solid fa-microphone-lines"></i>
                    <h1 class="NomeRadio ms-2"><?=$nome_radio?></h1>
                </div>
                <div class="col-lg-6 ColInput d-j-a">
                    <div class="Input rounded pt-5 pb-5 ps-2 pe-2">
                        <div class="form-floating mb-3">
                            <input type="text" name="login" class="shadow border form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email ou CPF:</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="senha" class="shadow border form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Senha</label>
                        </div>
                        <div class="w-100 d-j-a mt-4">
                            <button type="submit" class="btn btn-primary w-75 fs-4" name="entrar">Entrar <i class="fa-solid fa-arrow-right"></i></button>
                        </div>                    
                    </div>                
                </div>
            </div>
        </div>
    </form>
</body>
</html>