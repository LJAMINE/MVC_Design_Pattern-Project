<?php


namespace app\controllers;

use app\models\User;

class UserController
{

    public function index()
    {
        $userModel = new User();
        $users = $userModel->getAllUser();
        require_once(__DIR__ . '/../views/homepage.php');
    }
    public function displayForm()
    {
        require_once(__DIR__ . '/../views/creatuser.php');
    }

    public function create()
    {


        if (isset($_POST["createuser"])) {
            echo "hhh";
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $role = $_POST["role"];
            $password = $_POST["password"];
            $userModel = new User();
            $users = $userModel->createUser($first_name, $last_name, $email, $password, $role);
            header('location: index.php?action=liste');
        } 
    }
}