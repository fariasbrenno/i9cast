
<!-- ATUALIZAR ENDEREÇO -->
<form action="controllers/EnderecoController.php" method="post">
    <div class="modal fade" id="atualizar_endereco" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Endereço</h2>
                                <p class="text-center">Endereço local da web rádio</p>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-12">                                
                                <div class="form-floating mt-1">
                                    <input type="text" name="cep" class="form-control" id="cep" placeholder="name@example.com" onkeyup="this.value = formatarCEP(this.value)" value="<?=$cep?>">
                                    <label for="cep">CEP:</label>
                                </div>
                            </div> 
                            <div class="col-12">                                
                                <div class="form-floating mt-1">
                                    <input type="text" name="rua" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$rua?>">
                                    <label for="floatingInput">Endereço:</label>
                                </div>
                            </div> 
                            <div class="col-12">                               
                                <div class="form-floating mt-1">
                                    <input type="text" name="complemento" class="form-control" id="floatingInput" placeholder="name@example.com"  value="<?=$complemento?>">
                                    <label for="floatingInput">Complemento:</label>
                                </div>
                            </div> 
                            <div class="col-12 df">                                
                                <div class="form-floating mt-1 w-75">
                                    <input type="text" name="bairro" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$bairro?>">
                                    <label for="floatingInput">Bairro:</label>
                               </div>
                                <div class="form-floating mt-1 w-25">
                                    <input type="text" name="numero" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$numerocasa?>">
                                    <label for="floatingInput">Nº:</label>
                                </div>
                            </div>
                            <div class="col-12 df">                                
                                <div class="form-floating mt-1 w-50">
                                    <input type="text" name="cidade" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?=$cidade?>">
                                    <label for="floatingInput">Cidade:</label>
                                </div>
                                <div class="form-floating mt-1 w-50">
                                    <select name="estado" class="form-select" aria-label="Default select example">
                                        <option selected><?=$estado?></option>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar_endereco">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

