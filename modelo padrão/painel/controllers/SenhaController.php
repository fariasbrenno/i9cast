
<?php

// Verifica se a solicitação é um POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Inclui o arquivo de conexão com o banco de dados
    include('../../models/conexao.php');

    // Função para limpar e validar os dados recebidos do formulário
    function limpar_dado($dado) {
        return trim(htmlspecialchars($dado, ENT_QUOTES, 'UTF-8'));
    }

    // Verifica se o campo de senha foi enviado
    if (isset($_POST['senha'])) {

        // Limpa e valida a senha recebida do formulário
        $senha = limpar_dado($_POST["senha"]);

        // Verifica se a senha não está vazia
        if (!empty($senha)) {

            // Hash da senha usando a função password_hash()
            $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

            // Prepara a declaração SQL usando prepared statement
            $stmt = $conexao->prepare("UPDATE usuario SET senha = ? WHERE id = 1");
            if ($stmt) {

                // Atribui o valor da senha hash ao parâmetro da declaração SQL
                $stmt->bind_param("s", $senha_hashed);
                $stmt->execute();

                // Fecha a declaração e a conexão com o banco de dados
                $stmt->close();
                $conexao->close();

            };
        };
    };
   
};
?>
