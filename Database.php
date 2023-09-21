<?php

class Database
{
    public $connection;

    public function __construct()
    {
        // connect to our Mysql database
        $dsn = "mysql:host=localhost;port=3306;dbname=demo;user=root;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        //fetch or fecth all


        return $statement;
    }
}

