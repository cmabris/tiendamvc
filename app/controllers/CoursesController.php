<?php

class CoursesController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Course');
    }

    public function index()
    {
        $session = new Session();

        if ($session->getLogin()) {

            $courses = $this->model->getCourses();

            $data = [
                'titulo' => 'Cursos en línea',
                'menu' => true,
                'active' => 'courses',
                'data' => $courses,
            ];

            $this->view('courses/index', $data);

        } else {
            header('location:' . ROOT);
        }
    }
}