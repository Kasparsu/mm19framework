<?php

namespace App;

class DB
{
    private $conn;

    public function __construct($connData) {
        $this->conn = new \PDO($connData);
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function all($tableName) {
        $stmt = $this->conn->prepare("SELECT * FROM $tableName");
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(\PDO::FETCH_CLASS, \stdClass::class);
        return $stmt->fetchAll();
    }
}