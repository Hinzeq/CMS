<?php

class QueryBuilder {

    protected $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table) {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function select($table, $where, $item) {
        $statement = $this->pdo->prepare("SELECT * FROM {$table} WHERE $where='{$item}'");
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($table, $parameters) {
        $sql = sprintf(
            'INSERT into %s (%s) VALUES (%s)',
            $table, 
            implode(', ', array_keys($parameters)), 
            ':'.implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function update($table, $parameters, $id) {

        $sql = "UPDATE $table SET ";
        foreach($parameters as $key => $param) {
            $sql = $sql.$key."='".$param."',";
        }
        $sql = rtrim($sql, ",").' WHERE url="'.$id.'"';

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $where, $item) {
        $statement = $this->pdo->prepare("DELETE FROM $table WHERE $where='{$item}'");
        $statement->execute();
    }

}