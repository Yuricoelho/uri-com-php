<?php

$numFunc = (int) readline();
$numHorasTrabalhadas = (int) readline();
$valorPorHora = (double) readline();

$salFunc = (double) ($numHorasTrabalhadas * $valorPorHora);

printf("NUMBER = %d\n", $numFunc);
printf("SALARY = U$ %.2f\n", $salFunc);

