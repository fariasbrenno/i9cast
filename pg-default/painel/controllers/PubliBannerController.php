

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    $banner = $_FILES["banner"];

    if (!empty($banner['name'])) {

        $allow = array('jpg', 'png', 'bmp', 'gif', 'jpeg', 'pjpeg');
        $ext = strtolower(pathinfo($banner['name'], PATHINFO_EXTENSION));

        // Verifica se a extensão do arquivo é permitida
        if (in_array($ext, $allow)) {

            $banner_oficial = md5(uniqid(time())) . "." . $ext;
            $destino = '../../public/img/banner/' . $banner_oficial;

            // Move o arquivo para o diretório de destino
            if (move_uploaded_file($banner['tmp_name'], $destino)) {

                // Atualiza o campo "logo" no banco de dados somente se o arquivo foi movido com sucesso
                $data = $conexao->prepare("UPDATE publicidade_banner SET banner='$banner_oficial' WHERE id=1");
                $data->execute();
                $data->close();

            };

        };

    };

    if (isset($_POST['link_banner'])) {

        $link_banner = $_POST['link_banner'];

        // Verifica se a cor não está vazia
        if (!empty($link_banner)) {

            // Prepara a declaração SQL usando prepared statement
            $stmt = $conexao->prepare("UPDATE publicidade_banner SET link = ? WHERE id = 1");

            if ($stmt) {

            $stmt->bind_param("s", $link_banner);
            $stmt->execute();
            $stmt->close();
            
            };

        };
        
    };

    
    // Redireciona para a página inicial após a atualização
    redirect("../");

}

?>