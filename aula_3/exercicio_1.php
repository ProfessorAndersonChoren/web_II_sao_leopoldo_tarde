<?php
function realizarOperacao(float $numero1, float $numero2, int $operacao): float
{
    switch ($operacao) {
        case 1:
            return $numero1 + $numero2;
        case 2:
            return $numero1 - $numero2;
        case 3:
            return $numero1 * $numero2;
        case 4:
            return $numero1 / $numero2;
        default:
            return 0;
    }
}

try {
    $primeiroNumero = readline('Digite o primeiro número: ');

    if (!is_numeric($primeiroNumero)) {
        throw new InvalidArgumentException('O primeiro número é inválido!!!');
    }

    $segundoNumero = readline('Digite o segundo número: ');

    if (!is_numeric($segundoNumero)) {
        throw new InvalidArgumentException('O segundo número é inválido!!!');
    }

    echo "1 - Somar\n";
    echo "2 - Subtrair\n";
    echo "3 - Multiplicar\n";
    echo "4 - Dividir\n";
    $opcao = readline('Escolha um opção: ');

    echo realizarOperacao($primeiroNumero, $segundoNumero, $opcao);
} catch (Throwable $ex) {
    echo 'Houve um erro inesperado: ' . $ex->getMessage();
}
