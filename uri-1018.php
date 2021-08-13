<?php

$valor = (int) readline();

$cedulasDeCem = $valor / 100;
$restoCedulaCem = $valor % 100;
$cedulasDeCinquenta = $restoCedulaCem / 50;
$restoCedulaCinquenta = $restoCedulaCem % 50;
$cedulasDeVinte = $restoCedulaCinquenta / 20;
$restoCedulaVinte = $restoCedulaCinquenta % 20;
$cedulasDeDez = $restoCedulaVinte / 10;
$restoCedulaDez = $restoCedulaVinte % 10;
$cedulasDeCinco = $restoCedulaDez / 5;
$restoCedulaCinco = $restoCedulaDez % 5;
$cedulasDeDois = $restoCedulaCinco / 2;
$restoCedulaDois = $restoCedulaCinco % 2;
$cedulasDeUm = $restoCedulaDois / 1;

printf("%d\n", $valor);
printf("%d nota(s) de R$ 100,00\n", $cedulasDeCem);
printf("%d nota(s) de R$ 50,00\n", $cedulasDeCinquenta);
printf("%d nota(s) de R$ 20,00\n", $cedulasDeVinte);
printf("%d nota(s) de R$ 10,00\n", $cedulasDeDez);
printf("%d nota(s) de R$ 5,00\n", $cedulasDeCinco);
printf("%d nota(s) de R$ 2,00\n", $cedulasDeDois);
printf("%d nota(s) de R$ 1,00\n", $cedulasDeUm);
