<?php

$listaValores = array(); //array vazio
$listaValores = []; //array vazio

$listaValores = [10, 20, 3, 50];
//                0,  1,  2, 3
$tamanhoLista = count($listaValores); // 4

for($i = 0; $i < $tamanhoLista; $i++){
    echo "$listaValores[$i]<br>"; //10
}
print_r($listaValores);

/**
 * Somar dois vetores e exibir o resultado.
 * Exemplo:
 * $vetor1 = [1, 2, 3];
 * $vetor2 = [4, 5, 6];
 * $resultado = [5, 7, 9];
 */
$vetor1 = [1, 2, 3];
$vetor2 = [4, 5, 6];
$resultado = [];

$tamanhoLista = count($vetor1);

echo "<br><br>Resultado: [";
for($i = 0; $i < $tamanhoLista; $i++){

    $resultado[$i] = $vetor1[$i] + $vetor2[$i];
    echo $resultado[$i];
    
    if($i<($tamanhoLista-1)){
        echo ", ";
    };
}
echo "]";

echo "<br><br>";
echo Date("d/m/Y  H:i:s"); // Brasil-sil-sil
echo "<br>";
echo Date("Y-m-d  h:i:s a"); // Gringow