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

echo "<br><br>";
echo Date("d/m/Y  H:i:s"); // Brasil-sil-sil
echo "<br>";
echo Date("Y-m-d  h:i:s a"); // Gringow