# info_php_26

Básico:
- open folder -> /var/www/html -> login github -> link rep "info_php_26" -> VScode -> git clone (https://github.com/Enzo-Stefano/info_php_26);
- "localhost/" == "/var/www/html/" 

DIA 17/03/26:
- m php, fechar a tag (?>) só se tiver outro tipo de código junto;
- "==" compara o "valor" (ignora o tipo), "===" leva em com-paração o título;
- operadores:
    $resultado = 0;
    $valor1 = 50;
    $valor2 = 200;

    $resultado = $resultado + $valor1; // 50;
    $resultado += $valor1; // 50;
    
    $a = $a + 1;
    $a +=1;
    $a++;
- operadores lógicos:
    && // (and) também funciona
    || // (or) também funciona
    !  (1 != 2)
    ==  (2==2)
    <
    >
    <=
    >=
- Tipos de dados Primitivos
    $numero = 10; // int || integer
    $numero = 10.50; // float, long || Double (Numeric) Decimal
    $numero = "10"; // String
    $numero = '1';// char || character

    // Tipos de dados de estrutura
    // Array || vetor
    $array = [];
    $array = array();
    $objeto = new stdClass(); // objeto ou classe
    $objUsuario = new Usuario();

git flow
- criação da branch dev