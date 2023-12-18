<?php

// Configuração das informações de conexão
$host = 'localhost';
$user = 'webradio_root';
$password = '.krowiten.suporte*';
$database = 'webradio_teste';

// Conexão com o banco de dados MySQL
$conexao = new mysqli($host, $user, $password, $database);

// Verificar se ocorreu algum erro na conexão
if ($conexao->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
}



?>