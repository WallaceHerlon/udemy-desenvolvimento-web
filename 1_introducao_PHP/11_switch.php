<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Switch</title>
</head>

<body>
    <?php

    $a = 3;

    switch ($a) {
        case 1:
            echo "Sacar dinheiro.<br>";
            break;

        case 2:
            echo "Depositar dinheiro.<br>";
            break;

        case 3:
            echo "Imprimir cheque.<br>";
            break;

        default:
            echo "Opção não encontrada!<br>";
            break;
    }

    ?>
</body>

</html>