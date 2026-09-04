<?php
$valorCompra = floatval(readline("Digite o valor da compra: "));

if ($valorCompra >= 200) {
    $frete = 0;
} elseif ($valorCompra >= 100) {
    $frete = 10;
} else {
    $frete = 20;
}

$total = $valorCompra + $frete;

echo "Frete: R$ " . number_format($frete, 2, ",", ".") . "\n";
echo "Total da compra: R$ " . number_format($total, 2, ",", ".") . "\n";
?>
