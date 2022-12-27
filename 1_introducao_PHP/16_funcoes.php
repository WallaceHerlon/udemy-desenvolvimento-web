<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Funções</title>
</head>

<body>
    <?php

    $codigo = "cursophpdev";
    promocao($codigo);

    function promocao($valor = null)
    {
        echo "Acessou a função<br>";
        echo "Paramentro: $valor <br>";
        if ($valor == "cursophp") {
            //echo "Código válido.<br>";
            $msg = "Código válido.";
        } else {
            //echo "Código inválido.<br>";
            $msg = "Código inválido.";
        }
        return $msg;
    }

    echo "<hr>";

    $codigo_curso = "cursophp";
    $retorno_dados_funcao = promocao($codigo_curso);
    echo $retorno_dados_funcao . "<br>";

    echo "<hr>";

    $codigo_curso = "cursophp";
    $retorno_dados_funcao = promocao();
    echo $retorno_dados_funcao . "<br>";

    ?>
</body>

</html>