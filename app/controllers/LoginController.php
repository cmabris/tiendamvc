<?php

class LoginController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Login');
    }

    public function index()
    {
        $data = [
            'titulo' => 'Login',
            'menu'   => false,
        ];

        $this->view('login', $data);
    }

    public function olvido()
    {
        print 'Estoy en olvido';
    }

    public function registro()
    {
        $data = [
            'titulo' => 'Registro',
            'menu'   => false,
        ];

        $this->view('register', $data);
    }
}