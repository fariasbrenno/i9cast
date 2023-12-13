
<!-- NOTICIAS / TOP MUSICAS -->
<div id="section1" class="container mt-50">
    <div class="row row-cols-1 row-cols-md-2  d-j-a">
        <div style="height:max-content;" class="col-lg-7 mt-5">           
            <div style="height: 50px;" class="w-100 d-j-a">
                <div>
                    <h2>Top 10 Músicas</h2>
                    <p>a semana ta bombando</p>
                </div>                
                <div style="width:100px;height:30px;" 
                    class="rounded border text-center text-primary d-j-a bg-primary-subtle ms-auto PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#atualizar_musicas">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-5"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </div>
            <table class="table">
                    <thead>
    <?php
    $dado = $conexao->query('select * from top_10_musicas');
    foreach($dado as $row):
    ?>
                        <tr class="border">
                            <th scope="col"><i class="fa-solid fa-music"></th>
                            <th scope="col"><?=$row['nome']?></th>
                            <th scope="col">
                                <a href="<?=$row['link']?>" target="_blank" class="text-decoration-none">
                                    <div style="width:25px;height:25px;" class="rounded <?=$corFundo?> CorMudar menuHover d-j-a">
                                        <i class="fa-solid fa-play text-white"></i>
                                    </div>
                                </a>
                            </th>
                        </tr>
    <?php endforeach; ?>
                    </thead>
                </table>
        </div>
        <div  id="section0" class="col-lg-3 col-10 mt-5"> 
                <div style="width:100px;height:30px;" 
                    class="rounded border text-primary d-j-a bg-primary-subtle ms-auto mb-1 PointerEvent menuHover"
                    data-bs-toggle="modal" 
                    data-bs-target="#alterar_banner">
                    <span class="me-2">Editar</span>
                    <i class="fa-solid fa-pen-to-square fs-5"
                        data-bs-title="Clique Para Editar!"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>              
                <a href="<?=$link_banner?>" target="_blank" class="w-100 d-j-a">          
                    <div style="height:450px;" class="w-75 shadow-lg rounded fotoHover">
                        <img class="w-100 h-100 rounded" src="../../public/img/banner/<?=$banner?>" onerror="substituirBanner(this)">
                    </div>
                </a>
            </div>
    </div>        
</div>

