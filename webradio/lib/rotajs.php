<?php

$files = glob('../public/js/*.js'); // Obtém todos os arquivos JavaScript na pasta "js"

$output = '';
foreach ($files as $file) {
  $output .= file_get_contents($file); // Lê o conteúdo de cada arquivo e concatena
}

// Define o tipo de conteúdo como JavaScript
header('Content-Type: application/javascript');
// Imprime o conteúdo concatenado
echo $output;

?>