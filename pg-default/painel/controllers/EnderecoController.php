
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
include('../../models/conexao.php');

    // ATUALIZAR SOBRE
    if (isset($_POST['salvar_endereco'])) {

        $cep = $_POST["cep"];
        $rua = $_POST["rua"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $numero = $_POST["numero"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];    

        // Verificar se todos os campos obrigatórios foram preenchidos
        if (!empty($cep) && !empty($rua) && !empty($bairro) && !empty($cidade) && !empty($estado)) {

            // Utilizar prepared statement para atualizar os dados no banco de dados
            $data = $conexao->prepare("UPDATE endereco SET cep='$cep', rua='$rua', complemento='$complemento', bairro='$bairro', numero='$numero', cidade='$cidade', estado='$estado' WHERE id=1");
            $data->execute();
            $data->close();
 
        };
    };
    
    // REDIRECIONAMENTO PARA A PAGINA DESEJADA
    redirect("../");

};


?>









