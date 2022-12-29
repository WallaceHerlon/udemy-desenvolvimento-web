<?php

$a = 1;
$b = 2;
$c = 3;
$result = 6;

echo "Somar o valor $result pelo valor $a <br>";
$result += $a;
echo "Resultado da adição: $result <br><br>";

echo "Subtrair o valor $result pelo valor $b <br>";
$result -= $b;
echo "Resultado da subtração: $result <br><br>";

echo "Multiplicação o valor $result pelo valor $b <br>";
$result *= $b;
echo "Resultado da multiplicação: $result <br><br>";

echo "Dividir o valor $result pelo valor $b <br>";
$result /= $b;
echo "Resultado da divisão: $result <br><br>";

echo "O resto da valor $result pelo valor $b <br>";
$result %= $b;
echo "Resultado do módulo: $result <br><br>";

$d = "Bom ";
$d .= "dia, ";
$d .= "Wallace.";

echo $d;
