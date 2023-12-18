
<!-- BTN EDITAR SITE -->
    <div class="container-fluid fixed-bottom z-3">
        <div class="row row-cols-1 row-cols-md-1 p-2  dja">
            <div class="col-lg-6 col-12 col-btn-site border bg-white dja">
                <div class="w-50 dja">                
                    <div style="width:45px;height:45px;" class="border shadow rounded-circle me-auto dja text-black btn-subir">
                        <i class="fa-solid fa-arrow-up-wide-short"></i>
                    </div>                
                    <button style="display: none;" class="border shadow m-auto <?=$CorSite?> CorMudar salvar_cor">salvar</button>                   
                </div>
                <div class="w-50 dja desktop">                    
                    <label for="corBranco" class="bg-branco coresTamanho scale"></label>
                    <input type="radio" name="cor" id="corBranco" value="bg-branco" hidden>
                    <label for="corRosa" class="bg-rosa coresTamanho scale"></label>
                    <input type="radio" name="cor" id="corRosa" value="bg-rosa" hidden>
                    <label for="corVermelho"class="bg-vermelho coresTamanho scale"></label>
                    <input type="radio" name="cor" id="corVermelho" value="bg-vermelho" hidden>
                    <label for="corAmarelo" class="bg-amarelo coresTamanho scale"></label>
                    <input type="radio" name="cor" id="corAmarelo" value="bg-amarelo" hidden>
                    <label for="corVerde" class="bg-verde coresTamanho scale"></label>
                    <input type="radio" name="cor" id="corVerde" value="bg-verde" hidden>
                    <label for="CorAzul" class="bg-azul coresTamanho scale"></label>
                    <input type="radio" name="cor" id="CorAzul" value="bg-azul" hidden>
                    <label for="CorPreto" class="bg-preto coresTamanho scale"></label>
                    <input type="radio" name="cor" id="CorPreto" value="bg-preto" hidden>
                    <label for="CorLilas" class="bg-lilas coresTamanho scale"></label>
                    <input type="radio" name="cor" id="CorLilas" value="bg-lilas" hidden>
                </div>  
                <div class="w-25 mobile">
                    <div class="border shadow border-warning w-100 h-50 rounded btn-cores text-black dja">cores</div>
                    <div style="position:absolute;width:50px;height:350px;bottom:68px;left:50%;display:none;border-top-left-radius:10px;border-top-right-radius:10px;" class="bg-white dja cores">
                        <div class="w-75">
                            <label for="corBranco" class="bg-branco coresTamanho"></label>
                            <input type="radio" name="cor" id="corBranco" value="bg-branco" hidden>
                            <label for="corRosa" class="bg-rosa coresTamanho"></label>
                            <input type="radio" name="cor" id="corRosa" value="bg-rosa" hidden>
                            <label for="corVermelho"class="bg-vermelho coresTamanho"></label>
                            <input type="radio" name="cor" id="corVermelho" value="bg-vermelho" hidden>
                            <label for="corAmarelo" class="bg-amarelo coresTamanho"></label>
                            <input type="radio" name="cor" id="corAmarelo" value="bg-amarelo" hidden>
                            <label for="corVerde" class="bg-verde coresTamanho"></label>
                            <input type="radio" name="cor" id="corVerde" value="bg-verde" hidden>
                            <label for="CorAzul" class="bg-azul coresTamanho"></label>
                            <input type="radio" name="cor" id="CorAzul" value="bg-azul" hidden>
                            <label for="CorPreto" class="bg-preto coresTamanho"></label>
                            <input type="radio" name="cor" id="CorPreto" value="bg-preto" hidden>
                            <label for="CorLilas" class="bg-lilas coresTamanho"></label>
                            <input type="radio" name="cor" id="CorLilas" value="bg-lilas" hidden>
                        </div>                       
                    </div>
                </div>              
                <div class="w-25 dja">
                    <button class="w-75 btn-editar <?=$CorSite?> CorMudar border shadow" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">menu</button>
                </div>
            </div>
        </div>
    </div>

