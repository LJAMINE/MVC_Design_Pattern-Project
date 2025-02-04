<?php 
require_once(__DIR__ . '/../vendor/autoload.php');
use app\controllers\UserController;
$UserController=new UserController();
$UserController->index();