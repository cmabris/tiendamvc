<?php

class AdminUserController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('AdminUser');
    }

    public function index()
    {
        $data = [
            'titulo' => 'Administración de Usuarios',
            'menu' => false,
            'admin' => true,
            'data' => [],
        ];

        $this->view('admin/users/index', $data);
    }

    public function create()
    {
        $data = [
            'titulo' => 'Administración de Usuarios - Alta',
            'menu' => false,
            'admin' => true,
            'data' => [],
        ];

        $this->view('admin/users/create', $data);
    }

    public function update()
    {
        print 'Modificación de usuarios';
    }

    public function delete()
    {
        print 'Eliminación de usuarios';
    }
}