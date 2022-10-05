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
        $data = [
            'titulo' => 'Administración - Inicio',
            'menu' => false,
            'admin' => true,
            'data' => [],
        ];

        $this->view('admin/index2', $data);
    }
}