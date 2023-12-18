

<!-- ATUALIZAR AGENDA -->
<form action="controllers/AgendaController.php" method="post">
    <div class="modal fade" id="atualizar_agenda" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Atualizar Agenda</h2>
                                <p class="text-center">Mude somente o necessário</p>
                            </div>
                        </div>  
                        <div class="row mb-2 border border-primary p-2 rounded">
                            <h4 class="border-2 border-bottom border-primary p-1">Agenda 01</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                    <div class="form-floating w-50 mt-1">
                                        <input type="date" name="data1" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$dataAge[1]['data']?>">
                                        <label for="floatingInput">Data:</label>
                                    </div>
                                    <div class="form-floating w-50 mt-1">
                                        <input type="time" name="hora1" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$horaAg[1]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>                                
                                <div class="form-floating mt-1">
                                    <input type="text" name="local1" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$local[1]['local']?>">
                                    <label for="floatingInput">Local:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <textarea style="height:120px;" name="descricao1" class="form-control" id="floatingInput" placeholder="name@example.com" maxlength="100"><?=$descricao[1]['descricao']?></textarea>
                                    <label for="floatingInput">Texto max. 100 caracteres:</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row mb-2 border border-primary p-2 rounded">
                            <h4 class="border-2 border-bottom border-primary p-1">Agenda 02</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                   <div class="form-floating w-50 mt-1">
                                        <input type="date" name="data2" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$dataAge[2]['data']?>">
                                        <label for="floatingInput">Data:</label>
                                    </div>
                                    <div class="form-floating w-50 mt-1">
                                        <input type="time" name="hora2" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$horaAg[2]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>                                
                                <div class="form-floating mt-1">
                                    <input type="text" name="local2" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$local[2]['local']?>">
                                    <label for="floatingInput">Local:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <textarea style="height:120px;" name="descricao2" class="form-control" id="floatingInput" placeholder="name@example.com" maxlength="100"><?=$descricao[2]['descricao']?></textarea>
                                    <label for="floatingInput">Texto max. 100 caracteres:</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row mb-2 border border-primary p-2 rounded">
                            <h4 class="border-2 border-bottom border-primary p-1">Agenda 03</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                    <div class="form-floating w-50 mt-1">
                                        <input type="date" name="data3" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$dataAge[3]['data']?>">
                                        <label for="floatingInput">Data:</label>
                                    </div>
                                    <div class="form-floating w-50 mt-1">
                                        <input type="time" name="hora3" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$horaAg[3]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>                               
                                <div class="form-floating mt-1">
                                    <input type="text" name="local3" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$local[3]['local']?>">
                                    <label for="floatingInput">Local:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <textarea style="height:120px;" name="descricao3" class="form-control" id="floatingInput" placeholder="name@example.com" maxlength="100"><?=$descricao[3]['descricao']?></textarea>
                                    <label for="floatingInput">Texto max. 100 caracteres:</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row mb-2 border border-primary p-2 rounded">
                            <h4 class="border-2 border-bottom border-primary p-1">Agenda 04</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                    <div class="form-floating w-50 mt-1">
                                        <input type="date" name="data4" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$dataAge[4]['data']?>">
                                        <label for="floatingInput">Data:</label>
                                    </div>
                                    <div class="form-floating w-50 mt-1">
                                        <input type="time" name="hora4" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$horaAg[4]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>                                
                                <div class="form-floating mt-1">
                                    <input type="text" name="local4" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$local[4]['local']?>">
                                    <label for="floatingInput">Local:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <textarea style="height:120px;" name="descricao4" class="form-control" id="floatingInput" placeholder="name@example.com" maxlength="100"><?=$descricao[4]['descricao']?></textarea>
                                    <label for="floatingInput">Texto max. 100 caracteres:</label>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar_agenda">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>