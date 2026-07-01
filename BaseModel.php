<?php
// CRUD - Create, Read, Update, Delete
/*
class BaseModel {
    private $banco;

    public function listar($tabela, $filtros = [], $limite = 20, $offset=0) {
        $sql = "SELECT * FROM {$tabela}";

        if (!empty($filtros)) {
            $where = [];

            foreach ($filtros as $campo => $valor) {
                $where[] = "$campo = '$valor'";
            }
            
            $sql .= " WHERE " . implode(" AND ", $where);
            
        }
        $sql .= " LIMIT $limite OFFSET $offset";

        return $this->banco->execQuery($sql, "Não foi possivel obter os funcionarios.");
    }



    public function listarPorId($tabela, $id) {
        $sql = "SELECT * FROM {$tabela} WHERE id = $id LIMIT 1";
        
        if (!empty($filtros)) {
            $where = [];
            
            foreach ($filtros as $campos => $valor) {
                $where[] = "$campo = '$valor'";
            }
            $sql .= " WHERE " . implode(" AND ", $where);
        }

        return $this->banco->execQuery($sql, "Não foi possível obter os funcionários.");
    }



    public function excluir($id) {
        $sql = "DELETE FROM {$this->tabela} WHERE id = $id";
        return $this->banco->execQuery($sql, "Não foi possivel excluir o funcionario.");
    }



    public function criar($dados) {
        $campos = implode(", ", array_keys($dados));
        $valores = implode("', '", array_values($dados));

        $sql = "INSERT INTO {$this->tabela} ($campos) VALUES ('$valores')";

        return $this->banco->execQuery($sql, "Não foi possivel criar o funcionario.");
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
*/