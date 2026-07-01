<?php

/**
 * Exercício: Criar um sistema que calcule o aumento de salário de um funcionário
 * e os descontos do INSS e do IRPF, considerando as seguintes regras:
 * - O aumento de salário é de 10% para salários até R$1.999.
 * - O aumento de salário é de 3% para salários acima de R$2.000.
 * - O desconto do INSS é de 11% para salários acima de R$ 3.000.
 * - O desconto do IRPF é de 0% para salários até R$ 1.500.
 * - O desconto do IRPF é de 22.5% para salários acima de R$ 4.500.
 * Utilizar como exemplo o sistema da calculadora no terminal,
 * onde o usuário irá digitar o salário do funcionário e o sistema irá exibir o
 * salário atualizado com os descontos aplicados.
 * Dica: Utilizar a função number_format() para formatar o salário com duas casas decimais
 * e o símbolo de moeda.
 */

$salarioBruto = readline("Digite o salário bruto do funcionário: ");
executar($salarioBruto);

function executar($salarioBruto){
    echo "R$". $salarioBruto .",00\n";
    $opcao = menu();

    $aumento = aumentos($salarioBruto);
    $descontoINSS = descontosINSS($salarioBruto);
    $descontoINFP = descontoIRFP($salarioBruto);
    $salarioAtualizado = $salarioBruto + $aumento - $descontoINSS - $descontoINFP;

    opcoes($opcao, $salarioBruto, $aumento, $descontoINSS, $descontoINFP, $salarioAtualizado);
    RepetirOperacao($salarioBruto);
}

function RepetirOperacao($salarioBruto){
    do{
        echo "\nDeseja realizar outra operação? (s/n): ";
        $resposta = readLine();
        if($resposta != 'N' && $resposta != 'n' && $resposta != 'S' && $resposta != 's'){
            echo "\nResposta inválida, tente novamente...";
        };
    }while($resposta != 'N' && $resposta != 'n' && $resposta != 'S' && $resposta != 's');
    if($resposta == 'S'|| $resposta == 's'){
        executar($salarioBruto);
    }
}

function menu(){
    echo "Escolha a opção: \n";
    echo "1. Exibir valor de aumentos. \n";
    echo "2. Exibir valor de descontos. \n";
    echo "3. Exibir comparação de valores de salário bruto e atualizado. \n";
    echo "4. Exibir Contra-Cheque. \n\n";
    return readline();
}

function opcoes($opcao, $salarioBruto, $aumento, $descontoINSS, $descontoINFP, $salarioAtualizado){
    switch($opcao){
        case '1':
            echo "Aumento: R$". $aumento ."\n";
            return 0;
        case '2':
            echo "Descontos: \nINSS: R$". $descontoINSS ."\nIRFP: R$". $descontoINFP ."\n";
            return 0;
        case '3':
            echo "Salário Bruto: R$". $salarioBruto ."\nSalário Atualizado: R$". $salarioAtualizado ."\n";
            return 0;
        case '4':
            echo "CONTRA-CHEQUE:\n";
            echo "Salário Bruto:\t\tR$". $salarioBruto ."\n";
            echo "Aumento:\t\t+ R$". $aumento ."\n";
            echo "Descontos: \nINSS:\t\t\t- R$". $descontoINSS ."\nIRFP:\t\t\t- R$". $descontoINFP ."\n";
            echo"Salário Atualizado:\tR$". $salarioAtualizado."\n\n";
            return 0;
        default:
            return "Operação inválida!\n";
    }
}

function aumentos($salarioBruto){
    if($salarioBruto<2000){
        $valorAumento = $salarioBruto*0.1;
    }else{
        $valorAumento = $salarioBruto*0.03;
    }

    return $valorAumento;
}

function descontosINSS($salarioBruto){
    if($salarioBruto<3000){
        $valorDescontoINSS = $salarioBruto*0.11;
    }

    return $valorDescontoINSS;
}

function descontoIRFP($salarioBruto){
    if($salarioBruto<4500){
        $valorDescontoIRFP = $salarioBruto*0.225;
    }

    return $valorDescontoIRFP;
}
