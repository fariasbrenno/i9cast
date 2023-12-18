
<!-- OFFCANVA ESTATISTICAS DE OUVINTES -->    
    <form id="salvar-versiculo">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasEstatisticas" aria-labelledby="offcanvasEstatisticasLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Estatísticas de visitas</h5>
                <button type="button" class="btn-close"data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"></button>
            </div>
            <div class="offcanvas-body">               
                <div class="row dja">
                    <div style="height:400px;" class="col-lg-3 bg-secondary-subtle rounded">
                        <div style="height:80px;" class="w-100 text-center m-1 border-bottom border-dark">                            
                            <h3 id="hoje"></h3>
                            <p>hoje:</p>
                        </div>
                        <div style="height:80px;" class="w-100 text-center m-1 border-bottom border-dark">                            
                            <h3 id="semana"></h3>
                            <p>semana:</p>
                        </div>
                        <div style="height:80px;" class="w-100 text-center m-1 border-bottom border-dark">                           
                            <h3 id="mes"></h3>
                            <p>mês:</p>
                        </div>
                        <div style="height:160px;" class="w-100 text-center p-2">     
                            <p>Ouvintes no Ano:</p> 
                            <h1 id="ano"></h1>         
                        </div>
                    </div>
                    <div style="height:300px;" class="col-lg-5 dja text-success">
                        <div class="w-100 p-4 border shadow rounded text-center"> 
                            <div class="dja">
                                <i class="fa-solid fa-ear-listen fs-2 me-3"></i>
                                <h1 id="agora"></h1>
                            </div>                                
                            <p class="m-2">ouvintes em tempo real!</p>                            
                            <h1 id="aplicativo_contador" class="mt-4"></h1>          
                            <p class="m-2">Total de download do aplicativo</p>
                        </div>        
                    </div>
                    <div style="height:400px;" class="col-lg-3 bg-secondary-subtle rounded">
                        <h2 class="p-2">Top 5 Cidades</h2>
<?php $pais = $conexao->query('SELECT cidade, COUNT(*) as total FROM estatistica GROUP BY cidade ORDER BY total DESC LIMIT 5;');
foreach($pais as $row):?>                               
                            <h6>#<?=$row['cidade'];?>: <?=$row['total'];?></h6>
<?php endforeach; ?> 

                        <h2 class="mt-3">Top Paises</h2>
<?php $pais = $conexao->query('SELECT pais, COUNT(*) as total FROM estatistica GROUP BY pais ORDER BY total DESC LIMIT 5;');
foreach($pais as $row):?>
                            <h6>#<?=$row['pais'];?>: <?=$row['total'];?></h6>
<?php endforeach; ?> 
                    </div>
                </div>
            </div>
        </div>
    </form>

<script>
    $(document).ready(function() {
        function obterTotalCadastro() {
            $.ajax({
                url: 'controllers/GetEstatisticaController.php',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#agora').text(response[0]);
                    $('#hoje').text(response[1]);
                    $('#semana').text(response[2]);
                    $('#mes').text(response[3]);
                    $('#ano').text(response[4]); 
                    $('#aplicativo_contador').text(response[5]); 

         
                },
                error: function(error) {
                    console.log("Erro na requisição AJAX: " + error);
                }
                
            });

        }

        setInterval(obterTotalCadastro, 3000);
    });

</script>