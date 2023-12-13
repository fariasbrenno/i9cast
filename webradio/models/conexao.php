<?php

function redirect($url) {
    echo "<meta http-equiv='refresh' content='0;URL=$url'>";
}


// Configuração das informações de conexão
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'i9cast';

// Conexão com o banco de dados MySQL
$conexao = new mysqli($host, $user, $password, $database);

// Verificar se ocorreu algum erro na conexão
if ($conexao->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
}



?>