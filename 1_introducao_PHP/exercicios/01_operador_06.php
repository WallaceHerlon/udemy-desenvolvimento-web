<?php

$comisao = 1321.45;
$salario = 7600.25;
$inss = 608.45;
$irrf = 1364.65;

$soma = $comisao + $salario;
echo "Valor do Salário mais a comisão: R$: " . number_format($soma, 2, ",", ".") . "<br><br>";

$desconto_inss_irrf = $inss + $irrf;
var_dump($desconto_inss_irrf);
$soma -= $desconto_inss_irrf;
echo "Desconto INSS mais IRRF, valor bruto: R$: " . number_format($soma, 2, ",", ".") . "<br><br>";
