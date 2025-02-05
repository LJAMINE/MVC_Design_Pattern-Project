<?php

namespace app\models;

class Session
{


    public function setUserSession($id, $first_name, $last_name, $email, $role)
    {
        $_SESSION["user_id"] = $id;
        $_SESSION["first_name"] = $first_name;
        $_SESSION["last_name"] = $last_name;
        $_SESSION["email"] = $email;
        $_SESSION["role"] = $role;
    }

    public function getUserSession()
    {
        return isset($_SESSION["user_id"]) ? $_SESSION : null;
    }
    public function getRole()
    {
        return isset($_SESSION["role"]) ? $_SESSION : null;
    }

    public function destroySession()
    {
        session_unset();
        session_destroy();
    }

    public function isUserLoggedIn()
    {
        return isset($_SESSION["user_id"]);
    }
}
