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
                    <iframe id="youtube-video" width="100%" height="700" src="https://www.youtube.com/embed/rC6r1ne-BZ0?si=7HT2sjRzMMZBAeEl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <h1 id="video-title">Título do vídeo</h1>
                <p id="video-description">Descrição</p>
            </div>
        </div>  
    </main>
    <footer class="footer">
        Rodapé
    </footer>
</body>
<script>
//SCRIPT PARA ADICIONAR O TÍTULO E DESCRIÇÃO DO YOUTUBE NA PÁGINA
// Função para buscar detalhes do vídeo (título e descrição) do YouTube
function fetchVideoDetails(videoId) {
    // Sua chave de API do YouTube
    var apiKey = 'AIzaSyDIMNa3F_EP4_gUAEpC0g3IPbmoMkYOGWE';

    // Construindo a URL da API do YouTube para buscar os detalhes do vídeo
    var url = `https://www.googleapis.com/youtube/v3/videos?part=snippet&id=${videoId}&key=${apiKey}`;

    // Fazendo uma solicitação GET à API do YouTube
    fetch(url)
        // Convertendo a resposta em JSON
        .then(response => response.json())
        .then(data => {
            // Verificando se algum vídeo foi retornado
            if (data.items.length > 0) {
                // Extraindo título e descrição do primeiro vídeo retornado
                var title = data.items[0].snippet.title;
                var description = data.items[0].snippet.description;

                // Atualizando o conteúdo de elementos HTML com o título e a descrição
                document.getElementById('video-title').innerText = title;
                document.getElementById('video-description').innerText = description;
            } else {
                // Logando um erro no console se nenhum vídeo for encontrado
                console.error('Vídeo não encontrado');
            }
        })
        // Capturando e logando qualquer erro que ocorra durante a solicitação ou no processamento da resposta
        .catch(error => console.error('Erro ao buscar informações do vídeo:', error));
}
//=================================================================//
// Evento que é executado quando a página termina de carregar
document.addEventListener('DOMContentLoaded', function() {
    // ID do vídeo do YouTube que você quer incorporar
    var videoId = 'rC6r1ne-BZ0';

    // Chamando a função para buscar e exibir os detalhes do vídeo
    fetchVideoDetails(videoId);
});

//SCRIPT PARA MUDAR O VÍDEO AO CLICAR NA LISTA
const fristClass = document.querySelector('.aula-01');
    const secondClass = document.querySelector('.aula-02');
    const iframeClass = document.querySelector('#youtube-video');

    fristClass.addEventListener('click', () => {
        iframeClass.setAttribute('src', 'https://www.youtube.com/embed/jGZdgsMufDE?si=I4Wxtq1uPWl_EK0e')
    })
</script>
</html>
