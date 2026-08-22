<?php 

function connect_db(){
    return new PDO( 
    'mysql:host=' . BDD_URL . ';dbname=' . BDD_NAME, 
    BDD_USERNAME, 
    BDD_PASSWORD, 
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] 
    ); 
} 