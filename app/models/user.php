<?php

namespace app\models;

use app\Config\Database;
use PDO;

class User
{
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $role;
    public $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }
    public function getAllUser()
    {
        $query = "SELECT * FROM users order by id desc";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function createUser($first_name, $last_name, $email, $password, $role)
    {
        $query = "INSERT INTO users (first_name,last_name,email,password,role) VALUES(?,?,?,?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$first_name, $last_name, $email, $password, $role]);
    }
    public function deleteUser($id)
    {
        $query = "DELETE FROM users WHERE id = ?";
        $stmt = $this->db->prepare($query);
            return $stmt->execute([$id]);
    }

    public function updateUser($first_name, $last_name, $email, $password, $role,$id){
        $query = "UPDATE users SET first_name=?,last_name=?,email=?,password=?,role=? WHERE id=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$first_name, $last_name, $email, $password, $role,$id]);

    }
    public function getUser($id)
    {
        
        $query = "SELECT * from users where id =?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

}
