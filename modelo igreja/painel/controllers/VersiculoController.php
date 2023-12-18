
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include('../../models/conexao.php');

        $versiculo = $_POST['versiculo'];
        $capitulo = $_POST['capitulo'];
        $automatico = $_POST['automatico'];

        if (!empty($versiculo) || !empty($capitulo) || !empty($automatico)) {
            
            $enviar = $conexao->prepare("UPDATE versiculo SET versiculo = ?, capitulo = ?, automatico = ? WHERE id = 1");
            $enviar->bind_param("sss", $versiculo, $capitulo, $automatico);
            $enviar->execute();
            $enviar->close();
        
        } else {

            $enviar = $conexao->prepare("UPDATE versiculo SET versiculo = NULL, capitulo = NULL, automatico = NULL WHERE id = 1");
            $enviar->execute();
            $enviar->close();
        }


};

?>