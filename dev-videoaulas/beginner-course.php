<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Vídeo Aulas</title>
</head>
<body>
    <main class="container is-fluid py-5 px-6">

        <div class="is-flex mb-3">
            <div class="is-flex is-align-items-center">
                <i class="fa-solid fa-arrow-left"></i>
            </div>
            <span class="mx-2">|</span>
            <div>
                <h1 class="title is-4">Playlist 01 - Iniciante</h1>
            </div>
        </div>

        <div class="columns">
            <div class="column is-2 has-background-grey-lighter">
                <div class="container">
                    <div class="has-background-dark has-text-white pl-2">
                        INTRODUÇÃO
                    </div>
                
                    <div class="is-flex is-align-items-center my-2 pr-2 div-aula aula-01">
                        <div class="is-flex is-align-items-center">
                            <figure class="image has-ratio is-48x48">
                                <img src="_img/streaming.jpg" alt="">
                            </figure>
                            <span class="ml-2"><span>01</span>-Como acessar o site - link 1</span>
                        </div>
                    </div>

                    <div class="is-flex is-align-items-center my-2 pr-2 div-aula aula-02">
                        <div class="is-flex is-align-items-center">
                            <figure class="image has-ratio is-48x48">
                                <img src="_img/streaming.jpg" alt="">
                            </figure>
                            <span class="ml-2"><span>02</span>-Come acessar o site - link 2</span> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="column"><!--is-hidden-mobile-->
                <div>
                    <iframe id="iframe-aula" width="100%" height="700" src="https://www.youtube.com/embed/rC6r1ne-BZ0?si=7HT2sjRzMMZBAeEl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="title">Título do vídeo</div>
                <div>
                    Descrição
                </div>
            </div>
        </div>  
    </main>
    <footer class="footer">
        Rodapé
    </footer>
</body>
<script>
    const fristClass = document.querySelector('.aula-01');
    const secondClass = document.querySelector('.aula-02');
    const iframeClass = document.querySelector('#iframe-aula');

    fristClass.addEventListener('click', () => {
        iframeClass.setAttribute('src', 'https://www.youtube.com/embed/jGZdgsMufDE?si=I4Wxtq1uPWl_EK0e')
    })
</script>
</html>