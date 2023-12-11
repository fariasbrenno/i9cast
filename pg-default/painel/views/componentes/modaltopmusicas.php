

<!-- ATUALIZAR TOP MUSICAS -->
<form action="controllers/MusicaController.php" method="post">
    <div class="modal fade" id="atualizar_musicas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Atualizar Musicas</h2>
                                <p class="text-center">Mude somente o necessário</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                            <h6 class="text-center p-1">Música Top-01</h6>
                                <div class="form-floating mt-1">
                                    <input type="text" name="top_01" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$musicas[1]['nome']?>">
                                    <label for="floatingInput">Digite Aqui Nome da Música:</label>
                                </div>                              
                                <div class="input-group mt-1">
                                    <span class="input-group-text">Link:</span>
                                    <input type="url" name="link_01" class="form-control" value="<?=$musicas[1]['link']?>">
                                </div>
                            </div>
                            <div class="col-12">
                            <h6 class="text-center p-1">Música Top-02</h6>
                                <div class="form-floating mt-1">
                                    <input type="text" name="top_02" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$musicas[2]['nome']?>">
                                    <label for="floatingInput">Digite Aqui Nome da Música:</label>
                                </div>                             
                                <div class="input-group mt-1">
                                    <span class="input-group-text">Link:</span>
                                    <input type="url" name="link_02" class="form-control" value="<?=$musicas[2]['link']?>">
                                </div>
                            </div>
                            <div class="col-12">
                            <h6 class="text-center p-1">Música Top-03</h6>
                                <div class="form-floating mt-1">
                                    <input type="text" name="top_03" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$musicas[3]['nome']?>">
                                    <label for="floatingInput">Digite Aqui Nome da Música:</label>
                                </div>                              
                                <div class="input-group mt-1">
                                    <span class="input-group-text">Link:</span>
                                    <input type="url" name="link_03" class="form-control" value="<?=$musicas[3]['link']?>">
                                </div>
                            </div>
                            <div class="col-12">
                            <h6 class="text-center p-1">Música Top-04</h6>
                                <div class="form-floating mt-1">
                                    <input type="text" name="top_04" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$musicas[4]['nome']?>">
                                    <label for="floatingInput">Digite Aqui Nome da Música:</label>
                                </div>                              
                                <div class="input-group mt-1">
                                    <span class="input-group-text">Link:</span>
                                    <input type="url" name="link_04" class="form-control" value="<?=$musicas[4]['link']?>">
                               </div>
                            </div>
                            <div class="col-12">
                            <h6 class="text-center p-1">Música Top-05</h6>
                                <div class="form-floating mt-1">
                                    <input type="text" name="top_05" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$musicas[5]['nome']?>">
                                    <label for="floatingInput">Digite Aqui Nome da Música:</label>
                                </div>                              
                                <div class="input-group mt-1">
                                   <span class="input-group-text">Link:</span>
                                    <input type="url" name="link_05" class="form-control" value="<?=$musicas[5]['link']?>">
                                </div>
                            </div>
                            <div class="col-12">
                            <h6 class="text-center p-1">Música Top-06</h6>
                                <div class="form-floating mt-1">
                                    <input type="text" name="top_06" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$musicas[6]['nome']?>">
                                    <label for="floatingInput">Digite Aqui Nome da Música:</label>
                                </div>                              
                                <div class="input-group mt-1">
                                   <span class="input-group-text">Link:</span>
                                    <input type="url" name="link_06" class="form-control" value="<?=$musicas[6]['link']?>">
                                </div>
                            </div>
                            <div class="col-12">
                            <h6 class="text-center p-1">Música Top-07</h6>
                                <div class="form-floating mt-1">
                                    <input type="text" name="top_07" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$musicas[7]['nome']?>">
                                    <label for="floatingInput">Digite Aqui Nome da Música:</label>
                                </div>                             
                                <div class="input-group mt-1">
                                    <span class="input-group-text">Link:</span>
                                    <input type="url" name="link_07" class="form-control" value="<?=$musicas[7]['link']?>">
                                </div>
                            </div>
                            <div class="col-12">
                            <h6 class="text-center p-1">Música Top-08</h6>
                                <div class="form-floating mt-1">
                                    <input type="text" name="top_08" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$musicas[8]['nome']?>">
                                    <label for="floatingInput">Digite Aqui Nome da Música:</label>
                                </div>                              
                                <div class="input-group mt-1">
                                    <span class="input-group-text">Link:</span>
                                    <input type="url" name="link_08" class="form-control" value="<?=$musicas[8]['link']?>">
                                </div>
                            </div>
                            <div class="col-12">
                            <h6 class="text-center p-1">Música Top-09</h6>
                                <div class="form-floating mt-1">
                                    <input type="text" name="top_09" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$musicas[9]['nome']?>">
                                    <label for="floatingInput">Digite Aqui Nome da Música::</label>
                                </div>                              
                               <div class="input-group mt-1">
                                    <span class="input-group-text">Link:</span>
                                    <input type="url" name="link_09" class="form-control" value="<?=$musicas[9]['link']?>">
                                </div>
                            </div>
                            <div class="col-12">
                            <h6 class="text-center p-1">Música Top-10</h6>
                                <div class="form-floating mt-1">
                                    <input type="text" name="top_10" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$musicas[10]['nome']?>">
                                   <label for="floatingInput">Digite Aqui Nome da Música:</label>
                                </div>                              
                                <div class="input-group mt-1">
                                    <span class="input-group-text">Link:</span>
                                    <input type="url" name="link_10" class="form-control" value="<?=$musicas[10]['link']?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar_musica">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>