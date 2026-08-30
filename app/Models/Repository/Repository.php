<?php

namespace Models\Repository;

use Tools\DatabaseConnection;

class Repository{
    private DatabaseConnection $connection;

    //construct
    public function __construct(DatabaseConnection $connection)
    {
        $this->connection = $connection;
    }

    public function getDatabase(){
        return $this->connection;
    }

    public function setDatabase(DatabaseConnection $database){
        $this->connection=$database;
    }
}