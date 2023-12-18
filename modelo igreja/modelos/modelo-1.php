
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
                <a href="painel" class="text-decoration-none w-100 dja">
                    <button class="btn border shadow <?=$CorSite?> CorMudar w-50">Entrar</button>
                </a>     
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
                <a href="painel" class="text-decoration-none">
                    <div style="height:35px;" class="border rounded dja shadow <?=$CorSite?> CorMudar w-50 ms-5 scale">Entrar</div>
                </a>
            </div>
        </div>
    </div>

<!-- APRESENTAÇÃO DO SITE -->
    <div style="margin-top:50px;" class="container-fluid">
        <div class="row row-cols-1 row-cols-md-1 dja">            
            <div class="col-lg-12 col-12 dja col-apresentacao img-fundo">
                <div class="w-75 text-white" style="z-index: 1000">
                    <h2>
                        A Rádio tem PODER!
                        <br>
                        Baixe nosso aplicativo
                    </h2>
                    <div id="sumir-baixar-app" style="display: none;" class="dja w-100">
                        <div id="install-button" style="height:45px;border-radius:50px;display:none;" class="instalar-app shadow text-center <?=$CorSite?> CorMudar dja fs-2 scale btn-baixar-app">
                        Baixar app
                        </div>
                    </div>                    
                </div>
                <div style="position:absolute;width:200px;height:200px;background-color:rgba(000, 000, 000, 0.3); z-index: 1001;" class="rounded play-m1">
                    <h5 class="text-center text-white p-3 texto-radio">Ligar Rádio</h5>
                    <div class="w-100 dja">
                        <div style="width:95px;height:95px;" class="dja rounded-circle <?=$CorSite?> CorMudar shadow scale">
                            <i style="font-size:40px;" class="fa-solid fa-play play"></i>
                            <i style="display: none;font-size:40px;" class="fa-solid fa-pause pause"></i>
                        </div>
                    </div> 
                    <audio id="player"> 
                        <source id="srcP" type="audio/mpeg">
                        <span>Your browser dont support that element.</span>
                    </audio>
                    <marquee class="status cc_streaminfo p-2 text-white letreiro-ajax" data-type="song" data-username="hoostcom"></marquee> 
                </div>
                <div class="overflow"></div>
            </div>
        </div>
    </div>
<style type="text/css">
        .overflow::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 75vh;
        margin-top:50px;
        background-color: rgba(0, 0, 0, 0.2); /* Cor preta com opacidade de 0.3 (30%) */
    }
    </style>

<!-- VERSICULO DO DIA -->
    <?php if ($acaoVersiculo === 'ativo'): ?> 
        <div id="container1" class="container-fluid mt-5">

            <?php if ($versiculoAutomatico === 'nao'): ?> 
        
        <div class="row row-cols-1 row-cols-md-1 dja" id="versiculo_manual">            
            <div style="height:max-content" class="col-lg-8 col-11 border rounded shadow-lg">
                <h3 class="border-bottom p-3">Versículo do dia</h3>
                <div class="p-3">
                    <h6><?=$dataAtual?></h6>
                    <p><?=$versiculo?></p>
                    <h5 class="text-end"><?=$capitulo?></h5>
                </div>
            </div>
        </div>

<p id="auto_versiculo" style="display:none"></p>
<h5 id="auto_referencia" style="display:none"></h5>
<input class="foreach_versiculo" type="hidden" value="manual">
<?php elseif ($versiculoAutomatico === 'sim'): ?>

        <div class="row row-cols-1 row-cols-md-1 dja" id="versiculo_automatico">            
            <div style="height:max-content" class="col-lg-8 col-11 border rounded shadow-lg">
                <h3 class="border-bottom p-3">Versiculo do dia</h3>
                <div class="p-3">
                    <h6><?=$dataAtual?></h6>
                    <p id="auto_versiculo"><?=$versiculo?></p>
                    <h5 class="text-end" id="auto_referencia"><?=$capitulo?></h5>
                </div>
            </div>
        </div>
<input class="foreach_versiculo" type="hidden" value="automatico">
<?php endif; ?>

        </div>
    <?php endif; ?>


<!-- FOTOS DA IGREJA -->
    <?php if ($acaoFotos === 'ativo'): ?> 
        <div id="container2" class="container-fluid pt-5">
            <div class="row dja">
                <div class="col-lg-3">
                    <h1 class="text-center">Mural de Fotos</h1>
                    <div class="dja">
                        <div style="height:40px;width:40px;" class="rounded-circle border scale shadow m-1 fs-5 voltar dja"><i class="fa-solid fa-arrow-left-long"></i></div>
                        <div style="height:40px;width:40px;" class="rounded-circle border scale shadow m-1 fs-5 ir dja"><i class="fa-solid fa-arrow-right-long"></i></div>
                    </div>
                </div>
                <div style="height: 50vh;overflow: hidden;" class="col-lg-7 tela-fim">
                    <div style="width: max-content;" class="df mural-fotos">
        <?php $fotos = $conexao->query('select * from fotos');
        foreach($fotos as $row) : ?>
                    <img width="250" height="250" class="rounded border m-1 scale ir<?=$row['id']?>" src="../public/img/fotos/<?=$row['foto']?>"> 
        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

<!-- DOAÇÃO -->
    <?php if ($acaoDoacao === 'ativo'): ?> 
        <div id="container3" class="container-fluid mt-5">
            <div class="row row-cols-1 row-cols-md-1 dja">            
                <div class="col-lg-4 col-12 dja p-2">
                    <h2>
                        Faça sua doação
                        <br>
                        e ajude-nos a resgatar vidas!
                    </h2>               
                </div>
                <div class="col-lg-4 col-12 text-center">
                    <img width="275px" height="275px" class="d-block m-auto shadow rounded" src="../public/img/qr_code/<?=$qr_code?>">             
                    <p class="mt-2">
                        <?=$nome?>
                        <br>
                        Chave PIX: <?=$chave_pix?>
                    </p>
                </div>
            </div>
        </div>
    <?php endif; ?>

<!-- RODAPE -->
    <div id="container5" class="container-fluid border-top mt-5">
        <div class="row dja p-3">
            <div style="height:125px;" class="col-lg-4">                     
                <h3>Redes sociais</h3>
        <?php if ($facebook != ''):?>
                <a href="<?=$facebook?>" class="text-decoration-none <?=$CorSite?> CorMudar" target="_blank">
                    <i class="fa-brands fa-facebook fs-3 m-1 scale"></i>
                </a>
        <?php endif; if ($instagram != ''): ?>
                <a href="<?=$instagram?>" class="text-decoration-none <?=$CorSite?> CorMudar" target="_blank">
                    <i class="fa-brands fa-instagram fs-3 m-1 scale"></i>
                </a>
        <?php endif; if ($tiktok != ''): ?>
                <a href="<?=$tiktok?>" class="text-decoration-none <?=$CorSite?> CorMudar" target="_blank">
                    <i class="fa-brands fa-tiktok fs-3 m-1 scale"></i>
                </a>
        <?php endif; if ($twitter != ''): ?>
                <a href="<?=$twitter?>" class="text-decoration-none <?=$CorSite?> CorMudar" target="_blank">
                    <i class="fa-brands fa-twitter fs-3 m-1 scale"></i>
                </a>
        <?php endif; if ($youtube != ''): ?>
                <a href="<?=$youtube?>" class="text-decoration-none <?=$CorSite?> CorMudar" target="_blank">
                    <i class="fa-brands fa-youtube fs-3 m-1 scale"></i>
                </a>
        <?php endif; ?>
            </div>
            <div style="height: 200px;" class="col-lg-4">
                <h5>Atendimento</h5>
        <?php if ($email != ''):?>
                <a href="mailto:<?=$email?>" class="text-decoration-none <?=$CorSite?> CorMudar" target="_blank">
                    <div class="m-1"><i class="fa-regular fa-envelope scale"></i> <?=$email?></div>
                </a>
        <?php endif; if ($whatsapp != ''): ?>
                <a href="https://api.whatsapp.com/send?phone=55<?=$telefoneFormatado?>" class="text-decoration-none <?=$CorSite?> CorMudar" target="_blank">
                    <div class="m-1"><i class="fa-brands fa-whatsapp scale"></i> <?=$whatsapp?></div>
                </a>
        <?php endif; if ($telefone != ''): ?>
                <a href="tel:<?=$telefoneFormatado?>" class="text-decoration-none <?=$CorSite?> CorMudar" target="_blank">
                    <div class="m-1"><i class="fa-solid fa-phone-volume scale"></i> <?=$telefone?></div>
                </a>
        <?php endif; ?>
            </div>
        <?php if ($whatsapp != ''): ?>
            <div style="height: 200px;" class="col-lg-3 text-center">      
                <h5>Oração Online!</h5>
                <p>Por que você está sofrendo?</p>
                <a href="https://api.whatsapp.com/send?phone=55<?=$telefoneFormatado?>" class="text-decoration-none dja" target="_blank">
                    <div style="height:40px;" class="w-75 dja border rounded shadow <?=$CorSite?> CorMudar scale">pedi oração <i class="fa-brands fa-whatsapp ms-2"></i></i></div>
                </a>
            </div>
        <?php endif; ?>
        </div>
    </div>


<script type="text/javascript">
  // Exemplo usando a API da Bible.org
  const apiUrl = 'https://labs.bible.org/api/?passage=votd&type=json';

  fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
      const auto_versiculo = data[0].text;
      const chapter = data[0].chapter;
      const verse = data[0].verse;
      const bookname = data[0].bookname;

      // Função para traduzir o versículo de inglês para português
      Promise.all([
        translateToPortuguese(auto_versiculo),
        translateToPortuguese(bookname)
      ])
        .then(([translatedText, translatedBookname]) => {
          document.getElementById('auto_versiculo').textContent = translatedText;
          document.getElementById('auto_referencia').textContent = `${translatedBookname} ${chapter}:${verse}`;
        })
        .catch(error => {
          console.error('Erro na tradução:', error);
          document.getElementById('auto_versiculo').textContent = auto_versiculo; // Usar o texto original em caso de erro
        });
    })
    .catch(error => console.error('Erro ao obter o versículo do dia:', error));

  // Função para traduzir um texto para português usando o serviço de tradução do Google Translate
  async function translateToPortuguese(text) {
    const response = await fetch(`https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=pt&dt=t&q=${encodeURIComponent(text)}`);
    const translationData = await response.json();
    const translation = translationData[0]?.[0]?.[0] || 'Tradução não disponível';
    return translation;
  }
</script>