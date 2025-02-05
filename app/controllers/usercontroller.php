<?php


namespace app\controllers;

use app\models\Session;
use app\models\User;

class UserController
{

    public function index()
    {
        require_once(__DIR__ . '/../views/homepage.php');
    }
    public function listUser()
    {
        $userModel = new User();
        $users = $userModel->getAllUser();
        require_once(__DIR__ . '/../views/listeUser.php');
    }
    public function displayForm()
    {
        require_once(__DIR__ . '/../views/register.php');
    }
    public function displayFormSignin()
    {
        require_once(__DIR__ . '/../views/signin.php');
    }

    public function create()
    {
        if (isset($_POST["createuser"])) {

            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $role = $_POST["role"];
            $password = $_POST["password"];
            $userModel = new User();
            $users = $userModel->register($first_name, $last_name, $email, $password, $role);
            header('location: index.php?action=formsignin');
        }
    }
    public function signinuser()
    {
        if (isset($_POST["signin"])) {


            $email = $_POST["email"];

            $password = $_POST["password"];
            $userModel = new User();
            $users = $userModel->signin($email, $password);
          
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
        if (isset($_GET["id"])) {
            $id = intval($_GET["id"]); 
        
            $model = new User(); 
            $user = $model->getUser($id); 
        } else {
            die("error.");
        }
        require_once(__DIR__ . '/../views/updateuser.php');
    }

    public function updateUser()
    {
        if (isset($_POST['submit']) && isset($_GET['id'])) {
            $id = $_GET['id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $userUpdated = new User();
            $userUpdated->updateUser($first_name, $last_name, $email,  $role, $id);

            header('Location: index.php?action=liste');
        } else {
            echo "Error: Missing information.";
        }
    }

    public function logout(){
        $newsessions=new Session();
        $newsessions->destroySession();
        header('Location: index.php?action=formsignin');

    }
}
