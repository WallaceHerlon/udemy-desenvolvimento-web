<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de comparação</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 8;
        $c = 10;
    
        if ($a == $b) {
            echo "Verdadeiro: o número $a é igual ao valor $b <br><br>";
        } else {
            echo "Falso: o número $a não é igual ao valor $b <br><br>";
        }
    
        if ($a != $b) {
            echo "Verdadeiro: o número $a é diferente do valor $b <br><br>";
        } else {
            echo "Falso: o número $a não é diferente do valor $b <br><br>";
        }    
    
        if ($a < $b) {
            echo "Verdadeiro: o número $a é menor do valor $b <br><br>";
        } else {
            echo "Falso: o número $a não é menor do valor $b <br><br>";
        } 
    
        if ($a > $b) {
            echo "Verdadeiro: o número $a é maior do valor $b <br><br>";
        } else {
            echo "Falso: o número $a não é maior do valor $b <br><br>";
        }
    
        if ($a <= $b) {
            echo "Verdadeiro: o número $a é menor ou igual do valor $b <br><br>";
        } else {
            echo "Falso: o número $a não é menor ou igual do valor $b <br><br>";
        }
    
        if ($a >= $c) {
            echo "Verdadeiro: o número $a é maior ou igual do valor $c <br><br>";
        } else {
            echo "Falso: o número $a não é maior ou igual do valor $c <br><br>";
        }
    ?>
</body>
</html>