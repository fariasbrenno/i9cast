
<?php

//SCRIPT DE REMOVE DADOS ARMAZENADO NA HOSPEDAGEM
$directory = array(
        '../public/img/fotos/',
        '../public/img/banner/',
        '../public/img/favicon/',
        '../public/img/logo/',
        '../public/img/publicidade/',
        '../public/img/publicidade_slide/',
        '../public/img/slide_logo/'
        );

$usedImages = array(
    $foto[1]['foto'],
    $foto[2]['foto'],
    $foto[3]['foto'],
    $foto[4]['foto'],
    $foto[5]['foto'],
    $foto[6]['foto'],
    $imagem[1]['imagem'],
    $imagem[2]['imagem'],
    $imagem[3]['imagem'],
    $imagem[4]['imagem'],
    $imagem[5]['imagem'],
    $imagem[6]['imagem'],
    $imagem[7]['imagem'],
    $imagem[8]['imagem'],
    $imagem[9]['imagem'],
    $imagem[10]['imagem'],
    $imagem[11]['imagem'],
    $imagem[12]['imagem'],
    $img[1]['img'],
    $img[2]['img'],
    $img[3]['img'],
    $slide[1]['slide'],
    $slide[2]['slide'],
    $slide[3]['slide'],
    $favicon,
    $logo,
    $banner   

);

function listFilesInDirectory($directory)
{
    return scandir($directory);
};

function deleteFile($directory, $file)
{
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