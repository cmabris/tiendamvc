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
        $data = [];
        $this->view('login', $data);
    }

    /*public function metodoVariable()
    {
        if (func_num_args() > 0) {
            for ($i = 0; $i < func_num_args(); $i++) {
                print func_get_arg($i) . '<br>';
            }
        } else {
            print 'No hay argumentos.<br>';
        }
    }

    public function metodoFijo($arg1 = "Uno", $arg2 = "Dos", $arg3 = "Tres")
    {
        print $arg1 . '<br>';
        print $arg2 . '<br>';
        print $arg3 . '<br>';
    }*/


}