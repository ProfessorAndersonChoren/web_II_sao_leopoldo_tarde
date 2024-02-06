<?php
function contarPalavras(string $frase,string $separador = ' '):int
{
    $palavras = explode($separador, $frase);
    return count($palavras);
}

$entrada = readline('Digite uma frase e te direi quantas palavras a compõem: ');
$qtdPalavras = contarPalavras($entrada);

echo "A frase \"$entrada\" contém $qtdPalavras palavras!";