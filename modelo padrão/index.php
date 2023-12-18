<?php

include('models/conexao.php');

include('config/config.php');

?>



<!DOCTYPE html>
<html lang="pt-br">
<?php include('views/estrutura/head.php'); ?>

<style>
    .m-top-fixed {
        top: 48px;
    }
    
@media screen and (max-width: 758px) {
    .m-top-fixed {
        top: 86px;
    }
    
}
</style>
<body>
<?php 

// CONSULTA PARA RECUOERAR TEMA ATIVO
$tema = $conexao->query("SELECT nome FROM tema WHERE ativo = 1");
if ($tema->num_rows > 0) {
    $row = $tema->fetch_assoc();
    $temaAtivo = $row['nome'];
} else {
// SE NENHUM TEMA ESTIVER ATIVO, DEFINA UM TEMA PADRÃO
   $temaAtivo = 'Tema Padrão';
}


// SCRIPT PARA EXIBIR O TEMA ATIVO
if($temaAtivo === 'tema 1'):
    include('views/modelo-01/index.php'); 
elseif($temaAtivo === 'tema 2'):
    include('views/modelo-02/index.php');
elseif($temaAtivo === 'tema 3'):
    include('views/modelo-03/index.php');
endif;

include('painel/views/componentes/modalverfoto.php');
include('public/js/script.php');
?>


</body>
</html>

