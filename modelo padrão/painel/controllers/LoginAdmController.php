<?php

session_start();

include('../../models/conexao.php');

// Verifica se a solicitação é um POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Função para limpar e validar os dados recebidos do formulário
    function limpar_dado($dado) {
        return trim(htmlspecialchars($dado, ENT_QUOTES, 'UTF-8'));
    }

    // Verifica se o campo de email e senha foi enviado
    if (isset($_POST['email']) && isset($_POST['senha'])) {

        // Limpa e valida o email e senha recebidos do formulário
        $email = limpar_dado($_POST['email']);
        $senha = limpar_dado($_POST['senha']);

        // Verifica se o email e senha não estão vazios
        if (!empty($email) && !empty($senha)) {

            // Prepara a declaração SQL usando prepared statement
            $consulta = $conexao->prepare("SELECT * FROM admin WHERE email = ?");
            if ($consulta) {

                // Atribui o valor do email ao parâmetro da declaração SQL
                $consulta->bind_param("s", $email);

                // Executa a declaração SQL
                $consulta->execute();

                // Obtém o resultado da consulta
                $resultado = $consulta->get_result();

                // Verifica se foi encontrado um registro com o email informado
                if ($resultado->num_rows === 1) {
                    $admin = $resultado->fetch_assoc();

                    // Verifica se a senha digitada corresponde ao hash armazenado no banco de dados
                    if (password_verify($senha, $admin['senha'])) {

                        // Define as informações do administrador na sessão
                        $_SESSION['id'] = $admin['id'];
                        $_SESSION['email'] = $admin['email'];
                        $_SESSION['nivel_permissao'] = $admin['nivel_permissao'];

                        // Redireciona para a página do painel de administração após o login bem-sucedido
                        header('Location: ../');
                        exit;
                    } else {
                        // Senha incorreta, redireciona de volta para a página de login
                        header('Location: ../../gerente');
                        exit;
                    }
                } else {
                    // Adm não encontrado, mensagem de erro exibida
                    echo "Administrador não encontrado. Verifique o email informado.";
                }

                // Fecha a declaração e a conexão com o banco de dados
                $consulta->close();
                $conexao->close();
            } else {
                // Tratar erro na preparação da declaração SQL
                // (pode ser uma boa ideia registrar o erro em um arquivo de log)
                echo "Erro na preparação da declaração SQL.";
            }
        } else {
            // Tratar campos vazios
            // (pode ser uma boa ideia redirecionar para uma página de erro ou registrar o erro em um arquivo de log)
            echo "Por favor, preencha todos os campos.";
        }
    } else {
        // Tratar campo de email ou senha não enviado
        // (pode ser uma boa ideia redirecionar para uma página de erro ou registrar o erro em um arquivo de log)
        echo "Campo de email ou senha não enviado.";
    }
}
?>
