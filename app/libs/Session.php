<?php

class Session
{
    private $login = false;
    private $user;

    public function __construct()
    {
        session_start();

        if (isset($_SESSION['user'])) {
            $this->user = $_SESSION['user'];
            $this->login = true;
        } else {
            unset($this->user);
            $this->login = false;
        }
    }

    public function login($user)
    {
        if ($user) {
            $this->user = $user;
            $_SESSION['user'] = $user;
            $this->login = true;
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        unset($this->user);
        session_destroy();
        $this->login = false;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getUser()
    {
        return $this->user;
    }
}