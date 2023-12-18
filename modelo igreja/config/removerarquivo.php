
<?php

//SCRIPT DE REMOVE DADOS ARMAZENADO NA HOSPEDAGEM
$directory = array(
        'public/img/logo/',
        'public/img/fundo/',
        'public/img/qr_code/'
        );

$usedImages = array(
    $logo,
    $fundo_site,
    $qr_code,
    $fundo_app
);

function listFilesInDirectory($directory){
    return scandir($directory);
};
function deleteFile($directory, $file){
    $filePath = $directory . '/' . $file;
    if (file_exists($filePath)) {
        if (unlink($filePath)) {
            echo "Arquivo $file removido com sucesso!" . PHP_EOL;
            return true;
        } else {
            echo "Erro ao remover o arquivo $file." . PHP_EOL;
            return false;
        }
    } else {
        echo "O arquivo $file não existe." . PHP_EOL;
        return false;
    }
};

foreach ($directory as $dir) {
    $filesInDirectory = listFilesInDirectory($dir);
    if ($filesInDirectory) {
        foreach ($filesInDirectory as $file) {
            if (!in_array($file, $usedImages) && $file != "." && $file != "..") {
                deleteFile($dir, $file);
            }
        }
    } else {
        echo "O diretório $dir está vazio ou não existe." . PHP_EOL;
    }
};





?>