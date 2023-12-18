
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');


    if (isset($_POST['senha'])) {

        $senha = $_POST["senha"];

        if (!empty($senha)) {

            $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);
            $stmt = $conexao->prepare("UPDATE usuario SET senha = ? WHERE id = 1");

            if ($stmt) {
                $stmt->bind_param("s", $senha_hashed);
                $stmt->execute();
                $stmt->close();
            };
        };
    };   
};

?>
