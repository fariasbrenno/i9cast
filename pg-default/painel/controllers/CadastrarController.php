
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    // ATUALIZAR SENHA
    if (isset($_POST['salvar_usuario'])) {
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $senha = $_POST["senha"];
        $confirmarSenha = $_POST["confirmar_senha"];

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $confirmarSenhaHash = password_hash($confirmarSenha, PASSWORD_DEFAULT);

        if (!empty($senhaHash) && !empty($confirmarSenhaHash) && !empty($email) && !empty($cpf)) {        

            // Verifica se as senhas digitadas são iguais
            if (password_verify($senha, $confirmarSenhaHash)) {

                $data = $conexao->prepare("UPDATE usuario SET senha = '$senhaHash', email= '$email', cpf= '$cpf' WHERE id = 1 ");
                $data->execute();            
                $data->close();
            };
        };

    };

    // REDIRECIONAMENTO PARA A PAGINA DESEJADA
    redirect("../");

};

?>

