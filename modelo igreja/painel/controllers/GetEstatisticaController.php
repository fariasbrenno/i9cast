<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    include('../../models/conexao.php');

    $dados = array();

    $agora = $conexao->query('SELECT COUNT(*) as agora FROM estatistica WHERE ativo = "true" AND data >= DATE_SUB(NOW(), INTERVAL 1 HOUR);');
    foreach($agora as $row) {
        $dados[] = $row['agora'];
    };
    $hoje = $conexao->query('SELECT COUNT(*) as hoje FROM estatistica WHERE DATE(data) = CURDATE();');
    foreach($hoje as $row) {
        $dados[] = $row['hoje'];
    };
    $semana = $conexao->query('SELECT COUNT(*) as semana FROM estatistica WHERE YEARWEEK(data) = YEARWEEK(CURDATE());');
    foreach($semana as $row) {
        $dados[] = $row['semana'];
    };
    $mensal = $conexao->query('SELECT COUNT(*) as mensal FROM estatistica WHERE MONTH(data) = MONTH(CURRENT_DATE());');
    foreach($mensal as $row) {
        $dados[] = $row['mensal'];
    };
    $total = $conexao->query('SELECT COUNT(*) as total FROM estatistica');
    foreach($total as $row) {
        $dados[] = $row['total'];
    };
    $total = $conexao->query('SELECT contador_download FROM aplicativo WHERE id = 1');
    foreach($total as $row) {
       $dados[] = $row['contador_download'];
    };

    header('Content-Type: application/json');
    echo json_encode($dados);

}

?>

