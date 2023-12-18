<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');
  
    $nome = $_POST['nome'];
    $musica = $_POST['musica'];

    $stmt = $conexao->prepare("INSERT INTO pedidos_musical (nomes, musicas, data, hora) VALUES ('$nome', '$musica', now(), now())");
    $stmt->execute();

        // Consulta para obter os dados do banco de dados após a inserção
        $sql = "SELECT nomes, musicas FROM pedidos_musical";
        $stmt = $conexao->query($sql);

        // Verifica se há resultados
        $dados = array();
        foreach($stmt as $row){
            $dados[] = $row;
        }

        header('Content-Type: application/json');
        echo json_encode($dados);

};


?>





    