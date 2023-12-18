
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    // ATUALIZAR SOBRE
    if (isset($_POST['salvar_social'])) {

        $telefone = $_POST["telefone"];
        $whatsapp = $_POST["whatsapp"];
        $facebook = $_POST["facebook"];
        $instagram = $_POST["instagram"];
        $tiktok = $_POST["tiktok"];    

        // Verificar se todos os campos obrigatórios foram preenchidos
        //if (!empty($telefone) && !empty($whatsapp) && !empty($facebook) && !empty($instagram) && !empty($tiktok)) {
            // Utilizar prepared statement para atualizar os dados no banco de dados
            $data = $conexao->prepare("UPDATE social SET telefone='$telefone', whatsapp='$whatsapp', facebook='$facebook', instagram='$instagram', tiktok='$tiktok' WHERE id=1");
            $data->execute();
        

        //}

    };

    if (isset($_POST['salvar_youtube'])) {
        
        $youtube = $_POST["youtube"];

        if (!empty($youtube)) {

            if ($conexao) {
                $query = "UPDATE social SET youtube = ? WHERE id = 1";
                $stmt = $conexao->prepare($query);

                if ($stmt) {
                    $stmt->bind_param("s", $youtube);
                    $stmt->execute();
                    $stmt->close();
                };
            };
        } else {

            if ($conexao) {
                $query = "UPDATE social SET youtube = 'https://youtu.be/3vYeQLJ2as4' WHERE id = 1";
                $stmt = $conexao->prepare($query);

                if ($stmt) {
                    $stmt->execute();
                    $stmt->close();
                };
            };
        }
    };

    // REDIRECIONAMENTO PARA A PAGINA DESEJADA
    redirect("../");

};
?>









