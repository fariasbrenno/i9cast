
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    // ATUALIZAR SLIDE DE PUBLICIDADE - 01
    function atualizarImagem($conexao, $img, $id)
    {
        if (!empty($img['name'])) {

            $allow = array('jpg', 'png', 'bmp', 'gif', 'jpeg', 'pjpeg');
            $ext = strtolower(pathinfo($img['name'], PATHINFO_EXTENSION));

            if (in_array($ext, $allow)) {

                $img_oficial = md5(uniqid(time())) . "." . $ext;
                $destino = '../../public/img/publicidade_slide/' . $img_oficial;

                if (move_uploaded_file($img['tmp_name'], $destino)) {

                    $data = $conexao->prepare("UPDATE publicidade_slide SET slide='$img_oficial' WHERE id=$id");
                    $data->execute();
                    return true;
                };
            };
        };
    };



    if (isset($_POST['atualizar_slide'])) {

        $img1 = $_FILES["img_publi01"];
        $img2 = $_FILES["img_publi02"];
        $img3 = $_FILES["img_publi03"];

        // Chama a função para atualizar cada imagem individualmente
        $result1 = atualizarImagem($conexao, $img1, 1);
        $result2 = atualizarImagem($conexao, $img2, 2);
        $result3 = atualizarImagem($conexao, $img3, 3);

        // Fecha a conexão com o banco de dados
       // $conexao->close();

    };


    // ATUALIZAR LINK DE PUBLICIDADES
    function atualizarLink($conexao, $link, $id) {

        if (!empty($link)) {

            $data = $conexao->prepare("UPDATE publicidade_slide SET link = '$link' WHERE id = $id");
            $data->execute();
            return true;

        }

    };

    if (isset($_POST['atualizar_slide'])) {
        $links = array(
            1 => array('link' => $_POST["link_1"]),
            2 => array('link' => $_POST["link_2"]),
            3 => array('link' => $_POST["link_3"])
        );    
        // Chama a função para atualizar cada música individualmente
        foreach ($links as $id => $link) {
            atualizarLink($conexao, $link['link'], $id);
        }
        // Fecha a conexão com o banco de dados
        //$conexao->close();
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();

    // REDIRECIONAMENTO PARA A PAGINA DESEJADA
    redirect("../");

};


?>









