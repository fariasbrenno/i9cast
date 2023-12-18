

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    for ($i = 1; $i <= 2; $i++) {

        $fieldName = $_FILES['img' . $i];
    
        $allow = array('jpg', 'png', 'bmp', 'gif', 'jpeg', 'pjpeg');
        $ext = strtolower(pathinfo($fieldName['name'], PATHINFO_EXTENSION));
        $img_oficial = md5(uniqid(time())) . "." . $ext;
    
        $destino = '../../public/img/fundo/' . $img_oficial;
    
        if (in_array($ext, $allow)) {
            if ($i === 1) {  
                if (move_uploaded_file($fieldName['tmp_name'], $destino)) {
                    $data = $conexao->prepare("UPDATE imagens SET fundo_site = ? WHERE id = 1");
                    $data->bind_param("s", $img_oficial);
                    $data->execute();
                }
            } elseif ($i === 2) {
                if (move_uploaded_file($fieldName['tmp_name'], $destino)) {
                    $data = $conexao->prepare("UPDATE imagens SET fundo_app = ? WHERE id = 1");
                    $data->bind_param("s", $img_oficial);
                    $data->execute();
                }
            }
        } else {
            echo "Formato de arquivo não suportado.";
        }
    }
    

};


?>

