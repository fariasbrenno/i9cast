<?php

$files = glob('../public/js/*.js'); 
$output = '';

foreach ($files as $file) {
  $output .= file_get_contents($file);

}

header('Content-Type: application/javascript');

echo $output;

?>

