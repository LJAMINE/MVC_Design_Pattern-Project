<?php 
require_once(__DIR__ . '/../vendor/autoload.php');
use app\controllers\UserController;
$UserController=new UserController();


if (isset($_GET['action'])) {
    $action = trim($_GET['action']);
    switch ($action) {
        case 'liste':
            $UserController->index();
            break;
        case 'displayForm':
            $UserController->displayForm();
            break;
        case 'create':
            echo "pabe index";
            $UserController->create();
            break;
        // case 'store':
        //     storeAction();
        // case 'destroy':
        //     destreyAction();
        //     break;
        // case 'delete':
        //     deleteAction();
        // case 'edit':
        //     editAction();
        //     break;
        // case 'updet':
        //     updetAction();
        default:
            echo 'Action non reconnue.';
            break;
    }
}