
$(document).ready(function(){

    $('.instalar-app').click(function() {
        // Defina a variável 'acao' conforme necessário
        var acao = 'suaAcaoAqui';

        $.ajax({
            method: 'POST',
            data: { acao: acao }, // Certifique-se de que 'acao' esteja definida corretamente
            url: 'painel/controllers/DownloadAppController.php',
            success: function() {   
                //window.location.reload();
            },
            error: function(error) {
                console.error('Erro na requisição AJAX:', error);
                alert('Erro na requisição AJAX. Por favor, tente novamente mais tarde A.');
            }
        });
    });
    
});
