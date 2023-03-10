<?php

// Constante que define que o usuario esta acessando paginas internas atraves da pagina "index.php".
define('C7E3L8K9E5', true);

// Receber a url
$url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
// var_dump($url);

// Incluir a biblioteca para limpar a URL
include_once "./app/adms/lib/lib_clean_url.php";
$url_clean = cleanUrl($url);

// Converte a string em array
$url_path = explode("/", $url_clean);
// var_dump($url_path);

// Verificar se existe a posicao 1 no array
if((isset($url_path['0'])) and (!empty($url_path['0']))){
    $path_page = $url_path['0'];
}else{
    $path_page = "login";
}
// var_dump($path_page);

// Verificar se existe a posicao 2 no array
if((isset($url_path['1'])) and (!empty($url_path['1']))){
    $path_detail = $url_path['1'];
}else{
    $path_detail = "";
}
// var_dump($path_detail);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Adm</title>
</head>

<body>
    <?php
    if (!empty($path_page)) {
        if (file_exists("app/adms/views/" . $path_page . ".php")) {
            include_once "app/adms/views/" . $path_page . ".php";
        } else {
            include_once "app/adms/views/404.php";
        }
    } else {
        include_once "app/adms/views/login.php";
    }
    ?>
</body>

</html>