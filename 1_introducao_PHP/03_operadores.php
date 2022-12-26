<?php

$a = 2;
$b = 4;
$c = 7;

$result_soma = $a + $b;
echo "Soma: $result_soma <br><br>";

$result_subtracao = $b - $a;
echo "Subtração: $result_subtracao <br><br>";

$result_mult = $b * $a;
echo "Subtração: $result_mult <br><br>";

$result_divisao = $b / $a;
echo "Divisão: $result_divisao <br><br>";

$result_resto = $c % $a;
echo "Resto da divisão: $result_resto <br><br>";

echo "<hr>";

$cc = 38564.32;
echo "Valor na conta corrente: R$: " . number_format($cc, 2, ",",".") . "<br><br>";

$debito = 200.16;
echo "Valor do debito: R$: " . number_format($debito, 2, ",",".") . "<br><br>";

$result_real = $cc - $debito;
echo "Valor na conta corrente: R$: " . number_format($result_real, 2, ",",".") . "<br><br>";