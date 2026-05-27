<?php

class Carro {
    const COMBUSTIVEL = "gasolina";
    private $marca;
    private $modelo;
    private $ano;
    private $carroLigado = false;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function exibirInfo() {
        echo nl2br("Marca: " . $this->marca . "\n");
        echo nl2br("Combustivel: " . self::COMBUSTIVEL . "\n");
        echo nl2br("Modelo: " . $this->modelo . "\n");
        echo nl2br("Ano: " . $this->ano . "\n");
    }

    public function ligarCarro() {
        if(!$this->carroLigado) {
            $this->carroLigado = true;
            echo "O carro está ligado.\n";
        }
    }

    public function desligarCarro() {
        if($this->carroLigado) {
            $this->carroLigado = false;
            echo "O carro está desligado.\n";
        }
    }
}

$carroNovo = new Carro("Toyota", "Corolla", 2020); //instancia novo objeto;
$carroNovo->exibirInfo();
$carroNovo->ligarCarro();

echo "<br>";

