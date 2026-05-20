<?php

executar();

function executar(){
    do{
        exibirMenu();
        $operacao = readline("Digite a operação desejada: ");
        $valor1 = readline("Digite o primeiro número: ");
        $valor2 = readline("Digite o segundo número: ");
        $resultado = calcular($operacao, $valor1, $valor2);
        echo "Resultado: " . $resultado . "\n";

        echo "Deseja realizar outra operação? (s/n): ";
        $resposta = readLine();
        if($resposta=='N'||$resposta=='n'){
            break;
        }
    }while(true);
}

function exibirMenu() {
    echo "Escolha a operação:\n";
    echo "1. Somar\n";
    echo "2. Subtrair\n";
    echo "3. Multiplicar\n";
    echo "4. Dividir\n";
    echo "5. Potenciação\n\n";
}


function calcular($operacao, $valor1, $valor2) {
    switch ($operacao) {
        case '1':
            return somar($valor1, $valor2);
        case '2':
            return subtrair($valor1, $valor2);
        case '3':
            return multiplicar($valor1, $valor2);
        case '4':
            return dividir($valor1, $valor2);
        case '5':
            return potenciacao($valor1, $valor2);
        default:
            return "Operação inválida!";
    }
}

function somar($valor1, $valor2) {
    return $valor1 + $valor2;
}   

function subtrair($valor1, $valor2) {
    return $valor1 - $valor2;
}   

function multiplicar($valor1, $valor2) {
    return $valor1 * $valor2;
}

function dividir($valor1, $valor2) {
    if ($valor2 == 0) {
        return "Erro: Divisão por zero!";
    }
    return $valor1 / $valor2;
}

function potenciacao($valor1, $valor2 = 2) {
    return pow($valor1, $valor2);
}

echo potenciacao(5) . "\n"; // Potencia com valor padrão (5^2) 25
echo potenciacao(5, 3) . "\n"; // Potencia com valor personalizado (5^3) 125

// function teste($filtros) {
//     echo "Valor do filtro: " . $filtros->nome . "\n";
//     echo "Valor do filtro: " . $filtros->sobrenome . "\n";
// }

// $filtros = new stdClass();
// $filtros->nome = "João";
// $filtros->sobrenome = "Silva";
// teste($filtros);


// COMANDO DE EXECUÇÃO: php funcoes.php
