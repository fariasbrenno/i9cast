<?php

// DADOS DA RÁDIO E PAINEL DO STREAMING
$radio = $conexao->query("SELECT * FROM dados_radio WHERE id=1");
foreach ($radio as $row) {
    $nome_radio = $row['nome_radio'];
    $ip = $row['ip_streaming'];
    $porta = $row['porta_streaming'];
    $api = $row['api_streaming'];
    $senha_streaming = $row['senha_streaming'];
}
// CONSULTANDO TABELA VERSICULO
$data = $conexao->query('select * from versiculo where id = 1');
foreach ($data as $row) {
    $versiculo = $row['versiculo'];
    $capitulo = $row['capitulo'];
    $versiculoAutomatico = $row['automatico'];
    $acaoVersiculo = $row['acao'];
}
// CONSULTANDO TABELA COR
$cor = $conexao->query('select * from cor_site where id = 1');
foreach ($cor as $row) {
    $CorSite = $row['background'];
}
// CONSULTANDO TABELA IMAGENS DO SITE
$imagens = $conexao->query('select * from imagens where id = 1');
foreach ($imagens as $row) {
    $logo = $row['logo'];
    $fundo_site = $row['fundo_site'];
    $fundo_app = $row['fundo_app'];
}
// CONSULTANDO TABELA REDES SOCIAIS
$redes = $conexao->query('select * from redes_sociais');
foreach ($redes as $row) {
    $telefone = $row['telefone'];
    $whatsapp = $row['whatsapp'];
    $facebook = $row['facebook'];
    $instagram = $row['instagram'];
    $tiktok = $row['tiktok'];
    $youtube = $row['youtube'];
    $email = $row['email'];
    $twitter = $row['twitter'];
    
    // Remover a formatação para obter apenas os números
    $telefoneFormatado = preg_replace('/[^0-9]/', '', $whatsapp);
}
// CONSULTANDO TABELA DOAÇÃO
$doacao = $conexao->query('select * from doacao where id = 1');
foreach ($doacao as $row) {
    $nome = $row['nome'];
    $chave_pix = $row['chave_pix'];
    $qr_code = $row['qr_code'];
    $acaoDoacao = $row['acao'];
}

// CONSULTANDO TABELA
$fotos = $conexao->query('select acao from acao where id = 1');
foreach ($fotos as $row) {
    $acaoFotos = $row['acao'];
}
// DATA ATUAL DO SERVIDOR
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
$dataAtual = strftime('%A, %d de %B de %Y');

?>

