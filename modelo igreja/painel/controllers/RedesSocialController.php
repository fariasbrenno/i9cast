<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('../../models/conexao.php');
    $id = 1;

    $redesSociais = [
        "telefone" => $_POST["telefone"],
        "whatsapp" => $_POST["whatsapp"],
        "facebook" => $_POST["facebook"],
        "instagram" => $_POST["instagram"],
        "tiktok" => $_POST["tiktok"],
        "youtube" => $_POST["youtube"],
        "email" => $_POST["email"],
        "twitter" => $_POST["twitter"]
    ];

    foreach ($redesSociais as $key => $value) {
        if (!empty($value)) {
            $data = $conexao->prepare("UPDATE redes_sociais SET $key = ? WHERE id = $id");
            $data->bind_param("s", $value);
            $data->execute();
        }
    }
}
?>
