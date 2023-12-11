
    
        $(document).ready(function() {

            $('#form_pedidos').submit(function(e) {
                e.preventDefault();
            
                // Obter dados do formulário
                var musica = $('#musica').val();
                var nome = $('#nome').val();
            
                // Criar um objeto com os dados a serem enviados para o servidor
                var dados = {
                    musica: musica,
                    nome: nome
                };
            
                // Enviar os dados para o servidor via AJAX
                $.ajax({
                    method: 'POST',
                    data: dados,
                    url: 'painel/controllers/PedidoController.php',
                    dataType: 'json',
                    success: function(response) {

                        $('#nome').val('');
                        $('#musica').val('');      

$('#chat').css('display','block');   
$('#chat').fadeOut(3000); 

                         
                    },
                    error: function(xhr, status, error) {
                        console.error('Erro na requisição AJAX:', error);
                        alert('Erro na requisição AJAX. Por favor, tente novamente mais tarde.');
                    }
                });
            });



            function obterUltimoCadastro() {

            // AJAX para buscar os comentários já enviados ao carregar a página
            $.ajax({
                url: 'controllers/RespostaPedidosController.php',
                method: 'GET',
                dataType: 'json',       
                success: function(response) {

                   $('.listar_pedidos').html('');
                   response.forEach(function(item) {
                        // Suponha que você recebeu o JSON com a data
                        var jsonData = item.data;
                    
                        // Formata a data para o formato desejado (DD/MM/YYYY HH:mm:ss)
                        var dataFormatada = formatarData(jsonData);
                
                    function formatarData(data) {
                        // Divide a data em partes (data e hora)
                        var partesDataHora = data.split(' ');
                
                        // Divide a data em partes (ano, mês, dia)
                        var partesData = partesDataHora[0].split('-');
                
                        // Formata a data para o formato desejado (DD/MM/YYYY HH:mm:ss)
                        var dataFormatada = partesData[2] + '/' + partesData[1] ;
                
                        return dataFormatada;
                    }
                
                    $('.listar_pedidos').append('<li class="border-primary border-bottom mb-2">Nome: ' + item.nomes + '<br>Comentario: ' + item.musicas + '<br>Data: ' + dataFormatada + ' às ' + item.hora + '</li>');
                });
                
                   
                }
            });
        };
        // Chama a função para obter o último cadastro a cada 5 segundos (ou outro intervalo desejado)
        setInterval(obterUltimoCadastro, 2000); // 5000 ms = 5 segundos





        $('#limpar').submit(function(e){

                e.preventDefault();

            $.ajax({

                url: 'controllers/LimparPedidosController.php',
                method: 'POST',
                data: { limpar: "mostrar" },        
                success: function(response) {

                    $('.alerta_limpar').css('display','block');

                    setTimeout(function(){
                        $('.alerta_limpar').fadeOut(300);
                    }, 5000);                    
                },
                error: function(error) {
                    alert("Erro no AJAX2");
                }
            });

        });


    });

