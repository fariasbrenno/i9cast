<?php

$files = glob('../public/css/*.css'); // Obtém todos os arquivos CSS na pasta "css"

$output = '';

foreach ($files as $file) {
  $output .= file_get_contents($file); // Lê o conteúdo de cada arquivo e concatena
}

// Define o tipo de conteúdo como CSS
header('Content-Type: text/css');

// Imprime o conteúdo concatenado
echo $output;

