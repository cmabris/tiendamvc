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
        $session = new Session();

        if ($session->getLogin()) {

            $mostSold = $this->model->getMostSold();
            $news = $this->model->getNews();

            $data = [
                'titulo' => 'Bienvenid@ a nuestra tienda',
                'menu' => true,
                'subtitle' => 'Artículos mas vendidos',
                'data' => $mostSold,
                'subtitle2' => 'Artículos nuevos',
                'news' => $news,
            ];
            $this->view('shop/index', $data);
        } else {
            header('location:' . ROOT);
        }

    }

    public function logout()
    {
        $session = new Session();
        $session->logout();
        header('location:' . ROOT);
    }

    public function show($id)
    {
        $product = $this->model->getProductById($id);

        $data = [
            'titulo' => 'Detalle del producto',
            'menu' => true,
            'subtitle' => $product->name,
            'errors' => [],
            'data' => $product,
        ];

        $this->view('shop/show', $data);
    }
}