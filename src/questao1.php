<?php
$distancia = readline("Digite a distância da corrida em km: ");

$taxaFixa = 5;
$valorKm = 2.50;

$valorCorrida = $taxaFixa + ($distancia * $valorKm);

echo "Valor da corrida: R$ $valorCorrida\n";
?>