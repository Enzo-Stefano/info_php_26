<?php

$conexao = mysqli_connect("localhost", "aluno", "1234", "info_php_26");
/* "ip/site", "user", "senha", "nome_banco", "porta(se oculto = porta padrão)" */
//PHP_EOL == \n || <br/>
if(!$conexao) {
    echo "Erro: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
}