
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    if(!empty($cor = $_POST['cor'])){

        $enviar = $conexao->prepare("UPDATE cor_site SET background = ? WHERE id = 1");
        $enviar->bind_param("s", $cor);
        $enviar->execute();
        $enviar->close();

    }
         
              

};

?>