
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confirmarSenha = $_POST["confirmar_senha"];
        $id = 1;

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $confirmarSenhaHash = password_hash($confirmarSenha, PASSWORD_DEFAULT);

        if (!empty($senhaHash) && !empty($confirmarSenhaHash) && !empty($email)) {        

            if (password_verify($senha, $confirmarSenhaHash)) {
                $data = $conexao->prepare("UPDATE usuario SET senha = ?, email = ? WHERE id = $id ");
                $data->bind_param("ss", $senhaHash, $email);
                $data->execute();            
                $data->close();
            };
        };

};

?>

