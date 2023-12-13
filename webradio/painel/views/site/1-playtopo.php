
<!-- TOPO PLAY - TEMA 01 -->
<div class="container-fluid border-bottom fixed-top <?=$corFundo?> bg-gradient text-white CorMudar">
    <div class="row row-cols-1 row-cols-md-2">            
        <div class="col-lg-4 col-4 d-j-a">
    <!-- PLAY STREAMING -->    
        <audio id="player" autoplay="autoplay"> 
            <source id="srcP" src="https://player.ipstm.net/ssl.php?ip=<?=$ip?>&port=<?=$porta?>&mount=/;" type="audio/mpeg">
            <span>Your browser dont support that element.</span>
        </audio>
            <div class="df">
                <i class="fa fa-play-circle iconPlaying fs-1"
                    data-bs-title="Rádio Desligada!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom"></i>
                <i style="display: none;" class="fa fa-pause-circle iconStoped fs-1"
                    data-bs-title="Rádio Ligada!"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </i>
                <span id="radio" style="font-size: 13px;" class="ms-2 mt-auto"></span>
                <img width="35px;" height="35px;" class="ms-2 radio" src="../../../public/img/baixarapp/tocar2.gif">
                <img width="35px;" height="35px;" class="radio" src="../../../public/img/baixarapp/tocar2.gif">
            </div> 
        </div>
        <div class="col-lg-2 col-3 d-j-a">
            <i class="fa-solid fa-users me-4 fs-5"
                    data-bs-title="Ouvintes Conectados"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom"></i> 
            <div class="fs-3"><?php echo $dadosXML->ouvintes_conectados; ?></div>
        </div>
    <!-- LETREIRO - MUSICA ATUAL -->
        <div class="col-lg-2 col-5 text-center">
            <span>Tocando Agora <i class="fa-solid fa-music"></i></span>
            <marquee class="status cc_streaminfo" data-type="song" data-username="hoostcom" style="color: #fff;opacity: 1;"><?php echo $dadosXML->musica_atual; ?></marquee>
        </div>
    <!-- REDES SOCIAIS / MUDAR COR -->
        <div class="col-lg-4 d-j-a">
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
    <?php if($facebook !== ''): ?>
            <a href="<?=$facebook?>" class="text-decoration-none" target="_blank">
                <div class="d-j-a m-2">
                    <i class="iconSociais fa-brands fa-facebook fs-3 text-white"
                        data-bs-title="Acessar Nossa Página Facebook"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </a>
    <?php endif; ?>
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
    <?php if($instagram !== ''): ?>
            <a href="<?=$instagram?>" class="text-decoration-none" target="_blank">
                <div class="d-j-a m-2">
                    <i class="iconSociais fa-brands fa-instagram fs-3 text-white"
                        data-bs-title="Acessar Nossa Página Instagram"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </a>
    <?php endif; ?>
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
    <?php if($whatsapp !== ''): ?>
            <a href="https://wa.me/+55<?=$whatsapp?>?text=Gostei+da+sua+webrádio!" class="text-decoration-none" target="_blank">
                <div class="d-j-a m-2">
                    <i class="iconSociais fa-brands fa-whatsapp fs-3 text-white"
                        data-bs-title="Me chame no Whatsapp"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </a>
    <?php endif; ?>
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
    <?php if($tiktok !== ''): ?>
            <a href="<?=$tiktok?>" class="text-decoration-none" target="_blank">
                <div class="d-j-a m-2">
                    <i class="iconSociais fa-brands fa-tiktok fs-3 text-white"
                        data-bs-title="Acessar Nossa Página tiktok"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                </div>
            </a>
    <?php endif; ?>
    <!-- SE TIVER VAZIO O LINK NO BANCO DE DADOS VAI SUMIR A REDE SOCIAL-->
    <?php if($telefone !== ''): ?>
            <a href="tel:<?=$telefone?>" class="text-decoration-none" target="_blank">
                <div class="d-j-a m-2">
                <i class="iconSociais fa-solid fa-phone-volume fs-3 text-white"
                    data-bs-title="Atedemos na Ligação"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </i>
                </div>
            </a>
    <?php endif; ?>
            <div class="d-j-a ms-4 iconSociais IconeSocial bg-primary-subtle rounded p-2"
                data-bs-toggle="modal" 
                data-bs-target="#modal_menu">
                <i class="fa-solid fa-bars fs-4 text-secondary"
                    data-bs-title="Menu"
                    data-bs-toggle="tooltip"
                    data-bs-placement="bottom">
                </i>
            </div>
            <a class="text-decoration-none" href="../../.." target="_blank">
                <div style="width: 100px;height:30px;" class="d-j-a ms-2 rounded bg-body-secondary text-secondary iconSociais">
                    <i class="fa-regular fa-eye fs-4"
                        data-bs-title="Ver site"
                        data-bs-toggle="tooltip"
                        data-bs-placement="bottom">
                    </i>
                    <span class="ms-2">ver site</span>
                </div>
            </a>
        </div>
    </div>
</div>

