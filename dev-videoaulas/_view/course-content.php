<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso</title>
</head>
<body>
    <?php
        include("../_view/header.php")
    ?>
<main class="container is-fluid py-5 px-6" id="teste">
    <div class="is-flex mb-3">
        <div class="is-flex is-align-items-center">
            <i class="fa-solid fa-arrow-left"></i>
        </div>
        <span class="mx-2">|</span>
        <div>
            <h1 class="title is-4">Playlist 01 - Iniciante</h1>
        </div>
    </div>

    <div class="is-flex">

        <div class="mr-5 has-background-grey-lighter">
            <div class="has-background-dark has-text-white">
                INTRODUÇÃO
            </div>
            <div class="is-flex is-align-items-center my-2 has-background-white px-2">
                <div class="mr-2">
                    <i class="fa-regular fa-circle"></i>
                </div>
                <div class="is-flex is-align-items-center">
                    <figure class="image has-ratio is-48x48">
                        <img src="../_img/streaming.jpg" alt="">
                    </figure>
                    <div>
                        01-Come acessar o site
                    </div>
                </div>
            </div>  
            <div class="is-flex is-align-items-center my-2 has-background-white px-2">
                <div class="mr-2">
                    <i class="fa-regular fa-circle"></i>
                </div>
                <div class="is-flex is-align-items-center">
                    <figure class="image has-ratio is-48x48">
                        <img src="../_img/streaming.jpg" alt="">
                    </figure>
                    <div>
                        01-Come acessar o site
                    </div>
                </div>
            </div>  
        </div>

        <div class="">
            <div>
                <iframe width="900" height="700" src="https://www.youtube.com/embed/rC6r1ne-BZ0?si=7HT2sjRzMMZBAeEl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="title">Título do vídeo</div>
            <div>
                Descrição
            </div>
        </div>
    </div>
</main>
</body>
</html>

