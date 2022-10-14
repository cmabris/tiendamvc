<?php

class AdminProductController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('AdminProduct');
    }

    public function index()
    {
        $session = new Session();

        if ($session->getLogin()) {

            $products = $this->model->getProducts();
            $type = $this->model->getConfig('productType');

            $data = [
                'titulo' => 'Administración de Productos',
                'menu' => false,
                'admin' => true,
                'type' => $type,
                'products' => $products,
            ];

            $this->view('admin/products/index', $data);

        } else {
            header('location:' . ROOT . 'admin');
        }
    }

    public function create()
    {
        $errors = [];
        $dataForm = [];
        $type = $this->model->getConfig('productType');
        $status = $this->model->getConfig('productStatus');
        $catalogue = $this->model->getCatalogue();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $type = $_POST['type'] ?? '';
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $price = $_POST['price'] ?? '';
            $discount = $_POST['discount'] ?? '';
            $send = $_POST['send'] ?? '';
            $image = $_FILES['image']['name'];
            $published = $_POST['published'] ?? '';
            $relation1 = $_POST['relation1'] != '' ? $_POST['relation1'] : 0;
            $relation2 = $_POST['relation2'] != '' ? $_POST['relation2'] : 0;
            $relation3 = $_POST['relation3'] != '' ? $_POST['relation3'] : 0;
            $mostSold = $_POST['mostSold'] ?? '';
            $new =$_POST['new'] ?? '';
            $status = $_POST['status'] ?? '';
            //Books
            $author = $_POST['author'] ?? '';
            $publisher = $_POST['publisher'] ?? '';
            $pages = $_POST['pages'] ?? '';
            //Courses
            $people = $_POST['people'] ?? '';
            $objetives = $_POST['objetives'] ?? '';
            $necesites = $_POST['necesites'] ?? '';


            // Validamos la información

            // Creamos el array de datos

            if ( ! $errors ) {

                // Enviamos la información al modelo

                if ( ! $errors ) {

                    // Redirigimos al index de productos

                }
            }

        }

        $data = [
            'titulo' => 'Administración de Productos - Alta',
            'menu' => false,
            'admin' => true,
            'type' => $type,
            'status' => $status,
            'catalogue' => $catalogue,
            'errors' => $errors,
            'data' => $dataForm,
        ];

        $this->view('admin/products/create', $data);
    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }
}