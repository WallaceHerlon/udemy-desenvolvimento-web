<?php

$compra = 1220.44;
$parcela = 4;

$valor_parcela = $compra / $parcela;
echo "Total da compra R$: $compra, parcelando em $parcela, no valor de R$: " . number_format($valor_parcela, 2, ",", ".") . "<br><br>";
