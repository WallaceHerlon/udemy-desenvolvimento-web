<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Funções Recursivas</title>
</head>

<body>
    <?php

    function exibe($num){
        if($num >= 1){ 
            echo "Valor passado para a função: $num <br>";
            $qnt = $num - 1; 
            exibe($qnt); 
        }        
    }

    exibe(10);

    ?>
</body>

</html>