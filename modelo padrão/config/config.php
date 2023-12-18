
<?php

$radio = $conexao->query("SELECT * FROM informacao_radio WHERE id=1");
foreach($radio as $row){
    $nome_radio = $row['nome_radio'];
    $ip = $row['ip_streaming'];
    $porta = $row['porta_streaming'];
    $api = $row['api_streaming'];
    $senha_streaming = $row['senha_streaming'];
}

    // URL da API XML que você deseja acessar
    $apiUrl = $api;

    // Inicializar uma sessão cURL
    $ch = curl_init();

    // Definir as opções da requisição cURL
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


    // Fazer a requisição para a API e obter a resposta XML
    $responseXML = curl_exec($ch);

    // Verificar se houve algum erro na requisição
    if(curl_errno($ch)) {
    echo 'Erro na requisição: ' . curl_error($ch);
    }

    // Fechar a sessão cURL
    curl_close($ch);

    // Processar a resposta XML usando SimpleXML
    $dadosXML = simplexml_load_string($responseXML);


    // SQL - AGENDA
for($i = 1; $i <= 4; $i++){
    $data = $conexao->query("SELECT * FROM agenda WHERE id=$i");
    $row = $data->fetch_assoc();

    $dataAge[$i]['data'] = $row['data'];
    $horaAg[$i]['hora'] = $row['hora'];
    $local[$i]['local'] = $row['local'];
    $descricao[$i]['descricao'] = $row['descricao'];

    $dataDoBanco = $dataAge[$i]['data'];
    $formatoOriginal = 'Y-m-d';
    $novoFormato = 'd/m/Y';
    $dataAg[$i]['data'] = date($novoFormato, strtotime($dataDoBanco));

}

// SQL - SLIDE LOGO
for ($i = 1; $i <= 3; $i++){
    $data = $conexao->query("SELECT * FROM slide_logo WHERE id=$i");
    $row = $data->fetch_assoc();
    $img[$i]['img'] = $row['img'];
    $img_link[$i]['link'] = $row['link'];
}

// SQL - LOGO
$logo = $conexao->query('select * from logo where id=1');
foreach($logo as $row){
    $logo = $row['logo'];
}

// SQL - BANNER & LINK
$banner = $conexao->query('select * from publicidade_banner where id=1');
foreach($banner as $row){
    $banner = $row['banner'];
    $link_banner = $row['link'];
}

// SQL - FAVICON
$favicon = $conexao->query('select * from favicon where id=1');
foreach($favicon as $row){
    $favicon = $row['favicon'];
}

// SQL - PUBLICIDADE SLIDE
for ($i = 1; $i <= 3; $i++){
    $data = $conexao->query("SELECT * FROM publicidade_slide WHERE id=$i");
    $row = $data->fetch_assoc();
    $slide[$i]['slide'] = $row['slide'];
    $link_slide[$i]['link'] = $row['link'];
}



// SQL - MURAL DE FOTOS
for ($i = 1; $i <= 6; $i++) {
    $data = $conexao->query("SELECT * FROM fotos WHERE id=$i");
    $row = $data->fetch_assoc();
    $foto[$i]['foto'] = $row['foto']; 
}  


//SOBRE
$sobre = $conexao->query('select * from sobre where id=1');
foreach($sobre as $row){
    $sobre = $row['descricao'];
}

//ENDEREÇO
$endereco = $conexao->query('select * from endereco where id=1');
foreach($endereco as $row){
    $cep = $row['cep'];
    $rua = $row['rua'];
    $complemento = $row['complemento'];
    $bairro = $row['bairro'];
    $numerocasa = $row['numero'];
    $cidade = $row['cidade'];
    $estado = $row['estado'];
}

//SOCIAL
$social = $conexao->query('select * from social where id=1');
foreach($social as $row){
    $telefone = $row['telefone'];
    $numero = $row['whatsapp'];
    $facebook = $row['facebook'];
    $instagram = $row['instagram'];
    $tiktok = $row['tiktok'];
    $youtube_link = $row['youtube'];

    $whatsapp = preg_replace('/\D/', '', $numero);

    // Use a função substr para extrair apenas o ID do vídeo
    $youtube_id = substr($youtube_link, -11); // Assume que o ID tem sempre 11 caracteres
    // Construa o URL completo do vídeo do YouTube
    $youtube = "https://www.youtube.com/embed/" . $youtube_id;

}
// LINK DO SITE
$site = $_SERVER['SERVER_NAME'];

// PUBLICIDADE
for ($i = 1; $i <= 12; $i++) {
    $result = $conexao->query("SELECT * FROM publicidade WHERE id=$i");
    $row = $result->fetch_assoc();
    $imagem[$i]['imagem'] = $row['imagem'];
    $link[$i]['link'] = $row['link'];
}

// SQL - MURAL DE FOTOS
for ($i = 1; $i <= 6; $i++) {
    $data = $conexao->query("SELECT * FROM fotos WHERE id=$i");
    $row = $data->fetch_assoc();
    $foto[$i]['foto'] = $row['foto'];
}

// SQL - PROGRAMAÇÃO
for ($i = 1; $i <= 10; $i++) {
    $programacao = $conexao->query("select * from programacao WHERE id=$i");
    $row = $programacao->fetch_assoc();
    $dia[$i]['dia'] = $row['dia'];
    $hora[$i]['hora'] = $row['hora'];
    $programa[$i]['programa'] = $row['programa'];
    $apresentador[$i]['apresentador'] = $row['apresentador'];
}

// TOP MUSICAS
for ($i = 1; $i <= 10; $i++) {
    $result = $conexao->query("SELECT * FROM top_10_musicas WHERE id=$i");
    $row = $result->fetch_assoc();
    $musicas[$i]['nome'] = $row['nome'];
    $musicas[$i]['link'] = $row['link'];
}
// SQL - MUDAR COR
$cor = $conexao->query("SELECT * FROM cor_site WHERE id=1");
foreach($cor as $row){
    $corFundo = $row['background'];
}

$usuario = $conexao->query("SELECT * FROM usuario WHERE id=1");
foreach($usuario as $row){
    $email = $row['email'];
    $cpf = $row['cpf'];
}
//LINK DO APLICATIVO
$aplicativo = $conexao->query('select * from aplicativo where id=1');
foreach($aplicativo as $row){
    $link_google_play = $row['google_play'];
    $link_aplicativo = $row['aplicativo'];
}
//DATA - PEGAR ANO ATUAL
$anoAtual = date('Y');

// Suponha que o caminho para a logo seja retornado da consulta ao banco de dados e armazenado na variável $caminho_logo
$caminho_logo = "../public/img/logo/$logo";

// Dados do aplicativo em formato de array
$data = array(
    "name" => $nome_radio,
    "short_name" => $nome_radio,
    "start_url" => "app/index.php",
    "display" => "standalone",
    "background_color" => "#fff",
    "theme_color" => "#fff",
    "icons" => array(
        array(
            "src" => $caminho_logo,
            "sizes" => "192x192",
            "type" => "image/png",
            "style" => "border-radius: 10px;"
        )
    )
);

// Converte para JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Escreve no arquivo JSON
file_put_contents('manifest.json', $json_data);

// Fecha a conexão
//$conexao->close();

?>
