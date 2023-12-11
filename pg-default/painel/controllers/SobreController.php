
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    // ATUALIZAR SOBRE
    if (isset($_POST['salvar_sobre'])) {

        $sobre = $_POST["sobre"];    

        if (!empty($sobre)) {

            $data = $conexao->prepare("UPDATE sobre SET descricao='$sobre' where id=1 ");
            $data->execute();
            $data->close();
              
        };
    };
    // REDIRECIONAMENTO PARA A PAGINA DESEJADA
    redirect("../");
};


?>









