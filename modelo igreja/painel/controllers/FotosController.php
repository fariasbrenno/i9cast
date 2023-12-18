<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    $foto = $_FILES['foto'];

    $allow = array('jpg', 'png', 'bmp', 'gif', 'jpeg', 'pjpeg');
    $ext = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
    $foto_oficial = md5(uniqid(time())) . "." . $ext;

    $destino = '../../public/img/fotos/' . $foto_oficial;

    if (in_array($ext, $allow)) {
        if (move_uploaded_file($foto['tmp_name'], $destino)) {
            $data = $conexao->prepare("INSERT INTO `fotos`(`foto`) VALUES (?)");
            $data->bind_param("s", $foto_oficial);
            $data->execute();
        }
    } else {
        echo "Formato de arquivo não suportado.";
    }

    $excluir = $_POST['idExcluir'];

    if (!empty($excluir)) {
        $data = $conexao->prepare("DELETE FROM fotos WHERE id = ? ;");
        $data->bind_param("s", $excluir);
        $data->execute();
    }

}
