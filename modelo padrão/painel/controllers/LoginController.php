<?php

session_start();
include('../../models/conexao.php');

// Verifica se a solicitação é um POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Função para limpar e validar os dados recebidos do formulário
    function limpar_dado($dado) {
        return trim(htmlspecialchars($dado, ENT_QUOTES, 'UTF-8'));
    }

    // Verifica se o campo de login e senha foi enviado
    if (isset($_POST['login']) && isset($_POST['senha'])) {

        // Limpa e valida o login e senha recebidos do formulário
        $login = limpar_dado($_POST['login']);
        $senha = limpar_dado($_POST['senha']);

        // Verifica se o login e senha não estão vazios
        if (!empty($login) && !empty($senha)) {

            // Prepara a declaração SQL usando prepared statement
            $consulta = $conexao->prepare("SELECT * FROM usuario WHERE email = ? OR cpf = ?");
            if ($consulta) {

                // Atribui o valor do login ao parâmetro da declaração SQL
                $consulta->bind_param("ss", $login, $login);

                // Executa a declaração SQL
                $consulta->execute();

                // Obtém o resultado da consulta
                $resultado = $consulta->get_result();

                // Verifica se foi encontrado um registro com o login informado
                if ($resultado->num_rows === 1) {
                    $usuario = $resultado->fetch_assoc();

                    // Verifica se a senha digitada corresponde ao hash armazenado no banco de dados
                    if (password_verify($senha, $usuario['senha'])) {

                        // Define as informações do usuário na sessão
                        $_SESSION['id'] = $usuario['id'];
                        $_SESSION['email'] = $usuario['email'];
                        $_SESSION['cpf'] = $usuario['cpf'];
                        $_SESSION['nivel_permissao'] = $usuario['nivel_permissao'];

                        // Redireciona para a página inicial após o login bem-sucedido
                        header('Location: ../../painel');
                        exit;
                    } else {
                        // Senha incorreta, redireciona de volta para a página de login
                        header('Location: ../../admin');
                        exit;
                    }
                } else {
                    // Usuário não encontrado, mensagem de erro exibida
                    echo "Usuário não encontrado. Verifique o email ou CPF informado.";
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
        // Tratar campo de login ou senha não enviado
        // (pode ser uma boa ideia redirecionar para uma página de erro ou registrar o erro em um arquivo de log)
        echo "Campo de login ou senha não enviado.";
    }
}
?>
