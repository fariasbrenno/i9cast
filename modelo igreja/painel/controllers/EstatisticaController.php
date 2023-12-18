
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    if (
        isset($_POST['ouvinte']) && 
        isset($_POST['estado']) && 
        isset($_POST['cidade']) && 
        isset($_POST['pais'])
        ) {

        $ouvinte = $_POST["ouvinte"];
        $estado = $_POST["estado"];
        $cidade = $_POST["cidade"];
        $pais = $_POST["pais"];

        $stmt = $conexao->prepare("INSERT INTO estatistica (ouvintes, estado, cidade, pais) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $ouvinte, $estado, $cidade, $pais);
        $stmt->execute();
        $stmt->close();  

    };   

    if (!empty($_POST["ativo"])) {

        $ativo = $_POST["ativo"];
        $ouvinte = $_POST["ouvinte"];
        $stmt = $conexao->prepare("UPDATE estatistica SET ativo = ? where ouvintes = ?  ");
        $stmt->bind_param("ss", $ativo, $ouvinte);
        $stmt->execute();
        $stmt->close();  

    }
    
};

?>
