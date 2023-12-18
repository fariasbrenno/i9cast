

function atualizarLetreiro() {
    $.ajax({
        url: '../../config/AtualizarLetreiro.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('.letreiro-ajax').text(data.musica_atual);
        },
        error: function(xhr, status, error) {
            console.error('Erro na requisição AJAX:', status, error);
        }
    });
}
setInterval(atualizarLetreiro, 5000);