<?php
$valorCompra = (float) readline("Digite o valor da compra: ");

if ($valorCompra >= 200) {
    $frete = 0;
} elseif ($valorCompra >= 100) {
    $frete = 10;
} else {
    $frete = 20;
}

$total = $valorCompra + $frete;

echo "Frete: R$ $frete\n";
echo "Total da compra: R$ $total\n";
?>