<?php

$files = glob('../public/css/*.css');
$output = '';
foreach ($files as $file) {
  $output .= file_get_contents($file); // Lê o conteúdo de cada arquivo e concatena
}

// Define o tipo de conteúdo como JavaScript
header('Content-Type: text/css');

// Imprime o conteúdo concatenado
echo $output;

?>