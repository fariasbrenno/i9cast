

<!-- PROGRAMAÇÃO -->
<div  id="section3" class="container">       
    <div class="row d-j-a">
        <div style="height:max-content;" class="col-lg-7 mt-5">              
            <div style="height:50px;" class="w-100 d-j-a">
                <h2>Nossa Programação</h2> 
                <div style="width:100px;height:30px;" 
                    class="rounded border text-center text-primary d-j-a bg-primary-subtle ms-auto PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#atualizar_programacao">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-5"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </div>          
            <table class="table table-striped shadow-lg border">
                <thead>
                    <tr class="table-primary text-center">
                        <th scope="col">Dia/Hora</th>
                        <th scope="col">Programa</th>
                        <th scope="col">Apresentador</th>
                    </tr>                           
                </thead>
                <tbody>
    <?php
    $programacao = $conexao->query('select * from programacao');
    foreach($programacao as $row):  
    ?>
                    <tr class="text-center">
                        <td><?=$row['dia']?> às <?=$row['hora']?></td>
                        <td><?=$row['programa']?></td>
                        <td><?=$row['apresentador']?></td>
                    </tr>
    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div style="height: 450px;" class="col-lg-3 mt-5">               
            <div style="height:50px;" class="w-100 d-j-a">
                <p>Publicidade</p> 
                <div style="width:100px;height:30px;" 
                    class="rounded border text-center text-primary d-j-a bg-primary-subtle ms-auto PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#publicidade_06">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-5"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </div> 
            <a href="<?=$link[10]['link']?>" target="_blank">
                <div style="height:100px;" class="rw-100 mt-1 fotoHover">
                    <img class="rounded border w-100 h-100" src="../../../public/img/publicidade/<?=$imagem[10]['imagem']?>" onerror="substituirImagemErro2(this)">
                </div>
            </a>
            <a href="<?=$link[11]['link']?>" target="_blank">
                <div style="height:100px;" class="w-100 mt-1 fotoHover">
                    <img class="rounded border w-100 h-100" src="../../../public/img/publicidade/<?=$imagem[11]['imagem']?>" onerror="substituirImagemErro3(this)">
                </div>
            </a>
            <a href="<?=$link[12]['link']?>" target="_blank">
                <div style="height:100px;" class="w-100 mt-1 fotoHover">
                    <img class="rounded border w-100 h-100" src="../../../public/img/publicidade/<?=$imagem[12]['imagem']?>" onerror="substituirImagemErro4(this)">
                </div>  
            </a>                      
        </div>
    </div>
</div>



