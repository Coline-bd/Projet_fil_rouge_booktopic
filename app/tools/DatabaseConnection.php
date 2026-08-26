<?php 

namespace Tools;
use PDO;

class DatabaseConnection{
    private ?PDO $database=null;

    public function getConnection(){
        if ($this->database === null) {
            $this->database = new PDO('mysql:host=' . BDD_URL . ';dbname=' . BDD_NAME, 
        BDD_USERNAME, 
        BDD_PASSWORD, 
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }
    return $this->database;
    }
}
