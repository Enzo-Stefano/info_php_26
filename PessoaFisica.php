<?php

class PessoaFisica extends Pessoa {
    private $cpf;

    public function __construct($nome, $idade, $telefone, Endereco $endereco, $cpf) {
    parent::__construct($nome, $idade, $telefone, $endereco);
    $this->cpf = $cpf;

    
    public function validarCPF($cpf) {
        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }

            $d = ((10 * $d) % 11) % 10;

            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }
    
    if (!$this->validarCPF($cpf)) {
        throw new InvalidArgumentException("CPF inválido");
    }
}

$pessoaFisica = new PessoaFisica("Enzo", 21, "5554 9 9999-9999", "Tr. Tal", "000.000.000-00");