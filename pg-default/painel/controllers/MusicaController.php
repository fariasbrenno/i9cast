<?php

include('../../models/conexao.php');

// ATUALIZAR MÚSICAS
function atualizarMusica($conexao, $nome, $link, $id){
    if (!empty($nome) && !empty($link)) {
        $stmt = $conexao->prepare("UPDATE top_10_musicas SET nome=?, link=? WHERE id=?");
        $stmt->bind_param("ssi", $nome, $link, $id);
        $stmt->execute();
    }
}

if (isset($_POST['salvar_musica'])) {
    $musicas = array(
        1 => array('nome' => $_POST["top_01"], 'link' => $_POST["link_01"]),
        2 => array('nome' => $_POST["top_02"], 'link' => $_POST["link_02"]),
        3 => array('nome' => $_POST["top_03"], 'link' => $_POST["link_03"]),
        4 => array('nome' => $_POST["top_04"], 'link' => $_POST["link_04"]),
        5 => array('nome' => $_POST["top_05"], 'link' => $_POST["link_05"]),
        6 => array('nome' => $_POST["top_06"], 'link' => $_POST["link_06"]),
        7 => array('nome' => $_POST["top_07"], 'link' => $_POST["link_07"]),
        8 => array('nome' => $_POST["top_08"], 'link' => $_POST["link_08"]),
        9 => array('nome' => $_POST["top_09"], 'link' => $_POST["link_09"]),
        10 => array('nome' => $_POST["top_10"], 'link' => $_POST["link_10"])
    );

    // Chama a função para atualizar cada música individualmente
    foreach ($musicas as $id => $musica) {
        atualizarMusica($conexao, $musica['nome'], $musica['link'], $id);
    }
    // Fecha a conexão com o banco de dados
    $conexao->close();
    // Redireciona o usuário para outra página após a atualização
    header('Location: ../');
    exit;
}


?>

