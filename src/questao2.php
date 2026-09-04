<?php
$idade = readline("Digite sua idade: ");

if ($idade < 12) {
    echo "Classificação: criança\n";
} elseif ($idade < 18) {
    echo "Classificação: adolescente\n";
} elseif ($idade < 60) {
    echo "Classificação: adulto\n";
} else {
    echo "Classificação: idoso\n";
}
?>