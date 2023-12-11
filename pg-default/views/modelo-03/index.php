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

<!-- MENU -->
    <nav class="navbar navbar-expand-lg bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">i9cast web rádio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Sobre</a>
                    <a class="nav-link" href="#">Contato</a>
                </div>
            </div>
        </div>
    </nav>

<!-- MENU -->
    <div style="height:450px;" class="container-fluid bg-danger">
        <div class="row">
            <div style="width:400px;height:150px;position:absolute;top:100px;right:40px;" class="bg-black bg-gradient text-white rounded d-j-a">
                <div class="w-25">
                    <i style="font-size: 100px;" class="fa fa-play-circle"></i>
                </div>
                <div class="text-center w-75">
                    <div class="fs-5">Tocando Agora <i class="fa-solid fa-music"></i></div>
                    <marquee class="status cc_streaminfo" data-type="song" data-username="hoostcom" style="color: #fff;opacity: 1;">ola olao olao</marquee>
                </div>                    
            </div>
            <div style="width:400px;height:60px;position:absolute;top:260px;right:40px;" class="d-j-a fs-1">
                <i class="fa-brands fa-facebook m-2"></i>
                <i class="fa-brands fa-instagram m-2"></i>
                <i class="fa-brands fa-whatsapp m-2"></i>
                <i class="fa-solid fa-phone m-2"></i>
                <i class="fa-regular fa-envelope m-2"></i>
                <i class="fa-brands fa-tiktok m-2"></i>
            </div>
            <div class="col-lg-12">
                01
            </div>
        </div>
    </div>

<!-- MENU -->

<!-- MENU -->

<!-- RODAPE -->
    <div class="container-fluid bg-warning">
        <div style="height: 400px;" class="row">
            <div class="col-lg-4">
                01
            </div>
            <div class="col-lg-4">
                02
            </div>
            <div class="col-lg-4">
                03
            </div>
        </div>
    </div>


</body>
</html>