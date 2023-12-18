<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');
    // SAIR DA SESSÃO
    if (isset($_POST['sair'])) {
        // Inicie a sessão (se ainda não tiver sido iniciada)
        session_start();
        // Remova todas as variáveis de sessão
        session_unset();
        // Destrua a sessão
        session_destroy();
    };
};
?>



