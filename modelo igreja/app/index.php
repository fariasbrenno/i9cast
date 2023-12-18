<?php
    include('../models/conexao.php');   
    include('../config/apistreaming.php');   

    
// Suponha que o caminho para a logo seja retornado da consulta ao banco de dados e armazenado na variável $caminho_logo
$caminho_logo = "../public/img/logo/$logo";
// Dados do aplicativo em formato de array
$data = array(
    "name" => $nome_radio,
    "short_name" => $nome_radio,
    "start_url" => "index.php",
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
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$nome?></title>
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="../lib/rotacss.php"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../lib/rotajs.php"></script>

<script>
        $(document).ready(function(){
            $(function() {              
                isPlaying = false; 
                player = document.getElementById("player");
                $('.play').click(function() { 
                    if(!isPlaying) { 
                        player.currentTime = 0; 
                        document.getElementById("srcP").src = "https://player.ipstm.net/ssl.php?ip=<?=$ip?>&port=<?=$porta?>&mount=/;";  
                        player.load(); 
                        player.play(); 
                        isPlaying = true; 
                    }                    
                }); 
                $('.pause').click(function() { 
                    player.pause(); 
                    document.getElementById("srcP").src = ""; 
                    player.currentTime = 0;	
                    isPlaying = false;                     
                });      

            }); 

        $('.instalar-App').click(function() {
            // Defina a variável 'acao' conforme necessário
            var acao = 'suaAcaoAqui';

            $.ajax({
                method: 'POST',
                data: { acao: acao }, // Certifique-se de que 'acao' esteja definida corretamente
                url: '../painel/controllers/DownloadAppController.php',
                success: function() {   
                    //window.location.reload();
                },
                error: function(error) {
                    console.error('Erro na requisição AJAX:', error);
                    alert('Erro na requisição AJAX. Por favor, tente novamente mais tarde B.');
                }
            });
        });

});
</script>

<style>
    .rotate-icon {
        transform: scaleX(-1);
        transition: transform 0.3s ease;
    }
    .d-j-a{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .df{
        display: flex;
    } 
    .img-fundo{
        background-image: url('../public/img/fundo/<?=$fundo_app?>');
        background-size: cover;
    }  
    .iconeSocial{
        height: 50px;
    }
    /* MODELO OFICAL - VOLUME CSS */
    .volume{
        position: absolute;
        top:20%;
        left:-20%;
    }
    .vol{
        position: absolute;
        bottom:2px;
    }
    #customSlider{
        width:36px;
        height:300px;
        position:relative;
        border-top-left-radius: 30px;
        border-top-right-radius:30px;
        border-bottom-left-radius: 30px;
        border-bottom-right-radius:30px;
        background-color: #ffffff60;
        box-shadow: 0 0 1px white;
    }
    #customThumb{
        width:36px;
        height:25%;
        position:absolute;
        bottom:0px;
        /*border-top-left-radius: 30px;
        border-top-right-radius:30px;*/
        border-bottom-left-radius: 30px;
        border-bottom-right-radius:30px;
        background-color: #fff;
    }
</style>
</head>
<body>

<!-- MODELO OFICAL - VOLUME -->
    <div class="volume z-3">
        <div class="m-2 z-3 vol"><i class="fa-solid fa-volume-low"></i></div> 
        <div id="customSlider">
            <div id="customThumb"></div>
        </div> 
    </div>

<?php 

    // CONSULTA PARA RECUOERAR TEMA ATIVO
    $modelo = $conexao->query("SELECT modelo FROM aplicativo WHERE ativo = 1");
    if ($modelo->num_rows > 0) {
        $row = $modelo->fetch_assoc();
        $modeloAtivo = $row['modelo'];
    } else {
    // SE NENHUM TEMA ESTIVER ATIVO, DEFINA UM TEMA PADRÃO
    $modeloAtivo = 'Tema Padrão';
    }

    // SCRIPT PARA EXIBIR O TEMA ATIVO
    if($modeloAtivo === 'modelo 1'):
        include('modelos/modelo-1.php');
    elseif($modeloAtivo === 'modelo 2'):
        include('modelos/modelo-2.php');
    elseif($modeloAtivo === 'modelo 3'):
        include('modelos/modelo-3.php');
    endif;

?>


</body>
</html>

