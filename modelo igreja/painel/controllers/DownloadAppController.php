
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    $consultar = $conexao->query("select contador_download from aplicativo WHERE id = 1");
    foreach ($consultar as $row) {

        $total =  $row['contador_download'];
        $soma = $total + 1;

        $enviar = $conexao->prepare("UPDATE aplicativo SET contador_download = ? WHERE id = 1");
        $enviar->bind_param("s", $soma);
        $enviar->execute();
        $enviar->close();


    }


};

?>