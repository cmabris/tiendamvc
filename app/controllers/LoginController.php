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
        if (isset($_COOKIE['shoplogin'])) {

            $value = explode('|', $_COOKIE['shoplogin']);
            $dataForm = [
                'user' => $value[0],
                'password' => $value[1],
                'remember' => 'on',
            ];
        } else {
            $dataForm = null;
        }

        $data = [
            'titulo' => 'Login',
            'menu'   => false,
            'data' => $dataForm,
        ];

        $this->view('login', $data);
    }

    public function olvido()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            $data = [
                'titulo' => 'Olvido de la contraseña',
                'menu' => false,
                'errors' => [],
                'subtitle' => '¿Olvidaste la contraseña?'
            ];

            $this->view('olvido', $data);

        } else {

            $email = $_POST['email'] ?? '';

            if ($email == '') {
                array_push($errors, 'El email es requerido');
            }
            if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, 'El correo electrónico no es válido');
            }

            if (count($errors) == 0) {
                if ( ! $this->model->existsEmail($email)) {
                    array_push($errors, 'El correo electrónico no existe en la base de datos');
                } else {
                    if ($this->model->sendEmail($email)) {

                        $data = [
                            'titulo' => 'Cambio de contraseña de acceso',
                            'menu' => false,
                            'errors' => [],
                            'subtitle' => 'Cambio de contraseña de acceso',
                            'text' => 'Se ha enviado un correo a <b>' . $email . '</b> para que pueda cambiar su clave de acceso. <br>No olvide revisar su carpeta de spam. <br>Cualquier duda que tenga puede comunicarse con nosotros.',
                            'color' => 'alert-success',
                            'url' => 'login',
                            'colorButton' => 'btn-success',
                            'textButton' => 'Regresar',
                        ];

                        $this->view('mensaje', $data);

                    } else {

                        $data = [
                            'titulo' => 'Error con correo',
                            'menu' => false,
                            'errors' => [],
                            'subtitle' => 'Error en el envío del correo electrónico',
                            'text' => 'Existió un problema al enviar el correo electrónico.<br>Por favor, pruebe más tarde o comuníquese con nuestro servicio de soporte',
                            'color' => 'alert-danger',
                            'url' => 'login',
                            'colorButton' => 'btn-danger',
                            'textButton' => 'Regresar',
                        ];

                        $this->view('mensaje', $data);

                    }
                }
            }

            if (count($errors) > 0) {
                $data = [
                    'titulo' => 'Olvido de la contraseña',
                    'menu' => false,
                    'errors' => $errors,
                    'subtitle' => '¿Olvidaste la contraseña?'
                ];

                $this->view('olvido', $data);
            }

        }
    }

    public function registro()
    {
        $errors = [];
        $dataForm = [];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Procesamos la información recibida del formulario
            $firstName = $_POST['first_name'] ?? '';
            $lastName1 = $_POST['last_name_1'] ?? '';
            $lastName2 = $_POST['last_name_2'] ?? '';
            $email = $_POST['email'] ?? '';
            $password1 = $_POST['password'] ?? '';
            $password2 = $_POST['password2'] ?? '';
            $address = $_POST['address'] ?? '';
            $city = $_POST['city'] ?? '';
            $state = $_POST['state'] ?? '';
            $postcode = $_POST['postcode'] ?? '';
            $country = $_POST['country'] ?? '';

            $dataForm = [
                'firstName' => $firstName,
                'lastName1' => $lastName1,
                'lastName2' => $lastName2,
                'email' 	=> $email,
                'password'  => $password1,
                'address'	=> $address,
                'city'		=> $city,
                'state'		=> $state,
                'postcode'	=> $postcode,
                'country'	=> $country
            ];

            if ($firstName == '') {
                array_push($errors, 'El nombre es requerido');
            }
            if ($lastName1 == '') {
                array_push($errors, 'El primer apellido es requerido');
            }
            if ($lastName2 == '') {
                array_push($errors, 'El segundo apellido es requerido');
            }
            if ($email == '') {
                array_push($errors, 'El email es requerido');
            }
            if ($password1 == '') {
                array_push($errors, 'La contraseña es requerido');
            }
            if ($password2 == '') {
                array_push($errors, 'Repetir contraseña es requerido');
            }
            if ($address == '') {
                array_push($errors, 'La dirección es requerida');
            }
            if ($city == '') {
                array_push($errors, 'La ciudad es requerida');
            }
            if ($state == '') {
                array_push($errors, 'La provincia es requerida');
            }
            if ($postcode == '') {
                array_push($errors, 'El código postal es requerido');
            }
            if ($country == '') {
                array_push($errors, 'El país es requerido');
            }
            if ($password1 != $password2) {
                array_push($errors, 'Las contraseñas deben ser iguales');
            }

            if (count($errors) == 0) {

                if ($this->model->createUser($dataForm)) {

                    $data = [
                        'titulo' => 'Bienvenido',
                        'menu' => false,
                        'errors' => [],
                        'subtitle' => 'Bienvenido/a a nuestra tienda online',
                        'text' => 'Gracias por su registro',
                        'color' => 'alert-success',
                        'url' => 'menu',
                        'colorButton' => 'btn-success',
                        'textButton' => 'Acceder',
                    ];

                    $this->view('mensaje', $data);

                } else {

                    $data = [
                        'titulo' => 'Error',
                        'menu' => false,
                        'errors' => [],
                        'subtitle' => 'Error en el proceso de registro.',
                        'text' => 'Probablemente el correo utilizado ya exista. Pruebe con otro',
                        'color' => 'alert-danger',
                        'url' => 'login',
                        'colorButton' => 'btn-danger',
                        'textButton' => 'Regresar',
                    ];

                    $this->view('mensaje', $data);

                }

            } else {
                $data = [
                    'titulo' => 'Registro',
                    'menu'   => false,
                    'errors' => $errors,
                    'dataForm' => $dataForm
                ];

                $this->view('register', $data);
            }
        } else {
            // Mostramos el formulario
            $data = [
                'titulo' => 'Registro',
                'menu'   => false,
            ];

            $this->view('register', $data);
        }
    }

    public function changePassword($id)
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = $_POST['id'] ?? '';
            $password1 = $_POST['password1'] ?? '';
            $password2 = $_POST['password2'] ?? '';

            if ($id == '') {
                array_push($errors, 'El usuario no existe');
            }
            if ($password1 == '') {
                array_push($errors, 'La contraseña es requerida');
            }
            if ($password2 == '') {
                array_push($errors, 'Repetir contraseña es requerido');
            }
            if ($password1 != $password2) {
                array_push($errors, 'Ambas claves deben ser iguales');
            }

            if (count($errors)) {

                $data = [
                    'titulo' => 'Cambiar contraseña',
                    'menu'   => false,
                    'errors' => $errors,
                    'data' => $id,
                    'subtitle' => 'Cambia tu contraseña de acceso',
                ];

                $this->view('changepassword', $data);

            } else {

                if ($this->model->changePassword($id, $password1)) {

                    $data = [
                        'titulo' => 'Cambiar contraseña',
                        'menu'   => false,
                        'errors' => [],
                        'subtitle' => 'Modificación de la contraseña de acceso',
                        'text' => 'La contraseña ha sido cambiada correctamente. Bienvenido de nuevo',
                        'color' => 'alert-success',
                        'url' => 'login',
                        'colorButton' => 'btn-success',
                        'textButton' => 'Regresar',
                    ];

                    $this->view('mensaje', $data);

                } else {

                    $data = [
                        'titulo' => 'Error al cambiar contraseña',
                        'menu'   => false,
                        'errors' => [],
                        'subtitle' => 'Error al modificar la contraseña de acceso',
                        'text' => 'Existió un error al modificar la clave de acceso',
                        'color' => 'alert-danger',
                        'url' => 'login',
                        'colorButton' => 'btn-danger',
                        'textButton' => 'Regresar',
                    ];

                    $this->view('mensaje', $data);
                }
            }
        } else {
            $data = [
                'titulo' => 'Cambiar contraseña',
                'menu'   => false,
                'data' => $id,
                'subtitle' => 'Cambia tu contraseña de acceso',
            ];

            $this->view('changepassword', $data);
        }
    }

    public function verifyUser()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $user = $_POST['user'] ?? '';
            $password = $_POST['password'] ?? '';
            $remember = isset($_POST['remember']) ? 'on' : 'off';

            $errors = $this->model->verifyUser($user, $password);

            $value = $user . '|' . $password;
            if ($remember == 'on') {
                $date = time() + (60*60*24*7);
            } else {
                $date = time() - 1;
            }
            setcookie('shoplogin', $value, $date);

            $dataForm = [
                'user' => $user,
                'remember' => $remember,
            ];

            if ( ! $errors ) {
                $data = $this->model->getUserByEmail($user);
                $session = new Session();
                $session->login($data);

                header("location:" . ROOT . 'shop');
            } else {
                $data = [
                    'titulo' => 'Login',
                    'menu'   => false,
                    'errors' => $errors,
                    'data' => $dataForm,
                ];
                $this->view('login', $data);
            }

        } else {

            $this->index();

        }


    }
}