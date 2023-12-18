

<!-- OFFCANVA ALTERAR IMG DE FUNDO -->    
    <form id="salvar-imgFundo" enctype="multipart/form-data">
        <div style="right:10%;height:90%;width:80%;" class="offcanvas offcanvas-end m-auto" tabindex="-1" id="offcanvasFundo" aria-labelledby="offcanvasFundoLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Imagen de Fundo</h5>
                <button type="button" class="btn-close" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"></button>
            </div>
            <div class="offcanvas-body">  
                <div class="row row-cols-1 row-cols-md-1 dja">
                    <div style="height:45px;" class="col-lg-2 col-5 border rounded dja m-1 btn-site bg-primary text-white btn-fundo">
                        Site
                    </div>
                    <div style="height:45px;" class="col-lg-2 col-5 border rounded dja m-1 btn-app btn-fundo">
                        App
                    </div>
                </div>
                <div class="text-center">
                    <h5>Tamanho Recomendado</h5>
                    <p class="fundo_site">1200 x 800 pixel</p>
                    <p style="display: none;" class="fundo_app">400 x 800 pixel</p>
                </div>             
                <div class="row row-cols-1 row-cols-md-1 dja">
                    <div class="col-lg-8 fundo_site">
                        <label for="img1" style="height:250px;" class="border rounded dja">
                            <div style="position: absolute;" class="text-center">
                                <i class="fa-solid fa-plus fs-1"></i>
                                <h3>adicionar</h3>
                            </div>                            
                            <img class="preview-image w-100 h-100 z-3 rounded">
                            <input class="image-input" type="file" id="img1" hidden>
                        </label>
                    </div>    
                    <div style="display:none;" class="col-lg-2 col-7 fundo_app">
                        <label for="img2" style="height:275px;" class="border rounded dja">
                            <div style="position: absolute;" class="text-center">
                                <i class="fa-solid fa-plus fs-1"></i>
                                <h3>adicionar</h3>
                            </div>                            
                            <img class="preview-image w-100 z-3 h-100 rounded">
                            <input class="image-input" type="file" id="img2" hidden>
                        </label>                  
                    </div>                
                </div>
                <div class="dja mt-3">
                    <button type="submit" class="btn btn-primary w-50 p-2">salvar</button>
                </div>
            </div>
        </div>
    </form>

<!-- SCRIPT AJAX DE CADASTRO --> 
    <script>
        $(document).ready(function() {
            $('.btn-fundo').click(function(){
                $('.btn-fundo').removeClass('bg-primary text-white');
                $(this).addClass('bg-primary text-white');
            });
            $('.btn-site').click(() => {
                $('.fundo_site').show();
                $('.fundo_app').hide();
            });
            $('.btn-app').click(() => {
                $('.fundo_app').show();
                $('.fundo_site').hide();
            });
            $('#salvar-imgFundo').submit(function(e) {
                e.preventDefault();

                var formData = new FormData();

                var fileInput1 = $('#img1')[0].files[0];
                formData.append('img1', fileInput1);
                var fileInput2 = $('#img2')[0].files[0];
                formData.append('img2', fileInput2);
                
                $.ajax({
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    url: 'controllers/ImgFundoController.php',
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