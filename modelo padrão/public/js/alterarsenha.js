

    $(document).ready(function() {

        $('#form_AlterarSenha').submit(function(e) {
            e.preventDefault();

            var senha_atual = $('#senha_atual').val();
  
            $.ajax({
                method: 'POST',
                data: {senha: senha_atual},
                url: 'controllers/SenhaController.php',
                success: function(response) {

                    $('#senha_atual').val('');

                    $('#senha_salva').css('display', 'block');
                    $('#senha_salva').fadeOut(3000, function() {
                        window.location.href = '../painel';
                    });

                },
                error: function(xhr, status, error) {
                    console.error('Erro na requisição AJAX:', xhr, status, error);
                    // Exibir mensagem de erro para o usuário, se necessário
                }
            }); 

        });    
    });
