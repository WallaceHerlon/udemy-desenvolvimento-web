<?php

// Incluir o arquivo de configuração
include_once "./config/config.php";

// Incluir o arquivo com a conexao ao banco de dados
include_once "./config/connection.php";

// Receber a url
$url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

// Incluir a biblioteca para limpar a URL
include_once "./app/sts/lib/lib_clean_url.php";
$url_clean = cleanUrl($url);

// Converter a string em arry
$url_path = explode("/", $url_clean);

// Verificar se existe a posição 1 no array
if(isset($url_path['0'])){
    $path_page = $url_path['0'];
}

// Verificar se existe a posição 2 no array
if(isset($url_path['1'])){
    $path_detail = $url_path['1'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="app/sts/assets/image/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>

<body>
    <?php

    // Incluir o arquivo com menu
    include_once "./app/sts/include/menu.php";
    // Verificar se tem o nome da página
    if (!empty($path_page)) {
        if (file_exists("app/sts/view/" . $path_page . ".php")) {
            include "app/sts/view/" . $path_page . ".php";
        } else {
            include "app/sts/view/404.php";
        }
    } else {
        include "app/sts/view/home.php";
    }
    ?>
</body>

</html>