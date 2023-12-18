
<!-- OFFCANVA MENU -->
    <div style="margin-top:70px;height:22%;" class="offcanvas offcanvas-top z-1" 
        data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" 
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-body">
<?php if ($temaAtivo === 'tema 1'): ?>
            <div class="df">
                <ul class="w-50">
                    <li class="scale" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><a class="text-decoration-none text-black" href="#container1">Versiculo</a></li>
                    <li class="scale" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><a class="text-decoration-none text-black" href="#container2">Fotos</a></li>                    
                </ul>
                <ul class="w-50">
                    <li class="scale" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><a class="text-decoration-none text-black" href="#container3">Doação</a></li>
                    <li class="scale" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><a class="text-decoration-none text-black" href="#container5">Contatos</a></li>
                </ul>
            </div>    
<?php endif; ?>
            <div class="w-100 dja p-2">
                <a href="../" target="_blank" class="text-decoration-none w-100 dja">
                    <button class="btn border shadow <?=$CorSite?> CorMudar w-50">ver site</button>
                </a>
            </div>        
        </div>
    </div>

<!-- MENU -->
    <div class="container-fluid fixed-top border-bottom <?=$CorSite?> CorMudar mobile">
    <!-- MENU MOBILE -->
        <div class="row">
            <div class="col-12 dja">
                <div style="width:45px;height:45px;" 
                class="rounded-circle shadow border dja fs-3"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <marquee class="status cc_streaminfo w-50" data-type="song" data-username="hoostcom"><?=$nome_radio?></marquee>
                <img width="75" height="75" class="rounded ms-auto" src="../public/img/logo/<?=$logo?>">
            </div>
        </div>
    </div>

    <!-- MENU DESKTOP -->
    <div class="container-fluid fixed-top border-bottom <?=$CorSite?> CorMudar desktop">
        <div class="row row-menu">
            <div class="col-lg-2 dja">
                <img width="100" height="100" class="rounded m-2" src="../public/img/logo/<?=$logo?>">
            </div>
            <div class="col-lg-3 p-2 fs-5">
                <marquee class="status cc_streaminfo" data-type="song" data-username="hoostcom"><?=$nome_radio?></marquee>
            </div>
            <div class="col-lg-5 df justify-content-end p-2">
<?php if ($temaAtivo === 'tema 1'): ?>
                <div class="m-2 fs-6 scale"><a class="text-decoration-none <?=$CorSite?> CorMudar" href="#container1">Versiculo</a></div>
                <div class="m-2 fs-6 scale"><a class="text-decoration-none <?=$CorSite?> CorMudar" href="#container2">Fotos</a></div>
                <div class="m-2 fs-6 scale"><a class="text-decoration-none <?=$CorSite?> CorMudar" href="#container3">Doação</a></div>
                <div class="m-2 fs-6 scale"><a class="text-decoration-none <?=$CorSite?> CorMudar" href="#container5">Contatos</a></div>
<?php endif; ?>
            </div>
            <div class="col-lg-2 p-2">
                <a href="../" target="_blank" class="text-decoration-none">
                    <div style="height:35px;" class="border rounded dja shadow <?=$CorSite?> CorMudar w-50 ms-5 scale">ver site</div>
                </a>
            </div>
        </div>
    </div>
