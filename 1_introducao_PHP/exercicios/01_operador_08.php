<?php

$valor_produto = 280.74;
$quantidade = 58;

$valor_total_venda = $valor_produto * $quantidade;
echo "total da venda no mês de Junho do produto “A” foi deR$: " . number_format($valor_total_venda, 2, ",", ".") . "<br><br>";
