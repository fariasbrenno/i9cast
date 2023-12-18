
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    include('../../models/conexao.php');

    // ATUALIZAR PUBLICIDADE - 01
    function atualizarPublicidade_01($conexao, $img, $id) {

        if (!empty($img['name'])) {

            $allow = array('jpg', 'png', 'bmp', 'gif', 'jpeg', 'pjpeg');
            $ext = strtolower(pathinfo($img['name'], PATHINFO_EXTENSION));

            if (in_array($ext, $allow)) {
                $img_oficial = md5(uniqid(time())) . "." . $ext;
                $destino = '../../public/img/publicidade/' . $img_oficial;

                if (move_uploaded_file($img['tmp_name'], $destino)) {

                    $data = $conexao->prepare("UPDATE publicidade SET imagem='$img_oficial' WHERE id=$id");
                    $data->execute();
                    return true;
                };
            };
        };
    };



    if (isset($_POST['atualizar_publi'])) {

        $img1 = $_FILES["img_publi01"];
        $img2 = $_FILES["img_publi02"];
        $img3 = $_FILES["img_publi03"];
        $img4 = $_FILES["img_publi04"];
        $img5 = $_FILES["img_publi05"];
        $img6 = $_FILES["img_publi06"];    
        $img7 = $_FILES["img_publi07"];
        $img8 = $_FILES["img_publi08"];
        $img9 = $_FILES["img_publi09"]; 
        $img10 = $_FILES["img_publi10"];
        $img11 = $_FILES["img_publi11"];
        $img12 = $_FILES["img_publi12"];

        // Chama a função para atualizar cada imagem individualmente
        $result1 = atualizarPublicidade_01($conexao, $img1, 1);
        $result2 = atualizarPublicidade_01($conexao, $img2, 2);
        $result3 = atualizarPublicidade_01($conexao, $img3, 3);
        $result4 = atualizarPublicidade_01($conexao, $img4, 4);
        $result5 = atualizarPublicidade_01($conexao, $img5, 5);
        $result6 = atualizarPublicidade_01($conexao, $img6, 6);    
        $result7 = atualizarPublicidade_01($conexao, $img7, 7);
        $result8 = atualizarPublicidade_01($conexao, $img8, 8);
        $result9 = atualizarPublicidade_01($conexao, $img9, 9);       
        $result10 = atualizarPublicidade_01($conexao, $img10, 10);
        $result11 = atualizarPublicidade_01($conexao, $img11, 11);
        $result12 = atualizarPublicidade_01($conexao, $img12, 12);

        // Fecha a conexão com o banco de dados
        //$conexao->close();

    };

        // ATUALIZAR LINK DE PUBLICIDADES
        function atualizarLink($conexao, $link, $id) {

            if (!empty($link)) {
    
                $data = $conexao->prepare("UPDATE publicidade SET link = '$link' WHERE id = $id");
                $data->execute();
                return true;
    
            }
    
        };
    
        if (isset($_POST['atualizar_publi'])) {
            $links = array(
                1 => array('link' => $_POST["link01"]),
                2 => array('link' => $_POST["link02"]),
                3 => array('link' => $_POST["link03"]),
                4 => array('link' => $_POST["link04"]),
                5 => array('link' => $_POST["link05"]),
                6 => array('link' => $_POST["link06"]),
                7 => array('link' => $_POST["link07"]),
                8 => array('link' => $_POST["link08"]),
                9 => array('link' => $_POST["link09"]),
                10 => array('link' => $_POST["link10"]),
                11 => array('link' => $_POST["link11"]),
                12 => array('link' => $_POST["link12"])
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









