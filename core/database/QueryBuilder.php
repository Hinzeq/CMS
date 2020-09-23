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

}