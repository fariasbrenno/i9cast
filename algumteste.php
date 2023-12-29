<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="_css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> <!--Bulma-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> <!--Font Awesome-->
  <script src="https://www.youtube.com/iframe_api"></script> <!--API do youtube-->
  <title>Vídeo Aulas</title>
</head>

<body class="has-navbar-fixed-top">
  <!--Header, menu, nav-->
  <header>
    <nav class="navbar is-fixed-top is-dark" role="navigation" aria-label="main navigation">
      <!-- ... (Seu código anterior) ... -->
    </nav>
    <section class="hero is-medium is-dark has-text-centered">
      <div class="hero-body container">
        <!-- ... (Seu código anterior) ... -->
      </div>
    </section>
  </header>
  <!--Main-->
  <main>
    <!--Seção primeiros passos-->
    <section class="container">
      <!-- ... (Seu código anterior) ... -->
    </section>

    <!--Seção playlists-video aulas-->
    <section class="container">
      <!-- ... (Seu código anterior) ... -->
      <div class="columns">
        <div class="column is-3 has-background-white m-3 box custom-hover">
          <figure class="image">
            <img src="_img/streaming.jpg" alt="">
            <div class="modal-background modal-background-backgound-color is-flex is-justify-content-center is-align-items-center">
              <a href="#" class="button is-link" id="play-1">
                <p>Assistir</p>
              </a>
            </div>
          </figure>
          <h1 class="title is-6">Como acessar o painel de Streaming e visão geral</h1>
          <p>Nesta aula você aprenderá a acessar seu painel de streaming, além de ter uma explicação geral sobre as
            funcionalidades do seu painel</p>

          <div class="modal" id="modal-1">
            <div class="modal-background"></div>
            <div class="modal-content">
              <iframe id="youtube-video-1" width="560" height="315"
                src="https://www.youtube.com/embed/wXIRi9Hiuqk?si=38-ztzAYb7cHYukT" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            </div>
            <button class="modal-close is-large" aria-label="close" id="close-modal-1"></button>
          </div>
        </div>

        <!-- ... (Repetição do bloco acima com dados diferentes) ... -->

      </div>
    </section>

    <!--Seção de ferramentas-->
    <section class="container mt-6">
      <!-- ... (Seu código anterior) ... -->
      <div class="columns mb-6">
        <!-- ... (Seu código anterior) ... -->
      </div>
    </section>

    <!--Modal-->
    <div class="modal" id="modal">
      <div class="modal-background"></div>
      <div class="modal-content">
        <iframe id="youtube-video" width="560" height="315"
          src="https://www.youtube.com/embed/rC6r1ne-BZ0?si=ZcRZVd1sy5WhX7zw" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
        <span class="icon">
          <i class="fa-solid fa-circle-xmark fa-2xl has-text-danger" id="close-modal"></i>
        </span>
      </div>
    </div>
  </main>
  <footer class="footer has-background-dark">
    Rodapé
  </footer>
  <script src="_js/script.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var modal1 = document.getElementById('modal-1');
      var youtubeVideo1 = document.getElementById('youtube-video-1');
      var closeModal1 = document.getElementById('close-modal-1');

      closeModal1.addEventListener('click', function () {
        modal1.style.display = 'none';
        youtubeVideo1.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
      });

      modal1.addEventListener('click', function (event) {
        if (event.target === modal1) {
          modal1.style.display = 'none';
          youtubeVideo1.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
        }
      });

      document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' || event.key === 'Esc') {
          modal1.style.display = 'none';
          youtubeVideo1.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
        }
      });

      var modal = document.getElementById('modal');
      var youtubeVideo = document.getElementById('youtube-video');
      var closeModal = document.getElementById('close-modal');

      closeModal.addEventListener('click', function () {
        modal.style.display = 'none';
        youtubeVideo.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
      });

      modal.addEventListener('click', function (event) {
        if (event.target === modal) {
          modal.style.display = 'none';
          youtubeVideo.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
        }
      });

      document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' || event.key === 'Esc') {
          modal.style.display = 'none';
          youtubeVideo.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
        }
      });
    });
  </script>
</body>

</html>
