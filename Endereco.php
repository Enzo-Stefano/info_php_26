<?php

class Endereco {
    private $rua;
    private $numero;
    private $bairro;
    private $estado;
    private $cep;

    public function __construct($rua, $numero, $bairro, $estado, $cep) {
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->estado = $estado;
        $this->cep = $cep;
    }
}