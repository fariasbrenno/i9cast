

<!-- ATUALIZAR PROGRAMAÇÃO -->
<form action="controllers/ProgramacaoController.php" method="post">
    <div class="modal fade" id="atualizar_programacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Atualizar Programação</h2>
                                <p class="text-center">Mude somente o necessário</p>
                            </div>
                        </div>  
                        <div class="row mb-2 rounded border border-primary p-2">
                            <h4 class="border-2 border-bottom border-primary p-1">Programação 01</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                    <div class="form-floating mt-1 w-50">
                                        <select name="dia_01" class="form-select" aria-label="Default select example">
                                            <option selected><?=$dia[1]['dia']?></option>
                                            <option value="Seg.">Segunda-feira</option>
                                            <option value="Ter.">Terça-feira</option>
                                            <option value="Qua.">Quarta-feira</option>
                                            <option value="Qui.">Quinta-feira</option>
                                            <option value="Sex.">Sexta-feira</option>
                                            <option value="Sab.">Sábado</option>
                                            <option value="Dom.">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mt-1 w-50">
                                        <input name="hora_01" type="time" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$hora[1]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>
                                <div class="form-floating mt-1">
                                    <input name="programa_01" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$programa[1]['programa']?>">
                                    <label for="floatingInput">Programa:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <input name="apresentador_01" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$apresentador[1]['apresentador']?>">
                                    <label for="floatingInput">Apresentador:</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row mb-2 rounded border border-primary p-2">
                            <h4 class="border-2 border-bottom border-primary p-1">Programação 02</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                    <div class="form-floating mt-1 w-50">
                                        <select name="dia_02" class="form-select" aria-label="Default select example">
                                            <option selected><?=$dia[2]['dia']?></option>
                                            <option value="Seg.">Segunda-feira</option>
                                            <option value="Ter.">Terça-feira</option>
                                            <option value="Qua.">Quarta-feira</option>
                                            <option value="Qui.">Quinta-feira</option>
                                            <option value="Sex.">Sexta-feira</option>
                                            <option value="Sab.">Sábado</option>
                                            <option value="Dom.">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mt-1 w-50">
                                        <input type="time" name="hora_02" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$hora[2]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="programa_02" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$programa[2]['programa']?>">
                                    <label for="floatingInput">Programa:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="apresentador_02" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$apresentador[2]['apresentador']?>">
                                    <label for="floatingInput">Apresentador:</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row mb-2 rounded border border-primary p-2">
                            <h4 class="border-2 border-bottom border-primary p-1">Programação 03</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                    <div class="form-floating mt-1 w-50">
                                        <select name="dia_03" class="form-select" aria-label="Default select example">
                                            <option selected><?=$dia[3]['dia']?></option>
                                            <option value="Seg.">Segunda-feira</option>
                                            <option value="Ter.">Terça-feira</option>
                                            <option value="Qua.">Quarta-feira</option>
                                            <option value="Qui.">Quinta-feira</option>
                                            <option value="Sex.">Sexta-feira</option>
                                            <option value="Sab.">Sábado</option>
                                            <option value="Dom.">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mt-1 w-50">
                                        <input type="time" name="hora_03" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$hora[3]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="programa_03" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$programa[3]['programa']?>">
                                    <label for="floatingInput">Programa:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="apresentador_03" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$apresentador[3]['apresentador']?>">
                                    <label for="floatingInput">Apresentador:</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row mb-2 rounded border border-primary p-2">
                            <h4 class="border-2 border-bottom border-primary p-1">Programação 04</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                    <div class="form-floating mt-1 w-50">
                                        <select name="dia_04" class="form-select" aria-label="Default select example">
                                            <option selected><?=$dia[4]['dia']?></option>
                                            <option value="Seg.">Segunda-feira</option>
                                            <option value="Ter.">Terça-feira</option>
                                            <option value="Qua.">Quarta-feira</option>
                                            <option value="Qui.">Quinta-feira</option>
                                            <option value="Sex.">Sexta-feira</option>
                                            <option value="Sab.">Sábado</option>
                                            <option value="Dom.">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mt-1 w-50">
                                        <input type="time" name="hora_04" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$hora[4]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="programa_04" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$programa[4]['programa']?>">
                                    <label for="floatingInput">Programa:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="apresentador_04" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$apresentador[4]['apresentador']?>">
                                    <label for="floatingInput">Apresentador:</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row mb-2 rounded border border-primary p-2">
                            <h4 class="border-2 border-bottom border-primary p-1">Programação 05</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                   <div class="form-floating mt-1 w-50">
                                        <select name="dia_05" class="form-select" aria-label="Default select example">
                                            <option selected><?=$dia[5]['dia']?></option>
                                            <option value="Seg.">Segunda-feira</option>
                                            <option value="Ter.">Terça-feira</option>
                                            <option value="Qua.">Quarta-feira</option>
                                            <option value="Qui.">Quinta-feira</option>
                                            <option value="Sex.">Sexta-feira</option>
                                            <option value="Sab.">Sábado</option>
                                            <option value="Dom.">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mt-1 w-50">
                                        <input type="time" name="hora_05" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$hora[5]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="programa_05" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$programa[5]['programa']?>">
                                    <label for="floatingInput">Programa:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="apresentador_05" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$apresentador[5]['apresentador']?>">
                                    <label for="floatingInput">Apresentador:</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row mb-2 rounded border border-primary p-2">
                            <h4 class="border-2 border-bottom border-primary p-1">Programação 06</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                    <div class="form-floating mt-1 w-50">
                                        <select name="dia_06" class="form-select" aria-label="Default select example">
                                            <option selected><?=$dia[6]['dia']?></option>
                                            <option value="Seg.">Segunda-feira</option>
                                            <option value="Ter.">Terça-feira</option>
                                            <option value="Qua.">Quarta-feira</option>
                                            <option value="Qui.">Quinta-feira</option>
                                            <option value="Sex.">Sexta-feira</option>
                                            <option value="Sab.">Sábado</option>
                                            <option value="Dom.">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mt-1 w-50">
                                        <input type="time" name="hora_06" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$hora[6]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="programa_06" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$programa[6]['programa']?>">
                                    <label for="floatingInput">Programa:</label>
                                </div>
                                <div class="form-floating mt-1">
                                   <input type="text" name="apresentador_06" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$apresentador[6]['apresentador']?>">
                                    <label for="floatingInput">Apresentador:</label>
                               </div>
                            </div> 
                        </div>
                        <div class="row mb-2 rounded border border-primary p-2">
                            <h4 class="border-2 border-bottom border-primary p-1">Programação 07</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                    <div class="form-floating mt-1 w-50">
                                        <select name="dia_07" class="form-select" aria-label="Default select example">
                                            <option selected><?=$dia[7]['dia']?></option>
                                            <option value="Seg.">Segunda-feira</option>
                                            <option value="Ter.">Terça-feira</option>
                                            <option value="Qua.">Quarta-feira</option>
                                            <option value="Qui.">Quinta-feira</option>
                                            <option value="Sex.">Sexta-feira</option>
                                            <option value="Sab.">Sábado</option>
                                            <option value="Dom.">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mt-1 w-50">
                                        <input type="time" name="hora_07" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$hora[7]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="programa_07" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$programa[7]['programa']?>">
                                    <label for="floatingInput">Programa:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="apresentador_07" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$apresentador[7]['apresentador']?>">
                                    <label for="floatingInput">Apresentador:</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row mb-2 rounded border border-primary p-2">
                            <h4 class="border-2 border-bottom border-primary p-1">Programação 08</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                    <div class="form-floating mt-1 w-50">
                                        <select name="dia_08" class="form-select" aria-label="Default select example">
                                            <option selected><?=$dia[8]['dia']?></option>
                                            <option value="Seg.">Segunda-feira</option>
                                            <option value="Ter.">Terça-feira</option>
                                            <option value="Qua.">Quarta-feira</option>
                                            <option value="Qui.">Quinta-feira</option>
                                            <option value="Sex.">Sexta-feira</option>
                                            <option value="Sab.">Sábado</option>
                                            <option value="Dom.">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mt-1 w-50">
                                        <input type="time" name="hora_08" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$hora[8]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="programa_08" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$programa[8]['programa']?>">
                                    <label for="floatingInput">Programa:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="apresentador_08" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$apresentador[8]['apresentador']?>">
                                    <label for="floatingInput">Apresentador:</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row mb-2 rounded border border-primary p-2">
                            <h4 class="border-2 border-bottom border-primary p-1">Programação 09</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                    <div class="form-floating mt-1 w-50">
                                        <select name="dia_09" class="form-select" aria-label="Default select example">
                                            <option selected><?=$dia[9]['dia']?></option>
                                            <option value="Seg.">Segunda-feira</option>
                                            <option value="Ter.">Terça-feira</option>
                                            <option value="Qua.">Quarta-feira</option>
                                            <option value="Qui.">Quinta-feira</option>
                                            <option value="Sex.">Sexta-feira</option>
                                            <option value="Sab.">Sábado</option>
                                            <option value="Dom.">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mt-1 w-50">
                                        <input type="time" name="hora_09" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$hora[9]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="programa_09" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$programa[9]['programa']?>">
                                    <label for="floatingInput">Programa:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="apresentador_09" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$apresentador[9]['apresentador']?>">
                                    <label for="floatingInput">Apresentador:</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row mb-2 rounded border border-primary p-2">
                            <h4 class="border-2 border-bottom border-primary p-1">Programação 10</h4>
                            <div class="col-12">
                                <div class="w-100 df">
                                    <div class="form-floating mt-1 w-50">
                                        <select name="dia_10" class="form-select" aria-label="Default select example">
                                            <option selected><?=$dia[10]['dia']?></option>
                                            <option value="Seg.">Segunda-feira</option>
                                            <option value="Ter.">Terça-feira</option>
                                            <option value="Qua.">Quarta-feira</option>
                                            <option value="Qui.">Quinta-feira</option>
                                            <option value="Sex.">Sexta-feira</option>
                                            <option value="Sab.">Sábado</option>
                                            <option value="Dom.">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mt-1 w-50">
                                        <input type="time" name="hora_10" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$hora[10]['hora']?>">
                                        <label for="floatingInput">Hora:</label>
                                    </div>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="programa_10" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$programa[10]['programa']?>">
                                    <label for="floatingInput">Programa:</label>
                                </div>
                                <div class="form-floating mt-1">
                                    <input type="text" name="apresentador_10" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$apresentador[10]['apresentador']?>">
                                    <label for="floatingInput">Apresentador:</label>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar_programacao">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>