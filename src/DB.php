<?php

namespace App;

use App\Models\Post;
use PDO;
use PDOException;
use stdClass;

class DB {
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("sqlite:db.sqlite");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function all(string $table, string $className){
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
      
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $className);
        return $stmt->fetchAll();
    }
}