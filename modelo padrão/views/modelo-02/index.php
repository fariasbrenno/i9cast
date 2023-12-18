
<?php
$DirRotaCss = 'https://' . $_SERVER['HTTP_HOST'] . '/lib/rotacss.php';
$DirRotaJs = 'https://' . $_SERVER['HTTP_HOST'] . '/lib/rotajs.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>   
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$nome_radio?></title>

    <link rel="stylesheet" href="<?=$DirRotaCss?>"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

    <script type="text/javascript" src="<?=$DirRotaJs?>"></script> 


</head>
<body> 


<!-- MENU - MODELO 02 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand">i9cast - WebRádio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<!-- PAINEL PRINCIPAL - MODELO 02 --> 
    <div style="margin-top:80px;" class="container-fluid">
        <div class="row row-cols-1 row-cols-md-2 d-j-a"> 
            <div class="col-lg-8 col">
                <div style="height:400px;" class="w-100 bg-danger">
                    01
                </div>
            </div>
            <div style="height:400px;" class="col-lg-3 col border-bottom shadow-lg border rounded">
                <div class="d-j-a h-75">
                    <div style="width:150px;height:150px;font-size:120px;" class="rounded-circle d-j-a shadow-lg"><i class="fa fa-play-circle"></i></div>                    
                </div>                 
                <!-- PLAY STREAMING    
            <audio id="player" autoplay=""> -->
                <!--<source id="srcP" src="https://player.ipstm.net/ssl.php?ip=srv10.ipstm.net&port=33478&mount=/;" type="audio/mpeg">  -->
         <!--       <span>Your browser dont support that element.</span>
            </audio> -->
                <div class="text-center">
                    <span class="fs-5">Tocando Agora <i class="fa-solid fa-music"></i></span>
                    <marquee class="status cc_streaminfo" data-type="song" data-username="hoostcom" style="color: #fff;opacity: 1;"><?php echo $dadosXML->musica_atual; ?></marquee>
                </div>                 
            </div>
        </div>
    </div>

<!-- TITULO DA COLEÇÃO -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 d-j-a p-5">
                <h1>Promoção da semana</h1>
            </div>
        </div>
    </div>

<!-- DESTAQUE -->
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-1">
            <div style="height: 500px;" class="col-lg-6 col d-j-a">
                <div class="w-75 h-100">
                    <img class="w-100 h-100" src="" alt="">
                </div>
            </div>
            <div style="height: 500px;" class="col-lg-5 col-10 border">
                <h1 class="h-25">titulo</h1>
                <p class="h-50">
                    descrição
                </p>
                <div class="w-100 h-25 d-j-a">
                    <i class="fa-regular fa-star m-1"></i>
                    <i class="fa-regular fa-star m-1"></i>
                    <i class="fa-solid fa-star m-1"></i>
                    <i class="fa-solid fa-star m-1"></i>
                    <i class="fa-solid fa-star m-1"></i>                        
                    <button class="btn btn-primary w-50 ms-auto">comprar</button>
                </div>                
            </div>
        </div>
    </div>


<!-- TITULO DA COLEÇÃO -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 d-j-a p-5">
                <h1>Todas as cores do Verão</h1>
            </div>
        </div>
    </div>



<!-- PRODUTOS   -->
    <div class="container-fluid">
        <div class="row d-j-a">
            <div style="height:350px;" class="col-2 border m-2">

                <div style="height:250px;">
                    <img class="w-100 h-100" src="" alt="">
                </div>
                <div style="height:100px;" class="p-2">
                    <div class="df">
                        <h4 class="me-auto">Moleton</h3>
                        <i class="fa-regular fa-heart fs-4 me-2"></i>
                        <p>124</p>
                    </div>                        
                    <div class="df">
                        <h5 class="me-auto">R$ 139,90</h4>
                        <button type="button" class="btn btn-primary">comprar</button>
                    </div>
                </div>

            </div>
            <div style="height:350px;" class="col-2 border m-2">
                <div style="height:250px;">
                    <img class="w-100 h-100" src="" alt="">
                </div>
                <div style="height:100px;" class="p-2">
                    <div class="df">
                        <h4 class="me-auto">Camisa</h3>
                        <i class="fa-regular fa-heart fs-4 me-2"></i>
                        <p>124</p>
                    </div>                        
                    <div class="df">
                        <h5 class="me-auto">R$ 139,90</h4>
                        <button type="button" class="btn btn-primary">comprar</button>
                    </div>
                </div>
            </div>
            <div style="height:350px;" class="col-2 border m-2">
                <div style="height:250px;">
                    <img class="w-100 h-100" src="" alt="">
                </div>
                <div style="height:100px;" class="p-2">
                    <div class="df">
                        <h4 class="me-auto">Blusa</h3>
                        <i class="fa-regular fa-heart fs-4 me-2"></i>
                        <p>124</p>
                    </div>                        
                    <div class="df">
                        <h5 class="me-auto">R$ 139,90</h4>
                        <button type="button" class="btn btn-primary">comprar</button>
                    </div>
                </div>
            </div>
            <div style="height:350px;" class="col-2 border m-2">
                <div style="height:250px;">
                    <img class="w-100 h-100" src="" alt="">
                </div>
                <div style="height:100px;" class="p-2">
                    <div class="df">
                        <h4 class="me-auto">Sapato</h3>
                        <i class="fa-regular fa-heart fs-4 me-2"></i>
                        <p>124</p>
                    </div>                        
                    <div class="df">
                        <h5 class="me-auto">R$ 139,90</h4>
                        <button type="button" class="btn btn-primary">comprar</button>
                    </div>
                </div>
            </div>
            <div style="height:350px;" class="col-2 border m-2">
                <div style="height:250px;">
                    <img class="w-100 h-100" src="" alt="">
                </div>
                <div style="height:100px;" class="p-2">
                    <div class="df">
                        <h4 class="me-auto">Shorts</h3>
                        <i class="fa-regular fa-heart fs-4 me-2"></i>
                        <p>124</p>
                    </div>                        
                    <div class="df">
                        <h5 class="me-auto">R$ 139,90</h4>
                        <button type="button" class="btn btn-primary">comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- SOBRE -->
    <div class="container-fluid">
        <div class="row d-j-a">
            <div style="height:400px;" class="col-lg-5">
                <h1>sobre</h1>
                <p>olá</p>
            </div>
            <div style="height:400px;" class="col-lg-5">
                <img class="w-100 h-100" src="" alt="">
            </div>
        </div>
    </div>
<!-- RODAPÉ -->
    <div class="container-fluid">
        <div style="height:250px;" class="row row-cols-1 row-cols-md-3">
            <div class="col-lg-4 col bg-danger h-100 d-j-a">
                <div style="height: 150px;" class="border w-75">
                    <h4>Links</h4>
                    <h6>inicio</h6>
                    <h6>produtos</h6>
                </div>
            </div>
            <div class="col-lg-4 col h-100 d-j-a">
                <div class="w-100 text-white fs-3">
                    <div class="d-j-a">
                        <div style="width:30%;height:50px;" class="border shadow rounded m-2 d-j-a bg-primary">
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                        <div style="width:30%;height:50px;" class="border shadow rounded m-2 d-j-a bg-rosa">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div style="width:30%;height:50px;" class="border shadow rounded m-2 d-j-a bg-success">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                    </div>  
                    <div class="d-j-a">
                        <div style="width:30%;height:50px;" class="border shadow rounded m-2 d-j-a bg-laranja">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div style="width:30%;height:50px;" class="border shadow rounded m-2 d-j-a bg-warning">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div style="width:30%;height:50px;" class="border shadow rounded m-2 d-j-a bg-lilas">
                            <i class="fa-brands fa-tiktok"></i>
                        </div>
                    </div>
                </div>                              
            </div>
            <div class="col-lg-4 col bg-success h-100 d-j-a">
                <div style="height: 150px;" class="border w-75">
                    © 2023 Todos os direitos reservados
                    <br>
                    Termos e Condições | Política de Privacidade
                    <br>
                    i9cast.com.br
                </div>
            </div>
        </div>
    </div>

</body>
</html>


