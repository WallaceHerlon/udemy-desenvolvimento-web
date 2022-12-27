<?php

$compra = 1220.44;
$parcela = 4;

$compra /= $parcela;
echo "Total da compra R$: $compra, parcelando em $parcela, no valor de R$: " . number_format($compra, 2, ",", ".") . "<br><br>";
