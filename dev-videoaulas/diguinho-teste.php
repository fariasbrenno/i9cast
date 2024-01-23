<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Exemplo de Incorporação do YouTube</title>
    <script>
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

        // Evento que é executado quando a página termina de carregar
        document.addEventListener('DOMContentLoaded', function() {
            // ID do vídeo do YouTube que você quer incorporar
            var videoId = '6slNiphnaJ8';

            // Chamando a função para buscar e exibir os detalhes do vídeo
            fetchVideoDetails(videoId);
        });
    </script>
</head>
<body>
    <!-- Elemento HTML para exibir o título do vídeo -->
    <h1 id="video-title">Título do Vídeo</h1>

    <!-- Elemento HTML para exibir a descrição do vídeo -->
    <p id="video-description">Descrição do Vídeo</p>

    <!-- iFrame para incorporar o vídeo do YouTube -->
    <iframe id="youtube-video" width="560" height="315" src="https://www.youtube.com/embed/6slNiphnaJ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</body>
</html>
