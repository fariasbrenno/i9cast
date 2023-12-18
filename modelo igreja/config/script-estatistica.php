
<?php
    $data = $conexao->query('select * from estatistica');
    $count = 1;
    foreach ($data as $row){
        $numero = $row['ouvintes'] + $count;
    }
?>

<script>
$(document).ready(function() {

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        console.log("Geolocalização não é suportada pelo navegador.");
    }

    function showPosition(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        var pais = "Desconhecido";
        var cidade = "Desconhecida";
        var estado = "Desconhecido";

        $.getJSON("https://nominatim.openstreetmap.org/reverse", {
            lat: latitude,
            lon: longitude,
            format: "json"
        }).done(function(data) {
            pais = data.address.country;
            cidade = data.address.city;
            estado = data.address.state;
            var numero = <?= $numero ?>;

            $.ajax({
                method: 'POST',
                data: { pais: pais, cidade: cidade, estado: estado, ouvinte: numero},
                url: 'controllers/EstatisticaController.php',
                success: function(response) {
                    console.log(response);
                }
            });
        });
    }

        var ativo = true; // Defina como "false" quando o usuário parar de ouvir a rádio
        var interval = 5000; // Tempo em milissegundos para atualizar o status do ouvinte (aqui é definido como 5 segundos)

        function atualizarStatus() {
            if (ativo) {
                var numero = <?= $numero ?>;
                $.ajax({
                    method: 'POST',
                    data: { ouvinte: numero, ativo: ativo },
                    url: 'controllers/EstatisticaController.php',
                    success: function(response) {
                        console.log(response);
                    }
                });
            };            
        };
        
        // Atualiza o status do ouvinte a cada intervalo definido
        setInterval(atualizarStatus, interval);
 
        window.onbeforeunload = clickme;
        
        function clickme() {
            var ativo = 'false';
            var numero = <?= $numero ?>;

                $.ajax({
                    method: 'POST',
                    data: { ouvinte: numero, ativo: ativo },
                    url: 'controllers/EstatisticaController.php',
                    success: function(response) {
                        console.log(response);
                    }
                });
        }

});

</script>