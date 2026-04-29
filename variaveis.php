<?php
// Mock/Chumbar/Fixar = ler dados usuario
$nome = "Enzo";
$idade= "20 anos";
$sexo = "masculino";
$nomePai = "Andre";
$nomeMae = "Maria";

echo "O Usuario de ".$nome.", ".$idade.", sexo ".$sexo." é filho(a) de: ".$nomePai." e ".$nomeMae."<br><br>";

/**
 * Somar dois valores e exibir o resultado dos mesmos com a frase:
 * A soma dos valores é : SOMA
 * Fazer para todas as operações 
*/

$a = 10;
$b = 2;

$soma = $a + $b;
$subtraçao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;
$modulo = $a % $b;

echo "A soma dos valores $a + $b é : $soma<br>";
echo "A subtração dos valores $a - $b é : $subtraçao<br>";
echo "A multiplicação dos valores $a * $b é : $multiplicacao<br>";
echo "A divisão dos valores $a / $b é : $divisao<br>";
echo "O módulo dos valores $a % $b é : $modulo<br>";


/**
 * Fazer a tabuada do 4 e 5 mas com variavel, ou seja,
 * o usuario informa um número e esse número será usado para a tabuada.
*/
$multiplicador = 1;
$numeroTabuada = 4;
while ($multiplicador<11){
    echo "<br>$numeroTabuada x $multiplicador = " . $numeroTabuada * $multiplicador;
    $multiplicador++;
}
echo "<br>";

$multiplicador = 1;
$numeroTabuada = 5;
while ($multiplicador<11){
    echo "<br>$numeroTabuada x $multiplicador = " . $numeroTabuada * $multiplicador;
    $multiplicador++;
}


/*
 *Calcule area de um quadrado 
*/
$lado1 = 10;
$lado2 = 10;
$area = $lado1 * $lado2; 
$area = $lado1**2; //potenciacao
$area = pow($lado1, 2); //potenciacao
echo "<br><br>A area de um quadrado de lados $lado1 e $lado2 é de: $area";


/*
 *Calcule area de um triangulo equilatero 
*/
$base = 10;
$altura = 10;
$area = ($base * $altura)/2; 
echo "<br>A area de um triangulo equilatero de base $base e altura $altura é de: $area";


/**
 * Ler um número informado pelo usuário e exibir se o número é par ou ímpar.
 * Dica: operador modulo % e IF ELSE
*/
$numero = 0;
$msg = "impar";
if($numero%2==0){$msg = "par";}
echo "<br><br>$numero é $msg";

/**
 * Obter nota do 1° bimestre;
 * Obter nota do 2° bimestre;
 * Obter nota do 3° bimestre;
 * Calcular média (>=7 para aprovar);
 * Informar "Aprovado" ou "Reprovado" + média obtida;
*/
$msg = "Aprovado";
$nota1 = 15;
$nota2 = 10;
$nota3 = 6;
$media = ($nota1 + $nota2 + $nota3)/3;
$mediaArredondada = round($media, 2);

if($media<7){
    $msg = "Reprovado";
}
echo "<br><br>Você foi $msg<br>Médias:<br>Normal: $mediaArredondada";

/**
 * Nota do Aluno média harmônica
*/
$mediaHarmonica = 3/((1/$nota1)+(1/$nota2)+(1/$nota3));
echo "<br>Harmônica: ". round($mediaHarmonica, 2);
/**
 * Nota do Aluno média ponderada
*/
$peso1 = 10;
$peso2 = 10;
$peso3 = 10;
$mediaPonderada =(($nota1*$peso1)+($nota2*$peso2)+($nota3*$peso3))/($peso1 + $peso2 + $peso3);
echo "<br>Ponderada: " . round($mediaPonderada, 2). "<br>";

// LOOPS
echo "FOR:";
$numerador;
$multiplicador;
for($numerador=1;$numerador<=10;$numerador++){
    echo "<br><br>Tabuada do $numerador:";
    for($multiplicador=1;$multiplicador<=10;$multiplicador++){
        echo "<br>$numerador x $multiplicador = ". $numerador*$multiplicador;
    }
}

echo "<br><br>WHILE:";
$numerador = 1;
$multiplicador = 0;
while($multiplicador <= 10){
    echo "<br>$numerador x $multiplicador = ". $numerador*$multiplicador;
    $multiplicador++;
    if($multiplicador > 10){
        echo "<br>";
        $numerador++;
        $multiplicador = 0;
    }
    if($numerador>10){
        break;
    }
}

echo "<br><br>DO_WHILE:";
$numerador = 4;
$multiplicador = 0;
do{
    echo "<br>$numerador x $multiplicador = ". $numerador*$multiplicador;
    $multiplicador++;
}while($multiplicador <= 10);

// Listar 10 primeiros números pares
$numero = 0;
$contador = 1;
echo "<br><br>Primeiros 10 pares:";
while($contador <= 10){
    if($numero % 2 == 0 && $numero > 0){
        echo "<br>$contador º- $numero;";
        $contador++;
    }
    $numero++; 
}

// EXERCICIOS de REVISAO AULA 14/04/2026.
/**
 * Calcular IMC(Indice de Massa Corporal) de uma pessoa e
 * exibir os valores utilizados no calculo assim como o seu IMC.
 * Saída esperada: O IMC é: 123
 */

$peso = 75;
$altura = 1.75;
$IMC = $peso/$altura**2;
$IMC = round($IMC, 2);
echo "<br><br>Peso: $peso<br>Altura: $altura M<br>IMC = $IMC";

/**
 * Calcular quantos segundos tem em 2 horas e 30 minutos e exibir o valor.
 *
 * Dica: converter tudo para uma mesma medida (segundos) para facilitar o calculo.
 *
 * Saída esperada: O Total em segundos é: 9000.
 */
$hora = 2;
$minuto = 30;
$segundos = $hora*3600 + $minuto*60;
echo "<br><br>Em $hora horas(s) e $minuto minuto(s)<br>O Total em segundos é: $segundos";

/**
 * jogo futebol
 */
$tempoJogoMinutos = 90;


/**
 * Simular o funcionamento de uma calculadora com as duas estruturas lógicas:
 * Switch Case e IF ELSE IF ELSE. Não é necessário o ZERAR, somente o calculo.
 * Operadores: + - * /
 *
 * Dica: utilizar 4 variáveis, uma delas vai ser $operador a outra $resultado.
 */

$numero1 = 1;
$numero2 = 2;
$operador = '/';
$resultado;
switch($operador){
    case '+':
        $resultado = $numero1 + $numero2;
        echo "<br><br>$resultado";
        break;
    case '-':
        $resultado = $numero1 - $numero2;
        echo "<br><br>$resultado";
        break;
    case '*':
        $resultado = $numero1 * $numero2;
        echo "<br><br>$resultado";
        break;
    case '/':
        $resultado = $numero1 / $numero2;
        echo "<br><br>$resultado";
        break;
}

/**
 * Exibir os numeros em ordem DECRESCENTE(Maior para Menor - DESC) de 10 - 0.
 *
 * Dica: utilizar laçoes de repetição(loops) FOR e WHILE
 *
 * Saída esperada: 10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0.
 */
$numero = 10;
$saida = "<br>";
while($numero>=0){
    if($numero == 0){
        $saida = $saida . " $numero.";
    }else{
        $saida = $saida . " $numero,";
    }
    $numero--;
}
echo $saida;

/**
 * Calcular o fatorial de um numero qualquer.
 * Ex.: calcular o fatorial de 5 (5!).
 *
 * Dica: 5 x 4 x 3 x 2 x 1. utilizar laçoes de repetição(loops) FOR e WHILE
 *
 * Saída esperada: o fatorial de 5 é: 120.
 */

$numero = 5;
$resultado = 1;
for ($i = $numero; $i>0; $i--) {
    $resultado *= $i;
}
echo "<br>o fatorial de $numero é: $resultado";

/**
 * Com base no exercicio de:
 * Listar os 10 primeiros numeros pares com laçoes de repetição(loops) utilizando FOR e WHILE.
 *
 * Encontrar os 5 primeiros numeros Primos.
 *
 * Dica: Utilizar calculo dos pares, sendo que o unico primo par é o 2.
 *
 * Saída esperada: Os 5 primeiros Primos são: 3, 5, 7, 11, 13
 */

$posicao = 5;
$saida = "<br>Os $posicao primeiros Primos são: ";
$numero = 3;
while($posicao > 0){
    $divisor = 2;
    $verificador = 0;
    while($divisor<$numero){
        if($numero % $divisor == 0){
            $verificador++;
            break;
        }
        $divisor++;
    }
    if($verificador == 0){
        $saida = $saida . " $numero";
        if($posicao>1){
            $saida .= ",";
        }
        $posicao--;
    }
    $numero++;
}
echo $saida;

/**
 * Calcular o tempo de duração de um jogo de futebol.
 * Considerando que um jogo pode começar em um dia e terminar no outro.
 * Ex.: 23:30 - 01:00
 * 
 * Dica: converter tudo para uma mesma medida (segundos) para facilitar o cálculo.
 * 
 * Saída esperada: O tempo de duração do jogo é: 90 minutos.
 */

$horaInicio = "14:30:00";
$duracaoJogoMinutos = 90;
$acrescimos = 5;
$tempoArray = explode (":", $horaInicio);

$horas = $tempoArray[0];
$minutos = $tempoArray[1];
$segundos = $tempoArray[2];

$minutos += $horas * 60;
$minutos += $duracaoJogoMinutos + $acrescimos;
$horas = (int)($minutos/60);

if($horas >= 24){
    $horas-=24;
}
$minutos %= 60;
$minutos = str_pad($minutos, 2, "0", STR_PAD_LEFT);
$horas = str_pad($horas, 2, "0", STR_PAD_LEFT);
$horaFinal = "$horas:$minutos:$segundos";

echo "<br>O horário de término da partida é: $horaFinal.";

echo "<br><br>";
echo Date("d/m/Y  H:i:s"); // Brasil-sil-sil
echo "<br>";
echo Date("Y-m-d  h:i:s a"); // Gringow