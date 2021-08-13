<?php

$segundos = (int) readline();

$horas = $segundos / 3600;
$minutos = $segundos % 3600 / 60;
$segundosR = $segundos % 60;

printf("%d:%d:%d\n", $horas, $minutos, $segundosR);

