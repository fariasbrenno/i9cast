<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> <!--Bulma-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"><!--Font Awesome-->
    <script src="https://www.youtube.com/iframe_api"></script> <!--API do youtube-->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
    <title>Vídeo Aulas</title>
    <style>

    </style>
</head>
<body class="has-navbar-fixed-top">
  <!--Header,menu,nav-->
  <header>
    <nav class="navbar is-fixed-top is-dark" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a href="index.php">
          <img class="image is-64x64"src="_img/logo.png" alt="Logo" id="logo">
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" id="burger-menu">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div class="navbar navbar-menu is-dark" id="start-menu">
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
      <div class="hero-body">
        <i class="fa-solid fa-headphones fa-2xl is-size-1 mb-6"></i>
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

        <!--Inicio do card-->
        <div class="column is-3 has-background-white m-3 box custom-hover">
          <figure class="image">
            <img src="_img/streaming.jpg" alt="">
            <div class="modal-background modal-background-backgound-color is-flex is-justify-content-center is-align-items-center">
              <a href="#" class="button is-link open-modal">
                <p>Assistir</p>
              </a>
            </div>
          </figure>
          <h1 class="title is-5">Como acessar o painel de Streamin e visão geral</h1>
          <p>Nesta aula você aprenderá acessar seu painel de streaming, além de ter uma explicação geral sobre as funcionalidades do seu painel</p>
          <!--Modal de vídeo youtube-->
          <div class="modal open-modal">
            <div class="modal-background"></div>
            <div class="modal-content">
              <iframe class="youtube-iframe" width="100%" height="315" src="https://www.youtube.com/embed/wXIRi9Hiuqk?si=38-ztzAYb7cHYukT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen enablejsapi></iframe>
            </div>
            <button class="modal-close is-large close-modal" aria-label="close"></button>
          </div>
        </div>
        <!--Fim do card-->
        
        <!--Inicio do card-->
        <div class="column is-3 has-background-white m-3 box custom-hover">
          <figure class="image">
            <img src="_img/streaming.jpg" alt="">
            <div class="modal-background modal-background-backgound-color is-flex is-justify-content-center is-align-items-center">
              <a href="#" class="button is-link open-modal">
                <p>Assistir</p>
              </a>
            </div>
          </figure>
          <h1 class="title is-5">Como acessar o painel de Streamin e visão geral</h1>
          <p>Nesta aula você aprenderá acessar seu painel de streaming, além de ter uma explicação geral sobre as funcionalidades do seu painel</p>
          <!--Modal de vídeo youtube-->
          <div class="modal open-modal">
            <div class="modal-background"></div>
            <div class="modal-content">
              <iframe class="youtube-iframe" width="560" height="315" src="https://www.youtube.com/embed/wXIRi9Hiuqk?si=38-ztzAYb7cHYukT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <button class="modal-close is-large close-modal" aria-label="close"></button>
          </div>
        </div>
        <!--Fim do card--> 

      </div>
     
    </section>

    <!--Seção playlists-video aulas-->
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

      <div class="columns is-mobile mb-6 is-hidden-touch"><!--Container das colunas e cards das ferramentas (Some em aparelhos touch, celulares e tablets)-->

        <div class="column is-1">
          <div class="card">
            <div class="card-image">
              <figure class="image is-square">
                <img src="_img/medicast-logo.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="content">
              <p class="is-5 has-text-centered has-text-weight-semibold">Mediacast</p>
            </div>
            <div class="buttons is-centered">
              <a href="#" class="button is-link is-success">Baixar</a>
            </div>
          </div>
        </div>

        <div class="column is-1">
          <div class="card">
            <div class="card-image">
              <figure class="image is-square">
                <img src="_img/medicast-logo.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="content">
              <p class="is-5 has-text-centered has-text-weight-semibold">Mediacast</p>
            </div>
            <div class="buttons is-centered">
              <a href="#" class="button is-link is-success">Baixar</a>
            </div>
          </div>
        </div>

        <div class="column is-1">
          <div class="card">
            <div class="card-image">
              <figure class="image is-square">
                <img src="_img/medicast-logo.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="content">
              <p class="is-5 has-text-centered has-text-weight-semibold">Mediacast</p>
            </div>
            <div class="buttons is-centered">
              <a href="#" class="button is-link is-success">Baixar</a>
            </div>
          </div>
        </div>

        <div class="column is-1">
          <div class="card">
            <div class="card-image">
              <figure class="image is-square">
                <img src="_img/medicast-logo.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="content">
              <p class="is-5 has-text-centered has-text-weight-semibold">Mediacast</p>
            </div>
            <div class="buttons is-centered">
              <a href="#" class="button is-link is-success">Baixar</a>
            </div>
          </div>
        </div>

        <div class="column is-1">
          <div class="card">
            <div class="card-image">
              <figure class="image is-square">
                <img src="_img/medicast-logo.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="content">
              <p class="is-5 has-text-centered has-text-weight-semibold">Mediacast</p>
            </div>
            <div class="buttons is-centered">
              <a href="#" class="button is-link is-success">Baixar</a>
            </div>
          </div>
        </div>

      </div>

      <div class="columns is-mobile mb-6 is-hidden-desktop"><!--Linha 1 Container das colunas e cards das ferramentas (Some em desktop e só aparece em mobile e tablets)-->

        <div class="column is-3">
          <div class="card">
            <div class="card-image">
              <figure class="image is-square">
                <img src="_img/medicast-logo.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="content">
              <p class="is-5 has-text-centered has-text-weight-semibold">Mediacast</p>
            </div>
            <div class="buttons is-centered">
              <a href="#" class="button is-link is-success">Baixar</a>
            </div>
          </div>
        </div>

        <div class="column is-3">
          <div class="card">
            <div class="card-image">
              <figure class="image is-square">
                <img src="_img/medicast-logo.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="content">
              <p class="is-5 has-text-centered has-text-weight-semibold">Mediacast</p>
            </div>
            <div class="buttons is-centered">
              <a href="#" class="button is-link is-success">Baixar</a>
            </div>
          </div>
        </div>

        <div class="column is-3">
          <div class="card">
            <div class="card-image">
              <figure class="image is-square">
                <img src="_img/medicast-logo.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="content">
              <p class="is-5 has-text-centered has-text-weight-semibold">Mediacast</p>
            </div>
            <div class="buttons is-centered">
              <a href="#" class="button is-link is-success">Baixar</a>
            </div>
          </div>
        </div>

      </div>

      <div class="columns is-mobile mb-6 is-hidden-desktop"> <!--Linha 2 Container das colunas e cards das ferramentas (Some em desktop e só aparece em mobile e tablets)-->

        <div class="column is-3">
            <div class="card">
              <div class="card-image">
                <figure class="image is-square">
                  <img src="_img/medicast-logo.png" alt="Placeholder image">
                </figure>
              </div>
              <div class="content">
                <p class="is-5 has-text-centered has-text-weight-semibold">Mediacast</p>
              </div>
              <div class="buttons is-centered">
                <a href="#" class="button is-link is-success">Baixar</a>
              </div>
            </div>
          </div>

          <div class="column is-3">
            <div class="card">
              <div class="card-image">
                <figure class="image is-square">
                  <img src="_img/medicast-logo.png" alt="Placeholder image">
                </figure>
              </div>
              <div class="content">
                <p class="is-5 has-text-centered has-text-weight-semibold">Mediacast</p>
              </div>
              <div class="buttons is-centered">
                <a href="#" class="button is-link is-success">Baixar</a>
              </div>
            </div>
          </div>
      </div>
      
    </section>
    <!--Modal-->
    
  </main>
  <footer class="footer has-background-dark">
    Rodapé
  </footer>
  <script src="_js/script.js">
  
  </script>

</body>

</html>