<?php

session_start();

if($_SESSION['id']){
    include('../models/conexao.php');
}else{
    header('Location: ../admin');
    exit;
}

include('../config/config.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<?php include('../views/estrutura/head.php'); ?>

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
//PUXANDO ARQUIVOS DO PAINEL ADMINISTRATIVO DO SITE
$sitePath = 'views/site/';
$site = glob($sitePath . '*.php');
foreach ($site as $arquivo) {
    include $arquivo;
}
//PUXANDO ARQUIVOS DE MODAL DO PAINEL ADMINISTRATIVO DO SITE
$componentesPath = 'views/componentes/';
$componentes = glob($componentesPath . 'modal*.php');
$publicidade = glob($componentesPath . 'publicidade/modalpubli*.php');
foreach ($componentes as $arquivo) {
    include $arquivo;
}
//PUXANDO ARQUIVOS DE PUBLICIDADES DO PAINEL ADMINISTRATIVO DO SITE
foreach ($publicidade as $arquivo) {
    include $arquivo;
}


include('../config/removerarquivo.php');
include('../public/js/script.php');
?>


</body>
</html>































    

