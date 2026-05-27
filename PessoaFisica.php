<?php

class PessoaFisica extends Pessoa {
    private $cpf;

    public function __construct($nome, $idade, $telefone, Endereco $endereco, $cpf) {
        parent::__construct($nome, $idade, $telefone, $endereco);
        $this->cpf = $cpf;
    }

}

$pessoaFisica = new PessoaFisica("Enzo", 21, "5554 9 9999-9999", "Tr. Tal", "000.000.000-00");