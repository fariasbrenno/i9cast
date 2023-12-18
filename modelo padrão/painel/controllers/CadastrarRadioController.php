<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    include('../../models/conexao.php');

    // Função para limpar e validar os dados recebidos do formulário
    function limpar_dado($dado) {
        return trim(htmlspecialchars($dado, ENT_QUOTES, 'UTF-8'));
    }

    // Verifica se todos os campos foram enviados
    if (
        isset($_POST['nome']) &&
        isset($_POST['ip']) &&
        isset($_POST['porta']) &&
        isset($_POST['api']) &&
        isset($_POST['senha_streaming'])
    ) {
        // Limpa e valida os dados recebidos do formulário
        $nome = limpar_dado($_POST["nome"]);
        $ip = limpar_dado($_POST["ip"]);
        $porta = limpar_dado($_POST["porta"]);
        $api = limpar_dado($_POST["api"]);
        $senha = limpar_dado($_POST["senha_streaming"]);

        // Prepara a declaração SQL usando prepared statement
        $stmt = $conexao->prepare("UPDATE informacao_radio SET nome_radio = ?, ip_streaming = ?, porta_streaming = ?, api_streaming = ?, senha_streaming=? WHERE id = 1");
        
        if ($stmt) {
            // Atribui os valores aos parâmetros da declaração SQL
            $stmt->bind_param("sssss", $nome, $ip, $porta, $api, $senha);
            $stmt->execute();

            // Fecha a declaração e a conexão com o banco de dados
            $stmt->close();
            //$conexao->close();

        };
    };


    $nome_apk = $_POST["nome_apk"];
    $google_play = $_POST["google_play"];
    $apk = $_FILES["apk"];

    if($google_play !== ''){
        $data = $conexao->prepare("UPDATE aplicativo SET google_play = ? WHERE id = 1");
        $data->bind_param("s", $google_play);
        $data->execute();
        $data->close();
    }else{
        $data = $conexao->prepare("UPDATE aplicativo SET google_play = null WHERE id = 1");
        $data->execute();
        $data->close();
    }
    
    if (!empty($apk['name']) && is_uploaded_file($apk['tmp_name'])) {
        $ext = strtolower(pathinfo($apk['name'], PATHINFO_EXTENSION));
        $allow = array('apk');
    
        if (in_array($ext, $allow)) {
            $nome_apk = preg_replace("/[^a-zA-Z0-9]+/", "_", $nome_apk);
            $apk_oficial = $nome_apk . "." . $ext;
            $destino = '../../app/' . $apk_oficial;
    
            if (move_uploaded_file($apk['tmp_name'], $destino)) {
                $data = $conexao->prepare("UPDATE aplicativo SET aplicativo = ? WHERE id = 1");
                $data->bind_param("s", $nome_apk);
                $data->execute();
                $data->close();
            };
        };
    };
   

    // REDIRECIONAMENTO PARA A PAGINA DESEJADA
    redirect("../");

};

?>
