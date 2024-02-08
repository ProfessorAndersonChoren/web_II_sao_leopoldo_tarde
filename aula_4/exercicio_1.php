<?php
$numeros = [];

for($i=1;$i < 11;$i++){
    $entrada = readline("Digite o $i" . "° número: ");
    array_push($numeros, $entrada);
}

echo "A lista contêm " . contabilizarPositivos($numeros) . " números positivos\n";
echo "A lista contêm " . contabilizarNegativos($numeros) . " números negativos\n";
echo "A lista contêm " . contabilizarPares($numeros) . " números pares\n";
echo "A lista contêm " . contabilizarImpares($numeros) . " números ímpares\n";

function contabilizarPositivos(array $numeros):int
{
    $positivos = array_filter($numeros,fn($numero)=> $numero > 0);
    return count($positivos);
}

function contabilizarPares(array $numeros):int
{
    $pares = array_filter($numeros, fn($numero) => $numero % 2 == 0);
    return count($pares);
}

function contabilizarNegativos(array $numeros):int
{
    $negativos = array_filter($numeros,fn($numero) => $numero < 0);
    return count($negativos);
}

function contabilizarImpares(array $numeros):int
{
    $impares = array_filter($numeros, fn($numero) => $numero % 2 != 0);
    return count($impares);
}