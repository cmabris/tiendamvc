<?php

class CartController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Cart');
    }

    public function addProduct($product_id, $user_id)
    {
        var_dump($product_id, $user_id);
    }
}