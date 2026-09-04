<?php
echo "1 - Pendente\n";
echo "2 - Em processamento\n";
echo "3 - Enviado\n";
echo "4 - Entregue\n";

$status = readline("Digite a opção do status: ");

switch ($status) {
    case 1:
        echo "Status: Pendente\n";
        break;
    case 2:
        echo "Status: Em processamento\n";
        break;
    case 3:
        echo "Status: Enviado\n";
        break;
    case 4:
        echo "Status: Entregue\n";
        break;
    default:
        echo "Status inválido\n";
}
?>