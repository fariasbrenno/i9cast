
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    // ATUALIZAR SENHA
    if (isset($_POST['salvar_modelo'])) {

        $modelo = $_POST["modelo"];        

        $data = $conexao->prepare("UPDATE tema SET ativo = NULL;");
        $data->execute();            
        $data->close();

        $data = $conexao->prepare("UPDATE tema SET ativo = 1 where id= '$modelo';");
        $data->execute();            
        $data->close();
        
    };

    // REDIRECIONAMENTO PARA A PAGINA DESEJADA
    redirect("../");

};

?>

