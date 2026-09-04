<?php
$valorCompra = readline("Digite o valor da compra: ");

if ($valorCompra >= 500) {
    $desconto = 20;
} elseif ($valorCompra >= 100) {
    $desconto = 10;
} else {
    $desconto = 0;
}

$valorDesconto = $valorCompra * ($desconto / 100);
$valorFinal = $valorCompra - $valorDesconto;

echo "Desconto: $desconto%\n";
echo "Valor final: R$ $valorFinal\n";
?>