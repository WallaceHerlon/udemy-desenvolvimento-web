<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Estrutura de Controle - IF ... ELSEIF ... ELSE</title>
</head>

<body>
    <?php

    $a = 6;

    if ($a == 2) {
        echo "Depositar dinheiro. <br>";
    } elseif ($a == 1) {
        echo "Sacar dinheiro! <br>";
    } elseif ($a == 3) {
        echo "Extrato da conta corrente. <br>";
    } else {
        echo "Opção não encotrado!<br>";
    }

    ?>
</body>

</html>