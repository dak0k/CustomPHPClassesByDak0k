<?php

namespace src\Classes;

class Database {
    private $connection;


    /**
     * @param mixed $host
     * @param mixed $username
     * @param mixed $password
     * @param mixed $database
     * @return void
     */
    public function __construct($host, $username, $password, $database) {
        $this->connection = new mysqli($host, $username, $password, $database);
        if ($this->connection->connect_error) {
            die("Ошибка подключения к базе данных: " . $this->connection->connect_error);
        }
    }

    /**
     * @param mixed $sql
     * @return mixed
     */
    public function query($sql) {
        return $this->connection->query($sql);
    }

    /**
     * @return void
     */
    public function close() {
        $this->connection->close();
    }
}
