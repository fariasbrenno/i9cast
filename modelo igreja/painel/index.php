<?php

session_start();

if($_SESSION['id']){
    include('../models/conexao.php');
}else{
    header('Location: ../admin');
    exit;
}
include('../config/apistreaming.php'); 


// Suponha que o caminho para a logo seja retornado da consulta ao banco de dados e armazenado na variável $caminho_logo
$caminho_logo = "../public/img/logo/$logo";
// Dados do aplicativo em formato de array
$data = array(
    "name" => $nome_radio,
    "short_name" => $nome_radio,
    "start_url" => "../app/index.php",
    "display" => "standalone",
    "background_color" => "#fff",
    "theme_color" => "#fff",
    "icons" => array(
        array(
            "src" => $caminho_logo,
            "sizes" => "192x192",
            "type" => "image/png",
            "style" => "border-radius: 10px;"
        )
    )
);
// Converte para JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);
// Escreve no arquivo JSON
file_put_contents('manifest.json', $json_data);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <?php include('../estrutura/head.php');?>
<style>
    .img-fundo{
        background-image: url('../public/img/fundo/<?=$fundo_site?>');
        background-position: center;
        background-size: cover;
    }   
    .btn-baixar-app{
        width: 30%;
    } 
    @media screen and (max-width: 768px) {
        .img-fundo{
            background-image: url('../public/img/fundo/<?=$fundo_app?>');
        } 
        .btn-baixar-app{
            width: 100%;
        }
    }
</style>
<body class="<?=$CorSite?> CorMudar">

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
        include('modelos/modelo-1.php'); 
    elseif($temaAtivo === 'tema 2'):
        include('modelos/modelo-2.php');
    elseif($temaAtivo === 'tema 3'):
        include('modelos/modelo-3.php');
    endif;

    //PUXANDO ARQUIVOS OFFCANVAS
    $offcanvas = 'offcanvas/';
    $offcanvasSite = glob($offcanvas . '*.php');
    foreach ($offcanvasSite as $arquivo) {
        include $arquivo;
    }
    //PUXANDO ARQUIVOS OFFCANVAS MNU ADMIN
    $offcanvasAdmin = 'menu-admin/';
    $site = glob($offcanvasAdmin . '*.php');
    foreach ($site as $arquivo) {
        include $arquivo;
    }

    include('../config/script-estatistica.php'); 
?>

<script>
    $(document).ready(function() {
        $(function() {
            isPlaying = false;
            player = document.getElementById("player");
            $('.play').click(function() {
                if (!isPlaying) {
                    player.currentTime = 0;
                    document.getElementById("srcP").src = "https://player.ipstm.net/ssl.php?ip=<?=$ip?>&port=<?=$porta?>&mount=/;";
                    player.load();
                    player.play();
                    isPlaying = true;
                }
                $(this).hide();
                $('.texto-radio').text('Rádio Ligada!');
                $('.pause').show();
            });
            $('.pause').click(function() {
                player.pause();
                document.getElementById("srcP").src = "";
                player.currentTime = 0;
                isPlaying = false;
                $(this).hide();
                $('.texto-radio').text('Rádio Desligada!');
                $('.play').show();
            });
        });
    });
</script>
</body>
</html>

