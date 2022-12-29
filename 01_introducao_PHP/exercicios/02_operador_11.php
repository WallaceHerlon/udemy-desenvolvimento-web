<?php

$valor_produto = 280.74;
$quantidade = 58;

$valor_produto *= $quantidade;
echo "total da venda no mês de Junho do produto “A” foi de R$: " . number_format($valor_produto, 2, ",", ".") . "<br><br>";
