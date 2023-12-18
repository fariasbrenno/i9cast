
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    $acao_versiculo = $_POST['acao_versiculo'];

    if (!empty($acao_versiculo)) {
        $enviar = $conexao->prepare("UPDATE versiculo SET acao = ? WHERE id = 1");
        $enviar->bind_param("s", $acao_versiculo);
        $enviar->execute();
        $enviar->close();
    }

    $acao_doacao = $_POST['acao_doacao'];
    if (!empty($acao_doacao)) {
        $enviar = $conexao->prepare("UPDATE doacao SET acao = ? WHERE id = 1");
        $enviar->bind_param("s", $acao_doacao);
        $enviar->execute();
        $enviar->close();
    }

    $acao_fotos = $_POST['acao_fotos'];
    if (!empty($acao_fotos)) {
        $enviar = $conexao->prepare("UPDATE acao SET acao = ? WHERE id = 1");
        $enviar->bind_param("s", $acao_fotos);
        $enviar->execute();
        $enviar->close();
    }
};

?>