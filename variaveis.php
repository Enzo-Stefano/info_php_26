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
$nota1 = 10;
$nota2 = 5;
$nota3 = 5;

$media = round( ($nota1 + $nota2 + $nota3)/3, 2) ;

if($media<7){
    $msg = "Reprovado";
}
echo "<br><br>Você foi $msg com a média de $media";

echo "<br><br>";
echo Date("d/m/Y  H:i:s"); // Brasil-sil-sil
echo "<br>";
echo Date("Y-m-d  h:i:s a"); // Gringow