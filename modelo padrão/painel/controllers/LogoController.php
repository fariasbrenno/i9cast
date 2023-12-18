
<?php


// Verifica se a solicitação é um POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    // Função para limpar e validar os dados recebidos do formulário
    function limpar_dado($dado) {
      return trim(htmlspecialchars($dado, ENT_QUOTES, 'UTF-8'));
    }

    // Verifica se a cor de fundo foi enviada
    if (isset($_POST['background'])) {

        // Limpa e valida a cor de fundo recebida do formulário
        $cor = limpar_dado($_POST['background']);
       //$cor = $_POST['background'];

        // Verifica se a cor não está vazia
        if (!empty($cor)) {

            // Prepara a declaração SQL usando prepared statement
            $stmt = $conexao->prepare("UPDATE cor_site SET background = ? WHERE id = 1");

            if ($stmt) {

            $stmt->bind_param("s", $cor);
            $stmt->execute();
            // Fecha a declaração e a conexão com o banco de dados
            $stmt->close();
            //$conexao->close();
            
            };

        };
        
    };

// ATUALIZAR LINK DE PUBLICIDADES
    function atualizarLink($conexao, $link, $id) {

        if (!empty($link)) {

            $data = $conexao->prepare("UPDATE slide_logo SET link = '$link' WHERE id = $id");
            $data->execute();
            return true;

        }

    };

    if (isset($_POST['salvar'])) {

        $links = array(
            1 => array('link' => $_POST["link1"]),
            2 => array('link' => $_POST["link2"]),
            3 => array('link' => $_POST["link3"])
        );    
        
        // Chama a função para atualizar cada música individualmente
        foreach ($links as $id => $link) {
            atualizarLink($conexao, $link['link'], $id);
        }
        // Fecha a conexão com o banco de dados
        //$conexao->close();
    }


// ATUALIZAR LOGO
    $logo = $_FILES["logo"];

    // Verifica se um arquivo foi enviado
    if (!empty($logo['name'])) {

        $allow = array('jpg', 'png', 'bmp', 'gif', 'jpeg', 'pjpeg');
        $ext = strtolower(pathinfo($logo['name'], PATHINFO_EXTENSION));

        // Verifica se a extensão do arquivo é permitida
        if (in_array($ext, $allow)) {

            $logo_oficial = md5(uniqid(time())) . "." . $ext;
            $destino = '../../public/img/logo/' . $logo_oficial;

            // Move o arquivo para o diretório de destino
            if (move_uploaded_file($logo['tmp_name'], $destino)) {

                // Atualiza o campo "logo" no banco de dados somente se o arquivo foi movido com sucesso
                $data = $conexao->prepare("UPDATE logo SET logo='$logo_oficial' WHERE id=1");
                $data->execute();

            };

        };

    };




function atualizarImagem($conexao, $img, $id)
{
    if (!empty($img['name'])) {

        $allow = array('jpg', 'png', 'bmp', 'gif', 'jpeg', 'pjpeg');
        $ext = strtolower(pathinfo($img['name'], PATHINFO_EXTENSION));

        if (in_array($ext, $allow)) {

            $img_oficial = md5(uniqid(time())) . "." . $ext;
            $destino = '../../public/img/slide_logo/' . $img_oficial;

            if (move_uploaded_file($img['tmp_name'], $destino)) {
                $data = $conexao->prepare("UPDATE slide_logo SET img='$img_oficial' WHERE id=$id");
                $data->execute();
                return true;
            };
        };
    } ;

};

    $img1 = $_FILES["img_slide1"];
    $img2 = $_FILES["img_slide2"];
    $img3 = $_FILES["img_slide3"];

    // Chama a função para atualizar cada imagem individualmente
    $result1 = atualizarImagem($conexao, $img1, 1);
    $result2 = atualizarImagem($conexao, $img2, 2);
    $result3 = atualizarImagem($conexao, $img3, 3);

    // Fecha a conexão com o banco de dados
    //$conexao->close();


// ATUALIZAR FAVICON

$favicon = $_FILES["favicon"];

// Verifica se um arquivo foi enviado
if (!empty($favicon['name'])) {

    $allow = array('jpg', 'png', 'bmp', 'gif', 'jpeg', 'pjpeg');
    $ext = strtolower(pathinfo($favicon['name'], PATHINFO_EXTENSION));

    // Verifica se a extensão do arquivo é permitida
    if (in_array($ext, $allow)) {

        $favicon_oficial = md5(uniqid(time())) . "." . $ext;
        $destino = '../../public/img/favicon/' . $favicon_oficial;

        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($favicon['tmp_name'], $destino)) {

            // Atualiza o campo "logo" no banco de dados somente se o arquivo foi movido com sucesso
            $data = $conexao->prepare("UPDATE favicon SET favicon='$favicon_oficial' WHERE id=1");
            $data->execute();


        } ;
    };
};

    // Redireciona para a página inicial após a atualização
    redirect("../");

}

?>









