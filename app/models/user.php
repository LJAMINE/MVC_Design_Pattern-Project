<?php

namespace app\models;

use app\Config\Database;
use PDO;
use app\models\Session; 

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

    public function register($first_name, $last_name, $email, $password, $role)
    {
        $query = "SELECT email from users where email=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            return;
        }
        $passwordHashed = password_hash($password, PASSWORD_DEFAULT);


        $query = "INSERT INTO users (first_name,last_name,email,password,role) VALUES(?,?,?,?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$first_name, $last_name, $email, $passwordHashed, $role]);
    }
    public function signin($email, $password)
    {
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $session = new Session();
            $session->setUserSession($user["id"], $user["first_name"], $user["last_name"], $user["email"], $user["role"]);

            if ($user["role"] === "admin") {
                header("Location: index.php?action=liste");
            } elseif ($user["role"] === "student") {
echo "student";
            } else {
                echo "teahcer";
            }
            exit();
        } else {
            echo "Erreur : Email ou mot de passe incorrect.";
        }
    }
    public function deleteUser($id)
    {
        $query = "DELETE FROM users WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$id]);
    }

    public function updateUser($first_name, $last_name, $email, $role, $id)
    {
        $query = "UPDATE users SET first_name=?,last_name=?,email=?,role=? WHERE id=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$first_name, $last_name, $email,  $role, $id]);
    }
    public function getUser($id)
    {

        $query = "SELECT * from users where id =?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
