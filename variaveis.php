<?php
// Mock/Chumbar/Fixar = ler dados usuario
$nome = "Enzo";
$idade= "20 anos";
$sexo = "masculino";
$nomePai = "Andre";
$nomeMae = "Maria";

echo "O Usuario de ".$nome.", ".$idade.", sexo ".$sexo." é filho(a) de: ".$nomePai." e ".$nomeMae."<br>";
echo "<br>";

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

echo "<br>";
echo Date("d/m/Y  H:i:s"); // Brasil-sil-sil
echo "<br>";
echo Date("Y-m-d  h:i:s a"); // Gringow