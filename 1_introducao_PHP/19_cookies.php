<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Cookies</title>
</head>

<body>
    <?php

    setcookie("afiliado", "5323", (time() + (7 * 24 * 3600)));

    if (isset($_COOKIE['afiliado'])) {
        echo "Número do afiliado: " . $_COOKIE['afiliado'] . " <br>";
    }

    setcookie("logado", "Cesar", (time() + ( 7 * 3600)));
    if(isset($_COOKIE["logado"])){
        echo "Usuário " . $_COOKIE["logado"] . " logado. <br>";
    }else{
        echo "Cookies inválido!<br>";
    }


    ?>
</body>

</html>