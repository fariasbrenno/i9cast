

<!-- ATUALIZAR VIDEOS -->
<form action="controllers/SocialController.php" method="post">
    <div class="modal fade" id="atualizar_videos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">

                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Atualizar Link Youtube</h2>
                                <p class="text-center">coloque o link do video do youtube</p>
                            </div>
                        </div>    

                        <div class="row mt-2">
                            <div class="col-12">                                
                                <div class="form-floating mt-1">
                                    <input type="url" class="form-control" id="floatingInput" placeholder="name@example.com" name="youtube" value="<?=$youtube_link?>">
                                    <label for="floatingInput">Link Youtube:</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar_youtube">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>