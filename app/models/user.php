<?php

 namespace app\models;
 
use app\Config\Database;
use PDO;
 class User{
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $role;
    public $db;

    public function __construct()
    {
        $this->db=Database::connect();
    }
    public function getAllUser() {
        $query = "SELECT * FROM users";  
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
 }
 
 
 
 
 
 ?>