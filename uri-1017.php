<?php

$tempoGastoNaViagem = (int) readline();
$velocidadeMedia = (int) readline();

$distanciaPercorrida = $velocidadeMedia * $tempoGastoNaViagem;

$quantidadeDeLitros = (double) ($distanciaPercorrida / 12);

printf("%.3f\n", $quantidadeDeLitros);