
    <div class="container-fluid vh-100 img-fundo">    
<!-- LOGO --> 
        <div class="row df">
            <div class="col-4 mt-2 btn-img">
                <img style="height:75px;width:75px;border-radius:15px;box-shadow:0 0 8px white;" class="img" src="../public/img/logo/<?=$logo?>">
            </div>
            <div class="col-8 mt-5">
                <h4><?=$nome_radio?></h4>
            </div>
        </div>

        <div id="sumir-baixar-app" style="display: none;" class="w-100 dja mt-3">
            <div id="install-button" style="display:none;">
                <div style="height:50px;border-radius:50px;" class="instalar-App shadow text-center <?=$CorSite?> CorMudar dja m-auto fs-2 scale btn-baixar-app w-75">Baixar app</div>   
            </div>
        </div> 
<!-- LETREIRO --> 
        <div style="position:absolute;bottom:200px;" class="d-j-a fs-4 w-75">
            <marquee class="status cc_streaminfo letreiro-ajax" data-type="song" data-username="hoostcom" id="marqueeElement"></marquee>
        </div>
<!-- REDES SOCIAIS --> 
        <div style="bottom:125px;" class="row d-j-a fs-2 fixed-bottom">
            <div class="col-2">
                <a href="<?=$facebook?>" class="text-decoration-none text-black" target="_blank">
                    <span style="height:50px;width:50px;" class="rounded-circle bg-warning shadow d-j-a">
                        <i class="fa-brands fa-facebook"></i>
                    </span>
                </a>
            </div>
            <div class="col-2">
                <a href="https://wa.me/+55<?=$whatsapp?>" class="text-decoration-none text-black" target="_blank">
                    <span style="height:50px;width:50px;" class="rounded-circle bg-warning shadow d-j-a">
                        <i class="fa-brands fa-whatsapp"></i>
                    </span> 
                </a>               
            </div>
            <div class="col-2">
                <a href="<?=$instagram?>" class="text-decoration-none text-black" target="_blank">
                    <span style="height:50px;width:50px;" class="rounded-circle bg-warning shadow d-j-a">
                        <i class="fa-brands fa-instagram"></i>
                    </span>    
                </a>             
            </div>
            <div class="col-2">
                <a href="<?=$tiktok?>" class="text-decoration-none text-black" target="_blank">
                    <span style="height:50px;width:50px;" class="rounded-circle bg-warning shadow d-j-a">
                        <i class="fa-brands fa-tiktok"></i> 
                    </span>   
                </a>            
            </div>
            <div class="col-2">
                <a href="../../" class="text-decoration-none text-black" target="_blank">
                    <span style="height:50px;width:50px;" class="rounded-circle bg-warning shadow d-j-a">
                        <i class="fa-solid fa-globe"></i>
                    </span>      
                </a>          
            </div>
        </div>
<!-- PLAY --> 
        <div style="height:125px;" class="row d-j-a fixed-bottom">
            <div class="col-3 d-j-a">
                <span style="height:45px;width:45px;" class="rounded-circle shadow bg-warning d-j-a">
                    <i class="fa-solid fa-volume-high btn-volume text-black"></i>     
                </span>           
            </div>
            <div class="col-4 d-j-a">
                <span style="height:95px;width:95px;font-size:35px;" class="rounded-circle shadow bg-black text-warning d-j-a">
                    <i class="fa-solid fa-play play"></i>
                    <i style="display: none;" class="fa-solid fa-pause pause"></i>
                </span>
                <audio id="player"> 
                    <source id="srcP" type="audio/mpeg">
                    <span>Your browser dont support that element.</span>
                </audio>
            </div>
            <div class="col-3 d-j-a">
                <a href="https://wa.me/+55<?=$whatsapp?>?text=Ou%C3%A7a%20esta%20web%20r%C3%A1dio%20https://<?=urlencode($site)?>" class="text-decoration-none text-black" target="_blank">
                    <span style="height:45px;width:45px;" class="rounded-circle shadow bg-warning d-j-a">
                        <i class="fa-regular fa-share-from-square text-black"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
        var duracao = 8000;

        $('.btn-img').click(() => {
            $('.img').animate(
                {
                    width: '350px',
                    height: '375px',
                }
            );
        });
        function btnSocial() {
            $('.img').animate(
                {
                    width: '75px',
                    height: '75px',
                }
            );
        };
        setInterval(btnSocial, duracao);
    });
</script>
