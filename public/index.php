<?php
session_start();
require_once(__DIR__ . '/../vendor/autoload.php');

use app\controllers\UserController;

$UserController = new UserController();

$action = isset($_GET['action']) ? trim($_GET['action']) : 'register';

switch ($action) {
    case 'liste':
        $UserController->listUser();
        break;
    case 'register':
        $UserController->displayForm();
        break;
    case 'formsignin':
        $UserController->displayFormSignin();
        break;
    case 'signin':
        $UserController->signinuser();
        break;
    case 'create':
        $UserController->create();
        break;
    case 'delete':
        $UserController->delete();
        break;
    case 'edit':
        $UserController->editAction();
        break;
    case 'update':
        $UserController->updateUser();
        break;
    case 'home':
        $UserController->index();
        break;
        default:
        echo "<h2 style='color: red; text-align: center;'>Page non trouvée !</h2>";
        echo "<p style='text-align: center;'>L'action demandée n'existe pas. Veuillez vérifier l'URL et réessayer.</p>";
        break;
}
?>
