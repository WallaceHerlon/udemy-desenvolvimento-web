<?php

$comisao = 1321.45;
$salario = 7600.25;
$inss = 608.45;
$irrf = 1364.65;

$salario += $comisao;
$salario -= $inss; 
$salario -= $irrf;

echo "Valor do Salário total já com desconto: R$: " . number_format($salario, 2, ",", ".") . "<br><br>";
