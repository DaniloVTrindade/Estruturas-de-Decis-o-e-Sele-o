<?php
$nota = (float) readline("Digite a nota do aluno: ");

if ($nota >= 7) {
    echo "Aluno aprovado\n";
} elseif ($nota >= 5) {
    echo "Aluno em recuperação\n";
} else {
    echo "Aluno reprovado\n";
}
?>