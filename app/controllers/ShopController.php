<?php

class ShopController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Shop');
    }

    public function index()
    {
        $data = [
            'titulo' => 'Bienvenid@ a nuestra tienda',
            'menu' => false,
        ];
        $this->view('shop/index', $data);
    }
}