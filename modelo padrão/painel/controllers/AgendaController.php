
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    // Verifica se o formulário foi enviado
    if (isset($_POST['salvar_agenda'])) {

        $id1 = 1;
        $data1 = $_POST['data1'];
        $hora1 = $_POST['hora1'];
        $local1 = $_POST['local1'];
        $descricao1 = $_POST['descricao1'];

        $data1 = $conexao->prepare("UPDATE agenda SET data = '$data1', hora = '$hora1', local = '$local1', descricao = '$descricao1' WHERE id = $id1 ");
        $data1->execute();

        $id2 = 2;
        $data2 = $_POST['data2'];
        $hora2 = $_POST['hora2'];
        $local2 = $_POST['local2'];
        $descricao2 = $_POST['descricao2'];

        $data2 = $conexao->prepare("UPDATE agenda SET data = '$data2', hora = '$hora2', local = '$local2', descricao = '$descricao2' WHERE id = $id2 ");
        $data2->execute();

        $id3 = 3;
        $data3 = $_POST['data3'];
        $hora3 = $_POST['hora3'];
        $local3 = $_POST['local3'];
        $descricao3 = $_POST['descricao3'];

        $data3 = $conexao->prepare("UPDATE agenda SET data = '$data3', hora = '$hora3', local = '$local3', descricao = '$descricao3' WHERE id = $id3 ");
        $data3->execute();

        $id4 = 4;
        $data4 = $_POST['data4'];
        $hora4 = $_POST['hora4'];
        $local4 = $_POST['local4'];
        $descricao4 = $_POST['descricao4'];

        $data4 = $conexao->prepare("UPDATE agenda SET data = '$data4', hora = '$hora4', local = '$local4', descricao = '$descricao4' WHERE id = $id4 ");
        $data4->execute();

        // Redireciona o usuário para outra página após a atualização
        redirect("../");
    }

}

?>

