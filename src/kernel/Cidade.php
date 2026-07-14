<?php

class Funcionario {
    private $nome;
    private $populacao;

    public function __construct($nome, $populacao, $setor, $cargo) {
        $this->nome = $nome;
        $this->populacao = $populacao;
        
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getSetor() {
        return $this->setor;
    }

    public function getcargo() {
        return $this->cargo;
    }

    public function info() {
        echo nl2br("Funcionário: " . $this->nome . " \n");
        echo nl2br("Salário: R$" . number_format($this->salario , 2, ',', '.') . " \n");
        echo nl2br("Trabalha no(a) " . $this->setor . " como " . $this->cargo . "\n");
    }
}

$funcionario = new Funcionario("Enzo", 2000, "TI", "Técnico de Infra");
echo $funcionario->info();