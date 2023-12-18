
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

    // Verifica se o formulário foi enviado
    if (isset($_POST['salvar_programacao'])) {

        $id = 1;
        $dia = $_POST['dia_01'];
        $hora = $_POST['hora_01'];
        $programa = $_POST['programa_01'];
        $apresentador = $_POST['apresentador_01'];
        $data = $conexao->prepare("UPDATE programacao SET dia = '$dia', hora = '$hora', programa = '$programa', apresentador = '$apresentador' WHERE id = $id ");
        $data->execute();

        $id2 = 2;
        $dia2 = $_POST['dia_02'];
        $hora2 = $_POST['hora_02'];
        $programa2 = $_POST['programa_02'];
        $apresentador2 = $_POST['apresentador_02'];

        $data2 = $conexao->prepare("UPDATE programacao SET dia = '$dia2', hora = '$hora2', programa = '$programa2', apresentador = '$apresentador2' WHERE id = $id2 ");
        $data2->execute();
  
        $id3 = 3;
        $dia3 = $_POST['dia_03'];
        $hora3 = $_POST['hora_03'];
        $programa3 = $_POST['programa_03'];
        $apresentador3 = $_POST['apresentador_03'];

        $data3 = $conexao->prepare("UPDATE programacao SET dia = '$dia3', hora = '$hora3', programa = '$programa3', apresentador = '$apresentador3' WHERE id = $id3 ");
        $data3->execute();

        $id4 = 4;
        $dia4 = $_POST['dia_04'];
        $hora4 = $_POST['hora_04'];
        $programa4 = $_POST['programa_04'];
        $apresentador4 = $_POST['apresentador_04'];

        $data4 = $conexao->prepare("UPDATE programacao SET dia = '$dia4', hora = '$hora4', programa = '$programa4', apresentador = '$apresentador4' WHERE id = $id4 ");
        $data4->execute();

        $id5 = 5;
        $dia5 = $_POST['dia_05'];
        $hora5 = $_POST['hora_05'];
        $programa5 = $_POST['programa_05'];
        $apresentador5 = $_POST['apresentador_05'];

        $data5 = $conexao->prepare("UPDATE programacao SET dia = '$dia5', hora = '$hora5', programa = '$programa5', apresentador = '$apresentador5' WHERE id = $id5 ");
        $data5->execute();

        $id6 = 6;
        $dia6 = $_POST['dia_06'];
        $hora6 = $_POST['hora_06'];
        $programa6 = $_POST['programa_06'];
        $apresentador6 = $_POST['apresentador_06'];

        $data6 = $conexao->prepare("UPDATE programacao SET dia = '$dia6', hora = '$hora6', programa = '$programa6', apresentador = '$apresentador6' WHERE id = $id6 ");
        $data6->execute();

        $id7 = 7;
        $dia7 = $_POST['dia_07'];
        $hora7 = $_POST['hora_07'];
        $programa7 = $_POST['programa_07'];
        $apresentador7 = $_POST['apresentador_07'];

        $data7 = $conexao->prepare("UPDATE programacao SET dia = '$dia7', hora = '$hora7', programa = '$programa7', apresentador = '$apresentador7' WHERE id = $id7 ");
        $data7->execute();

        $id8 = 8;
        $dia8 = $_POST['dia_08'];
        $hora8 = $_POST['hora_08'];
        $programa8 = $_POST['programa_08'];
        $apresentador8 = $_POST['apresentador_08'];

        $data8 = $conexao->prepare("UPDATE programacao SET dia = '$dia8', hora = '$hora8', programa = '$programa8', apresentador = '$apresentador8' WHERE id = $id8 ");
        $data8->execute();

        $id9 = 9;
        $dia9 = $_POST['dia_09'];
        $hora9 = $_POST['hora_09'];
        $programa9 = $_POST['programa_09'];
        $apresentador9 = $_POST['apresentador_09'];

        $data9 = $conexao->prepare("UPDATE programacao SET dia = '$dia9', hora = '$hora9', programa = '$programa9', apresentador = '$apresentador9' WHERE id = $id9 ");
        $data9->execute();

        $id10 = 10;
        $dia10 = $_POST['dia_10'];
        $hora10 = $_POST['hora_10'];
        $programa10 = $_POST['programa_10'];
        $apresentador10 = $_POST['apresentador_10'];

        $data10 = $conexao->prepare("UPDATE programacao SET dia = '$dia10', hora = '$hora10', programa = '$programa10', apresentador = '$apresentador10' WHERE id = $id10 ");
        $data10->execute();

        // REDIRECIONAMENTO PARA A PAGINA DESEJADA
    redirect("../");

    };
};



?>

