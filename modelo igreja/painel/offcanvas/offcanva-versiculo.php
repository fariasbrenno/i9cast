

<!-- OFFCANVA VERSICULO -->    
    <form id="salvar-versiculo10">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasVersiculo" aria-labelledby="offcanvasVersiculoLabel">
            <div class="offcanvas-header">
                <div class="d-flex flex-column align-items-center w-100">
                    <div class="btn-group mb-5">
                      <div id="btn_versiculo_automatico" class="btn btn-success">Automático</div>
                      <div id="btn_versiculo_manual" class="btn btn-secondary">Manual</div>
                      <input type="hidden" id="versiculo_sql_automatico" value="sim">
                    </div>
                
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Qual versiculo de hoje?</h5>
                </div>

                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <div id="exibir_cadastrar_versiculo">
                <label for="versiculo mb-1">Descreva o versículo a baixo:</label>
                <div class="form-floating mb-3">
                    <textarea style="height:250px;" class="form-control" id="versiculo"><?=$versiculo?></textarea>
                    <div class="input-text">
                        Exemplo: Porque Deus amou o mundo de tal [etc...]
                    </div> 
                </div>
                <label for="capitulo mb-1">Referência bíblica:</label>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="capitulo" value="<?=$capitulo?>">   
                    <div class="input-text">
                        Exemplo: João 3:16
                    </div>            
                </div>
            </div>
            <div class="offcanvas-body" id="exibir_versiculo_automatico">
                <div class="p-3">
                <p id="auto_versiculo_form"></p>
                <h5 id="auto_referencia_form" class="text-end"></h5>
                </div>
            </div>
                <div class="dja">
                    <button type="submit" class="btn btn-primary btn-salvar p-2">salvar</button>
                </div>
            </div>
            
        </div>
    </form>
<style>
    .custom-input {
  position: relative;
}

.input-text {
  position: absolute;
  top: 10px;
  left: 10px; /* Ajuste conforme necessário */
  transform: translateY(-50%);
  pointer-events: none; /* Permite clicar através do texto para acessar o input */
  color: #bbbbbb; /* Cor do texto */
  font-size: 14px; /* Tamanho da fonte */
}

</style>

<!-- SCRIPT AJAX DE CADASTRO --> 
    <script>

$(document).ready(function() {

function versiculo_manual(){
      $('#versiculo_automatico').addClass('hidden');
      $('#versiculo_manual').removeClass('hidden');
      $('#btn_versiculo_manual').removeClass('btn-secondary').addClass('btn-success');
      $('#btn_versiculo_automatico').removeClass('btn-success').addClass('btn-secondary');
      $('#versiculo_sql_automatico').val('nao')
      $('#exibir_cadastrar_versiculo').css('display','block')
      $('#exibir_versiculo_automatico').css('display','none')
}

function versiculo_automatico(){
    $('#versiculo_manual').addClass('hidden');
      $('#versiculo_automatico').removeClass('hidden');
      $('#btn_versiculo_automatico').removeClass('btn-secondary').addClass('btn-success');
      $('#btn_versiculo_manual').removeClass('btn-success').addClass('btn-secondary');
      $('#versiculo_sql_automatico').val('sim')
      $('#exibir_cadastrar_versiculo').css('display','none')
      $('#exibir_versiculo_automatico').css('display','block')

}

$('.acao_editar_versiculo').click(function () {
    foreach_versiculo = $(".foreach_versiculo").val()
    if (foreach_versiculo=="manual"){
        versiculo_manual()
    } else if (foreach_versiculo=="automatico"){
        versiculo_automatico()
    }
})

    $('#btn_versiculo_manual').click(function () {
      versiculo_manual()
    });

    $('#btn_versiculo_automatico').click(function () {
      versiculo_automatico()
    });


        
            $('#salvar-versiculo10').submit(function(e) {
                e.preventDefault();
                
                var versiculo = $('#versiculo').val();
                var capitulo = $('#capitulo').val();
                var automatico = $('#versiculo_sql_automatico').val();

                var dados = {
                    versiculo: versiculo,
                    capitulo: capitulo,
                    automatico: automatico
                }
                $.ajax({
                    method: 'POST',
                    data: dados,
                    url: 'controllers/VersiculoController.php',
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


</script>