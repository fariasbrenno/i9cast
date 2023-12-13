
<?php

    include('../../models/conexao.php');

    // Consulta para obter os dados do banco de dados
    $sql = "SELECT * FROM pedidos_musical ORDER BY id DESC";
    $stmt = $conexao->query($sql);

    // Verifica se há resultados
    $dados = array();
    foreach($stmt as $row){
        $dados[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($dados);


?>

