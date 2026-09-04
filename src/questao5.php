<?php
echo "1 - Vendas\n";
echo "2 - Suporte\n";
echo "3 - Financeiro\n";

$opcao = intval(readline("Escolha uma opção: "));

switch ($opcao) {
    case 1:
        echo "Você escolheu Vendas\n";
        break;
    case 2:
        echo "Você escolheu Suporte\n";
        break;
    case 3:
        echo "Você escolheu Financeiro\n";
        break;
    default:
        echo "Opção inválida\n";
}
?>
