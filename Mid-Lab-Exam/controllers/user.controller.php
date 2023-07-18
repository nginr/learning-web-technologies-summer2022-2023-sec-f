<?php

require_once '../models/users.model.php';

class UserController
{
    private $userModel;
    private $usersInfo;

    public function __construct()
    {
        $this->userModel = new UsersModel('../models/users.model.txt');
        $this->usersInfo = $this->userModel->getUsers();
    }

    public function authenticate($id, $psw)
    {
        $currentuser = $this->getUserInfo($id);
        if ($currentuser['password'] == $psw) {
            return true;
        }
        return false;
    }

    public function registerUser($id, $password, $name, $type)
    {
        if ($this->getUserInfo($id) == null) {
            if ($this->userModel->appendUser($id, $password, $name, $type) == true) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getUserInfo($id)
    {
        foreach ($this->usersInfo as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }

    public function getUsers()
    {
        return $this->usersInfo;;
    }
}
