
$(document).ready(function() {            

    $('.acao_versiculo').click(function() {   

        var acao_versiculo = $('.acao_versiculo').val();
        var dados = {
            acao_versiculo: acao_versiculo
        }      

        $.ajax({
            method: 'POST',
            data: dados,
            url: 'controllers/AcaoController.php',
            success: function(response) {   
                window.location.reload();
            },
            error: function(xhr, status, error) {
                console.error('Erro na requisição AJAX:', error);
                alert('Erro na requisição AJAX. Por favor, tente novamente mais tarde.');
            }
        });

    });
    $('.acao_doacao').click(function() {   

        var acao_doacao = $('.acao_doacao').val();
        var dados = {
            acao_doacao: acao_doacao
        }      
          
        $.ajax({
            method: 'POST',
            data: dados,
            url: 'controllers/AcaoController.php',
            success: function(response) {   
                window.location.reload();
            },
            error: function(xhr, status, error) {
                console.error('Erro na requisição AJAX:', error);
                alert('Erro na requisição AJAX. Por favor, tente novamente mais tarde.');
            }
        });

    });
    $('.acao_fotos').click(function() {   

        var acao_fotos = $('.acao_fotos').val();
        var dados = {
            acao_fotos: acao_fotos
        }      
          
        $.ajax({
            method: 'POST',
            data: dados,
            url: 'controllers/AcaoController.php',
            success: function(response) {   
                window.location.reload();
            },
            error: function(xhr, status, error) {
                console.error('Erro na requisição AJAX:', error);
                alert('Erro na requisição AJAX. Por favor, tente novamente mais tarde.');
            }
        });

    });

});