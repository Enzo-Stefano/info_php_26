<?php
// CRUD - Create, Read, Update, Delete

class CidadeModel {
    private $banco;
    private $tabela = "cidades";

    public function __construct(BancoDeDados $banco)
    {
        $this->banco = $banco;
    }

    public function listar($filtros = [], $limite = 20, $offset=0) {
        $sql = "SELECT * FROM {$this->tabela}";

        if (!empty($filtros)) {
            $where = [];

            foreach ($filtros as $campo => $valor) {
                $where[] = "$campo = '$valor'";
            }
            
            $sql .= " WHERE " . implode(" AND ", $where);
            /**
             * SELECT * FROM funcionario WHERE nome  = 'Ariel' AND sobrenome = 'Silva';
             */
        }

        $sql .= " LIMIT $limite OFFSET $offset";

        return $this->banco->execQuery($sql, "Não foi possivel obter as cidades.");
    }

    public function listarPorId($id){
        $sql = "SELECT * FROM {$this->tabela} WHERE id = $id LIMIT 1";
        
        if (!empty($filtros)) {
            $where = [];
            
            foreach ($filtros as $campos => $valor) {
                $where[] = "$campo = '$valor'";
            }

            $sql .= " WHERE " . implode(" AND ", $where);
        }

        return $this->banco->execQuery($sql, "Não foi possível obter as cidades.");
    }
    
    public function excluir($id)
    {
        $sql = "DELETE FROM {$this->tabela} WHERE id = $id";

        return $this->banco->execQuery($sql, "Não foi possivel excluir a cidade.");
    }

    public function criar($dados) {

        $campos = implode(", ", array_keys($dados));
        $valores = implode("', '", array_values($dados));

        $sql = "INSERT INTO {$this->tabela} ($campos) VALUES ('$valores')";

        return $this->banco->execQuery($sql, "Não foi possivel criar a cidade.");
    }

    public function atualizar($id, $dados) {
        $set = [];

        foreach ($dados as $campo => $valor) {
            $set[] = "$campo = '$valor'";
        }

        $setString = implode(", ", $set);

        $sql = "UPDATE {$this->tabela} SET $setString WHERE id = $id";

        return $this->banco->execQuery($sql, "Não foi possivel atualizar o funcionario.");
    }
}