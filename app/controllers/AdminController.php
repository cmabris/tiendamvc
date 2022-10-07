<?php

class AdminController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Admin');
    }

    public function index()
    {
        $data = [
            'titulo' => 'Administración',
            'menu' => false,
            'data' => [],
        ];

        $this->view('admin/index', $data);
    }

    public function verifyUser()
    {
        $errors = [];
        $dataForm = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $user = $_POST['user'] ?? '';
            $password = $_POST['password'] ?? '';

            $dataForm = [
                'user' => $user,
                'password' => $password,
            ];
            if(empty($user)) {
                array_push($errors, 'El usuario es requerido');
            }
            if(empty($password)) {
                array_push($errors, 'La contraseña es requerida');
            }

            if ( ! $errors ) {

                $errors = $this->model->verifyUser($dataForm);

                if ( ! $errors ) {

                    $session = new Session();
                    $session->login($dataForm);

                    header("LOCATION:" . ROOT . 'AdminShop');
                }

            }

        }

        $data = [
            'titulo' => 'Administración - Inicio',
            'menu' => false,
            'admin' => false,
            'errors' => $errors,
            'data' => $dataForm,
        ];

        $this->view('admin/index', $data);

    }
}