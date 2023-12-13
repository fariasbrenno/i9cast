
$(document).ready(function() {

    // Altura do menu que você deseja subtrair (em pixels)
    var menuHeight = 110;
  // Captura o clique em links que tenham href começando com "#"
  $('a[href^="#"]').on('click', function(event) {
    // Impede o comportamento padrão do link (navegação imediata para a âncora)
    event.preventDefault();

    // Obtém o ID da seção do link clicado
    var target = $(this.hash);

    // Faz a rolagem suave até a seção, ajustando a posição para compensar a altura do menu
    $('html, body').animate({
      scrollTop: target.offset().top - menuHeight
    }, 100);
    
  });

  
});