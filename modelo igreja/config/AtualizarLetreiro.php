<?php

include('../models/conexao.php');
// DADOS DA RÁDIO E PAINEL DO STREAMING
$radio = $conexao->query("SELECT * FROM dados_radio WHERE id=1");
foreach ($radio as $row) {
    $api = $row['api_streaming'];
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
if (curl_errno($ch)) {
    echo json_encode(['erro' => 'Erro na requisição: ' . curl_error($ch)]);
    exit(); // Encerra a execução do script em caso de erro
}

// Fechar a sessão cURL
curl_close($ch);

// Processar a resposta XML usando SimpleXML
$dadosXML = simplexml_load_string($responseXML);

// Verificar se o SimpleXML foi carregado corretamente
if ($dadosXML === false) {
    echo json_encode(['erro' => 'Erro ao processar a resposta XML']);
    exit();
}

// Retornar os dados no formato JSON
echo json_encode(['musica_atual' => (string) $dadosXML->musica_atual, 'status' => (string) $dadosXML->status]);
?>