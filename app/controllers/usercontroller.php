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

    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $userModel = new User();
            $deleteStatus = $userModel->deleteUser($id);

            if ($deleteStatus) {
                header('Location: index.php?action=liste');
            } else {
                echo "Error.";
            }
        } else {
            echo "Error.";
        }
    }

    public function editAction()
    {
        require_once(__DIR__ . '/../views/updateuser.php');
    }

    public function updateUser()
    {
        if (isset($_POST['submit']) && isset($_GET['id'])) {
            $id = $_GET['id'];  
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $role = $_POST['role'];
    
            $userUpdated = new User();
            $userUpdated->updateUser($first_name, $last_name, $email, $password, $role, $id);
            
            header('Location: index.php?action=liste');
        } else {
            echo "Error: Missing information.";
        }
    }
    
}
