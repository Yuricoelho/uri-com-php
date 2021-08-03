<?php

$nomeVendedor = readline();
$salFixoVendedor = (double) readline();
$totalVendas = (double) readline();

$totalParaReceber = $totalVendas * 0.15 + $salFixoVendedor;

printf("TOTAL = R$ %.2f\n", $totalParaReceber);