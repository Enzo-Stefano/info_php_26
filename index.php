<?php

require_once "bootstrap.php";

echo "<pre>";
try {
    /*
    $dados = [
        "nome" => "Enzo",
        "sobrenome" => "Massutti",
        "salario" => 2000,
        "cargo" => "Tecnico TI",
        "setor" => "TI",
        "cracha" => "11111",
        "idPessoa" => 5,
    ];

    $idFuncionario = $funcionarioModel->criar($dados);
    $funcionarios = $funcionarioModel->listarPorId($idFuncionario);
    print_r($funcionarios);
    */

    
    $dados = [
        "nome" => "Garibaldi",
        "populacao" => 300,
        "idEstado" => 1,
    ];

    $idCidade = $cidadeModel->criar($dados);
    $cidades = $cidadeModel->listarPorId($idCidade);
    print_r($cidades);


} catch (Exception $e) {
    echo $e->getMessage();
}