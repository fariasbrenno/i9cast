

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 

    include('../../models/conexao.php');

    $data = $conexao->prepare("TRUNCATE TABLE pedidos_musical");
    $data->execute();

};

?>
