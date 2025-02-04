<?php


namespace app\controllers;

use app\models\User;
class UserController{
    
    function index(){
        $userModel = new User();   
        $users = $userModel->getAllUser();
        require_once(__DIR__ . '/../views/homepage.php');
    }
}