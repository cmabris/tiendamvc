<?php

/**
 * La clase Application maneja la URL y lanza los procesos
 */

class Application
{
    private $urlController = null;
    private $urlAction = null;
    private $urlParams = [];

    function __construct()
    {
        $this->separarUrl();

        if ( ! $this->urlController ) {
            require_once '../app/controllers/LoginController.php';
            $page = new LoginController();
            $page->index();
        } elseif (file_exists('../app/controllers/' . ucfirst($this->urlController) . 'Controller.php')) {
            $controller = ucfirst($this->urlController) . 'Controller';
            require_once '../app/controllers/' . $controller . '.php';
            $this->urlController = new $controller;

            if (method_exists($this->urlController, $this->urlAction) &&
                is_callable(array($this->urlController, $this->urlAction))) {
                if ( ! empty($this->urlParams) ) {
                    call_user_func_array(array($this->urlController, $this->urlAction), $this->urlParams);
                } else {
                    $this->urlController->{$this->urlAction}();
                }
            } else {
                if (strlen($this->urlAction) == 0) {
                    $this->urlController->index();
                } else {
                    header('HTTP/1.0 404 Not Found');

                    // Tratamos el error producido cuando creemos el controlador de Error
                }
            }
        } else {
            require_once '../app/controllers/LoginController.php';
            $page = new LoginController();
            $page->index();
        }
    }

    public function separarUrl()
    {
        if ($_SERVER['REQUEST_URI'] != '/') {
            $url = trim($_SERVER['REQUEST_URI'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->urlController = $url[0] ?? null;
            $this->urlAction = $url[1] ?? null;

            unset($url[0], $url[1]);

            $this->urlParams = array_values($url);
        }
    }
}