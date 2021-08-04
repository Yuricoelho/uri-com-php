<?php

$distanciaTotalPercorrida = (int) readline();
$totalCombustivelGasto = (double) readline();

$totalGasto = $distanciaTotalPercorrida / $totalCombustivelGasto;

printf("%.3f km/l\n", $totalGasto);
