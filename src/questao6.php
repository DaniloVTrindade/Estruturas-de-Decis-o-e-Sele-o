<?php
$numero1 = (float) readline("Digite o primeiro número: ");
$numero2 = (float) readline("Digite o segundo número: ");

echo "1 - Soma\n";
echo "2 - Subtração\n";
echo "3 - Multiplicação\n";
echo "4 - Divisão\n";

$opcao = (int) readline("Escolha uma operação: ");

switch ($opcao) {
    case 1:
        echo "Resultado: " . ($numero1 + $numero2) . "\n";
        break;
    case 2:
        echo "Resultado: " . ($numero1 - $numero2) . "\n";
        break;
    case 3:
        echo "Resultado: " . ($numero1 * $numero2) . "\n";
        break;
    case 4:
        if ($numero2 == 0) {
            echo "Não é possível dividir por zero\n";
        } else {
            echo "Resultado: " . ($numero1 / $numero2) . "\n";
        }
        break;
    default:
        echo "Opção inválida\n";
}
?>