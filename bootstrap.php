<?php

require_once "conexao.php"; // GB
require_once "BancoDeDados.php";
require_once "FuncionarioModel.php";
require_once "CidadeModel.php";

$banco = new BancoDeDados($conexao);
$funcionarioModel = new FuncionarioModel($banco);
$cidadeModel = new CidadeModel($banco);
