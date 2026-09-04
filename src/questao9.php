<?php
$temperatura = (float) readline("Digite a temperatura: ");

if ($temperatura < 15) {
    echo "Temperatura fria\n";
} elseif ($temperatura <= 25) {
    echo "Temperatura agradável\n";
} else {
    echo "Temperatura quente\n";
}
?>