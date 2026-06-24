<?php
// TERMINAR
// CRUD - *Create!, Read, *Update, *Delete

class FuncionarioModel {
    private $banco;
    private $tabela = "funcionario";

    public function __construct(BancoDeDados $banco)
    {
        $this->banco = $banco;
    }

    public function listar()
    {
        $sql = "SELECT * FROM {$this->tabela}";
        return $this->banco->execQuery($sql, "Não foi possivel obter os funcionarios.");
    }

    echo "/pre";
    try {
        $funcionarios = $funcionarioModel->listar();
        print_r($funcionarios);
    } catch (Exception $e) {

    }

    //public function criar()
    //{
    //    $sql = "INSERT INTO {$this->tabela} (nome, sobrenome, salario, cargo, setor, cracha, idPessoa) VALUES( '', '', 0, '', '', '', NULL)";
    //    return $this->banco->execQuery($sql, "Não foi possivel criar o funcionario.");
    //}
}   