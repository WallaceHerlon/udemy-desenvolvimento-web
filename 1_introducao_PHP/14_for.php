<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>For</title>
</head>

<body>
    <?php

    for($i = 1; $i <= 10; $i++){
        echo "Relatório do produto: $i <br>";
    }

    echo "<br><br>";

    for($i = 10; $i >= 1; $i--){
        echo "Quantidade de vagas: $i <br>";

        echo "Novo cadastro.<br><br>";
    }

    ?>
</body>

</html>