<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

        $qr_code_file = $_FILES['qr_code'];

        $allow = array('jpg', 'png', 'bmp', 'gif', 'jpeg', 'pjpeg');
        $ext = strtolower(pathinfo($qr_code_file['name'], PATHINFO_EXTENSION));
        $generated_filename = md5(uniqid(time())) . "." . $ext;
        
        $destino = '../../public/img/qr_code/' . $generated_filename;
        
        if (in_array($ext, $allow)) {
            if (move_uploaded_file($qr_code_file['tmp_name'], $destino)) {
                $data = $conexao->prepare("UPDATE doacao SET qr_code = ? WHERE id = 1");
                $data->bind_param("s", $generated_filename);
                $data->execute();
            }
        } else {
            echo "Formato de arquivo não suportado.";
        }
        

        $nome = $_POST['nome'];
        $chave = $_POST['chave_pix'];

        if (!empty($nome) || !empty($chave)) {
            $data = $conexao->prepare("UPDATE doacao SET nome = ?, chave_pix = ? WHERE id = 1");
            $data->bind_param("ss", $nome, $chave);
            $data->execute();
        };
        
}
?>
