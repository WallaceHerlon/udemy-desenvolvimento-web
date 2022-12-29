<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento e Decremento</title>
</head>
<body>
    <?php
    echo "<h3>Pós-incremento</h3>";
    $a = 5;
    echo "Deve ser 5: " . $a++ . "<br>";
    echo "Deve ser 6: " . $a . "<br>";

    echo "<h3>Pré-incremento</h3>";
    $a = 5;
    echo "Deve ser 6: " . ++$a . "<br>";
    echo "Deve ser 6: " . $a . "<br>";

    echo "<hr>";

    echo "<h3>Pós-decremento</h3>";
    $a = 10;
    echo "Deve ser 10: " . $a-- . "<br>";
    echo "Deve ser 9: " . $a . "<br>";

    echo "<h3>Pré-decremento</h3>";
    $a = 10;
    echo "Deve ser 9: " . --$a . "<br>";
    echo "Deve ser 9: " . $a . "<br>";
    ?>
</body>
</html>
