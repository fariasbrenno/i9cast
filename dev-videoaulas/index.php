<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> <!--Bulma-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"><!--Font Awesome-->
    <script src="https://www.youtube.com/iframe_api"></script> <!--API do youtube-->
    <title>Vídeo Aulas</title>
</head>
<body class="has-navbar-fixed-top">
  <!--Header,menu,nav-->
  <header>
    <nav class="navbar is-fixed-top is-dark" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a href="index.php" id="teste">
          <img class="image is-64x64"src="_img/logo.png" alt="Logo" id="logo">
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" id="burger-menu">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div class="navbar-menu" id="start-menu">
        <span class="navbar-item"><a class="has-text-white" href="#comece">Comece por aqui</a></span>
        <span class="navbar-item"><a class="has-text-white" href="#playlists">Video aulas</a></span>
        <span class="navbar-item"><a class="has-text-white" href="#tools">Ferramentas</a></span>
      </div>
      <!--Whatsapp Menu-->
      <div class="navbar-menu navbar-end" id="end-menu">
        <a class="navbar-item is-tab" href="https://wa.me/5596991415493" target="_blank">
          <i class="fa-brands fa-whatsapp has-text-success fa-xl mr-2"></i>
          <span>Comercial</span>
        </a>
        <a class="navbar-item is-tab" href="https://wa.me/5596991415493" target="_blank">
          <i class="fa-brands fa-whatsapp has-text-success fa-xl mr-2"></i>
          <span>Suporte Técnico</span>
        </a>
      </div>
    </nav>
    <section class="hero is-medium is-dark has-text-centered">
      <div class="hero-body container">
        <i class="fa-solid fa-radio fa-2xl mb-6 is-size-1"></i>
        <p class="title">
          Bem-vindo as aulas i9cast
        </p>
        <p class="subtitle">
          Aprenda a gerenciar sua Web Rádio
        </p>
      </div>
    </section>
  </header>
  <!--Main-->
  <main>
    <!--Seção primeiros passos-->
    <section class="container">

      <div class="columns mt-5">
        <div class="column has-background-light">
          <h1 class="title is-4" id="comece"><i class="fa-solid fa-lightbulb mr-2"></i>Comece por aqui</h1>
        </div>
      </div>

      <div class="columns">

        <div class="column is-3 has-background-white mt-3 box custom-hover">
          <figure class="image">
            <img src="_img/streaming.jpg" alt="">
            <div class="modal-background modal-background-backgound-color is-flex is-justify-content-center is-align-items-center">
              <a href="#" class="button is-link" id="play-1">
                <p>Assistir</p>
              </a>
            </div>
          </figure>
          <h1 class="title is-6">Como acessar o painel de Streamin e visão geral</h1>
          <p>Nesta aula você aprenderá acessar seu painel de streaming, além de ter uma explicação geral sobre as funcionalidades do seu painel</p>

          <div class="modal" id="modal-1">
            <div class="modal-background"></div>
            <div class="modal-content">
              <iframe id="teste" width="560" height="315" src="https://www.youtube.com/embed/wXIRi9Hiuqk?si=38-ztzAYb7cHYukT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <button class="modal-close is-large" aria-label="close" id="close-modal"></button>
          </div>
        </div>
      </div>

    </section>

    <!--Seção playlists-video asulas-->
    <section class="container">
      <div class="columns mt-5">
        <div class="column has-background-light">
          <h1 class="title is-4" id="playlists"><i class="fa-solid fa-circle-play mr-2"></i>Playlists - Video Aulas</h1>
        </div>
      </div>
      <div class="columns">

        <div class="column is-3">
          <div class="card">
            <div class="card-image">
              <figure class="image is-square">
                <img src="_img/sigma.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="content px-2">
              <h1 class="title is-5 has-text-centered mt-3"><i class="fa-solid fa-list mr-2"></i>Playlist 01 - Iniciante</h1>
              <p>Nesta playlist você vai aprender Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius facere accusantium optio harum adipisci a sunt, laborum assumenda ipsum odio libero aut quibusdam, praesentium doloremque animi, sapiente illo dolores eligendi!</p>
            </div>
            <div class="buttons is-centered">
              <a href="beginner-course.php" class="button is-link is-half">
                Acessar
              </a>
            </div>
          </div>
        </div>

        <div class="column is-3">
          <div class="card">
            <div class="card-image">
              <figure class="image is-square">
                <img src="_img/sigma.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="content px-2">
              <h1 class="title is-5 has-text-centered mt-3"><i class="fa-solid fa-list mr-2"></i>Playlist 01 - Iniciante</h1>
              <p>Nesta playlist você vai aprender Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius facere accusantium optio harum adipisci a sunt, laborum assumenda ipsum odio libero aut quibusdam, praesentium doloremque animi, sapiente illo dolores eligendi!</p>
            </div>
            <div class="buttons is-centered">
              <a href="beginner-course.php" class="button is-link is-half">
                Acessar
              </a>
            </div>
          </div>
        </div>

        <div class="column is-3">
          <div class="card">
            <div class="card-image">
              <figure class="image is-square">
                <img src="_img/sigma.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="content px-2">
              <h1 class="title is-5 has-text-centered mt-3"><i class="fa-solid fa-list mr-2"></i>Playlist 01 - Iniciante</h1>
              <p>Nesta playlist você vai aprender Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius facere accusantium optio harum adipisci a sunt, laborum assumenda ipsum odio libero aut quibusdam, praesentium doloremque animi, sapiente illo dolores eligendi!</p>
            </div>
            <div class="buttons is-centered">
              <a href="#" class="button is-link is-half">
                Acessar
              </a>
            </div>
          </div>
        </div>
           
      </div>
    </section>
    <!--Seção de ferramentas-->
    <section class="container mt-6">
      <div class="columns mt-5">
        <div class="column has-background-light barra">
          <h1 class="title is-4" id="tools"><i class="fa-solid fa-gear mr-2"></i>Ferramentas</h1>
        </div>
      </div>

      <div class="columns mb-6">

        <div class="column is-2">
          <h1 class="title mb-1 is-6 has-text-centered">MediaCast</h1>
          <div class="content is-large m-0">
            <figure>
              <img src="_img/medicast-logo.png" alt="">
            </figure>
          </div>
          <div class="buttons is-centered">
            <a href="#" class="button is-success">
              Baixar
            </a>
          </div>
        </div> 
        
        <div class="column is-2">
          <h1 class="title mb-1 is-6 has-text-centered">MediaCast</h1>
          <div class="content is-large m-0">
            <figure>
              <img src="_img/medicast-logo.png" alt="">
            </figure>
          </div>
          <div class="buttons is-centered">
            <a href="#" class="button is-success">
              Baixar
            </a>
          </div>
        </div>  

        <div class="column is-2">
          <h1 class="title mb-1 is-6 has-text-centered">MediaCast</h1>
          <div class="content is-large m-0">
            <figure>
              <img src="_img/medicast-logo.png" alt="">
            </figure>
          </div>
          <div class="buttons is-centered">
            <a href="#" class="button is-success">
              Baixar
            </a>
          </div>
        </div>  

        <div class="column is-2">
          <h1 class="title mb-1 is-6 has-text-centered">MediaCast</h1>
          <div class="content is-large m-0">
            <figure>
              <img src="_img/medicast-logo.png" alt="">
            </figure>
          </div>
          <div class="buttons is-centered">
            <a href="#" class="button is-success">
              Baixar
            </a>
          </div>
        </div>  

        <div class="column is-2">
          <h1 class="title mb-1 is-6 has-text-centered">MediaCast</h1>
          <div class="content is-large m-0">
            <figure>
              <img src="_img/medicast-logo.png" alt="">
            </figure>
          </div>
          <div class="buttons is-centered">
            <a href="#" class="button is-success">
              Baixar
            </a>
          </div>
        </div>  

        <div class="column is-2">
          <h1 class="title mb-1 is-6 has-text-centered">MediaCast</h1>
          <div class="content is-large m-0">
            <figure>
              <img src="_img/medicast-logo.png" alt="">
            </figure>
          </div>
          <div class="buttons is-centered">
            <a href="#" class="button is-success">
              Baixar
            </a>
          </div>
        </div>  

      </div>
    </section>
    <!--Modal-->
    <div class="modal">
      <div class="modal-background ">
      </div>
        <div class="modal-content ">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/rC6r1ne-BZ0?si=ZcRZVd1sy5WhX7zw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <span class="icon">
            <i class="fa-solid fa-circle-xmark fa-2xl has-text-danger"></i>
          </span>
        </div>
        
    </div>
  </main>
  <footer class="footer">
    Rodapé
  </footer>
  <script src="_js/script.js">
  
  </script>

</body>

</html>