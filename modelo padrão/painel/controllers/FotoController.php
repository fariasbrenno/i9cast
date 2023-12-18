
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    // ATUALIZAR SLIDE DE PUBLICIDADE - 01
    function atualizarImagem($conexao, $foto, $id)
    {
        if (!empty($foto['name'])) {

            $allow = array('jpg', 'png', 'bmp', 'gif', 'jpeg', 'pjpeg');
            $ext = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));

            if (in_array($ext, $allow)) {

                $foto_oficial = md5(uniqid(time())) . "." . $ext;
                $destino = '../../public/img/fotos/' . $foto_oficial;

                if (move_uploaded_file($foto['tmp_name'], $destino)) {
                    $data = $conexao->prepare("UPDATE fotos SET foto='$foto_oficial' WHERE id=$id");
                    $data->execute();
                    return true;
                };
            };
        };
    };

    if (isset($_POST['salvar_fotos'])) {

        $foto_01 = $_FILES["foto_01"];
        $foto_02 = $_FILES["foto_02"];
        $foto_03 = $_FILES["foto_03"];
        $foto_04 = $_FILES["foto_04"];
        $foto_05 = $_FILES["foto_05"];
        $foto_06 = $_FILES["foto_06"];

        // Chama a função para atualizar cada imagem individualmente
        $result1 = atualizarImagem($conexao, $foto_01, 1);
        $result2 = atualizarImagem($conexao, $foto_02, 2);
        $result3 = atualizarImagem($conexao, $foto_03, 3);
        $result4 = atualizarImagem($conexao, $foto_04, 4);
        $result5 = atualizarImagem($conexao, $foto_05, 5);
        $result6 = atualizarImagem($conexao, $foto_06, 6);

        // Fecha a conexão com o banco de dados
        $conexao->close();

    };
    
    // REDIRECIONAMENTO PARA A PAGINA DESEJADA
    redirect("../");

};

?>









