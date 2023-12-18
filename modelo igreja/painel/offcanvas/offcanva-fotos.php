

<!-- OFFCANVA FOTOS -->    
    <form id="salvar-fotos" enctype="multipart/form-data">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasFotos" aria-labelledby="offcanvasFotosLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Minhas fotos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">                
                <div style="overflow: hidden;" class="row fim-tela">
                    <div style="width: max-content;" class="col-lg-12 df mural">
<?php 
$fotos = $conexao->query('select * from fotos');
foreach($fotos as $row) :
    $id = $row['id'];
?>
                        <div style="height:150px;" class="m-1">
                            <div style="height:28px;width:90%;" class="bg-danger rounded dja text-white m-1 excluir-btn" data-id="<?=$id?>">excluir</div>
                            <img width="100" class="h-75 border rounded" src="../public/img/fotos/<?=$row['foto']?>">                        
                        </div>
<?php endforeach; ?>
                    </div>
                </div>
                <div class="dja">
                    <div style="height:40px;width:40px;" class="rounded-circle border shadow m-1 fs-5 direita dja"><i class="fa-solid fa-arrow-left-long"></i></div>
                    <div style="height:40px;width:40px;" class="rounded-circle border shadow m-1 fs-5 esqueda dja"><i class="fa-solid fa-arrow-right-long"></i></div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-6">
                        <label for="foto" style="height:250px;" class="border rounded dja">
                            <div style="position: absolute;" class="text-center">
                                <i class="fa-solid fa-plus fs-1"></i>
                                <h3>adicionar</h3>
                            </div>                            
                            <img class="preview-image w-100 h-100 z-3 rounded">
                            <input class="image-input" type="file" id="foto" hidden>
                        </label>                        
                    </div>
                    <div class="col-lg-6 dja mt-3">
                        <button type="submit" class="btn btn-primary btn-salvar p-2">salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

<script>
    $(document).ready(function() {
        $(".excluir-btn").click(function() {
            var excluir = $(this).data('id');

            $.ajax({
                method: 'POST',
                data: {idExcluir: excluir},
                url: 'controllers/FotosController.php',
                success: function(response) {
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    console.error('Erro na requisição AJAX:', error);
                    alert('Erro na requisição AJAX. Por favor, tente novamente mais tarde.');
                }
            });
        });

        let currentMargin = 0;
        const step = 250;
        const containerWidth = $('.fim-tela').width();
        const totalWidth = $('.mural')[0].scrollWidth - containerWidth;

        $('.esqueda').click(() => {
            if (currentMargin > -totalWidth) {
                currentMargin = Math.max(currentMargin - step, -totalWidth);
                $('.mural').animate({
                    marginLeft: currentMargin
                }, 500);
            }
        });
        $('.direita').click(() => {
            if (currentMargin < 0) {
                currentMargin = Math.min(currentMargin + step, 0);
                $('.mural').animate({
                    marginLeft: currentMargin
                }, 500);
            }
        });
    });
    </script>

<!-- SCRIPT AJAX DE CADASTRO --> 
    <script>
        $(document).ready(function() {
            $('#salvar-fotos').submit(function(e) {
                e.preventDefault();

                var formData = new FormData();
                var fileInput = $('#foto')[0].files[0];
                formData.append('foto', fileInput);

                    $.ajax({
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        url: 'controllers/FotosController.php',
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