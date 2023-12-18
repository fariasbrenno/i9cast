
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

        if (!empty($_POST["app"])) {
            
            $app = $_POST["app"]; 

            $data = $conexao->prepare("UPDATE aplicativo SET ativo = NULL;");
            $data->execute();            
            $data->close();
    
            $data = $conexao->prepare("UPDATE aplicativo SET ativo = 1 where id= '$app';");
            $data->execute();            
            $data->close();

        };

};

?>

