
$(document).ready(function () {
    
    $('.salvar_cor').click(function () {
        var corSelecionada = $('input[name="cor"]:checked').val();
        $.ajax({
            method: 'POST',
            data: { cor: corSelecionada },
            url: 'controllers/CorSiteController.php',
            success: function (response) {
                window.location.reload();
            },
            error: function (xhr, status, error) {
                console.error('Erro na requisição AJAX:', error);
                alert('Erro na requisição AJAX. Por favor, tente novamente mais tarde.');
            }
        });
    });
})