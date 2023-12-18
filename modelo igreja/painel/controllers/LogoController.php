

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    $logo = $_FILES['logo'];

    $allow = array('jpg', 'png', 'bmp', 'gif', 'jpeg', 'pjpeg');
    $ext = strtolower(pathinfo($logo['name'], PATHINFO_EXTENSION));
    $logo_oficial = md5(uniqid(time())) . "." . $ext;

    $destino = '../../public/img/logo/' . $logo_oficial;

    if (in_array($ext, $allow)) {
        if (move_uploaded_file($logo['tmp_name'], $destino)) {
            $data = $conexao->prepare("UPDATE imagens SET logo = ? WHERE id = 1");
            $data->bind_param("s", $logo_oficial);
            $data->execute();
        }
    } else {
        echo "Formato de arquivo não suportado.";
    }

};


?>

