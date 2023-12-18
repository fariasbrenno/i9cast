<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    include('../../models/conexao.php');

    if (
        isset($_POST['nome_radio']) &&
        isset($_POST['ip']) &&
        isset($_POST['porta']) &&
        isset($_POST['api']) &&
        isset($_POST['genero']) &&
        isset($_POST['senha_streaming'])
    ) {

        $nome = $_POST["nome_radio"];
        $ip = $_POST["ip"];
        $porta = $_POST["porta"];
        $api = $_POST["api"];
        $genero = $_POST["genero"];
        $senha = $_POST["senha_streaming"];
        $id = 1;

        $stmt = $conexao->prepare("UPDATE dados_radio SET nome_radio = ?, ip_streaming = ?, porta_streaming = ?, api_streaming = ?, senha_streaming= ?, genero = ? WHERE id = $id ");
        
        if ($stmt) {
            $stmt->bind_param("ssssss", $nome, $ip, $porta, $api, $senha, $genero);
            $stmt->execute();
            $stmt->close();
        };
    };

};

?>
