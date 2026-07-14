<?php

class Pessoa 
{
    private ?int $id = null;
    private string $nome;
    private int $idade;
    private string $telefone;
    private string $cpf;
    private string $cnpj;
    private char $tipoPessoa;
    private 


    private Endereco $endereco;

    public function __construct($nome, $idade, $telefone, $endereco) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }
    public function resetarPessoa() {
        $this->nome = "";
        $this->idade = "";
        $this->telefone = "";
        $this->endereco = new Endereco("", "", "", "", "", ""); // Resetando o endereço para um objeto vazio
    }

    public function validarNome() {
        if (empty($this->nome)) {
            return false;
        }

        return true;    
    }

    public function validarIdade() {
        $idadeInvalida = !is_numeric($this->idade) || $this->idade < 0 || $this->idade > 200;

        if ($idadeInvalida) {
            return false;
        }

        return true;
    }

    public function validarTelefone() {
        $telefoneInvalido = empty($this->telefone);

        if ($telefoneInvalido) {
            return false;
        }

        return true;
    }

    public function validarEndereco() {
        $naoEhndereco = empty($this->endereco) || !($this->endereco instanceof Endereco);

        if ($naoEhndereco) {
            return false;
        }
        return true;
    }

    public function validarCNPJ($cnpj) {
       $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);
	
        // Valida tamanho
        if (strlen($cnpj) != 14){
            return false;
        }
        // Verifica se todos os digitos são iguais
        if (preg_match('/(\d)\1{13}/', $cnpj)){
            return false;	
        }
        // Valida primeiro dígito verificador
        for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++){
            $soma += $cnpj[$i] * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;

        if ($cnpj[12] != ($resto < 2 ? 0 : 11 - $resto)){
            return false;
        }
        // Valida segundo dígito verificador
        for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++){
            $soma += $cnpj[$i] * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }
        $resto = $soma % 11;

        return $cnpj[13] == ($resto < 2 ? 0 : 11 - $resto);
    }
    
    public function validarPessoa() {
        return $this->validarNome() && $this->validarIdade() && $this->validarTelefone() && $this->validarEndereco();
    }
}