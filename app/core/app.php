<?php

class App
{
    protected $controller;

    protected $method;

    protected $params = [];

    protected $database;

    public function __construct()
    {

        require_once './app/init.php';

        $url = $this->parseUrl();

        $this->controller = $url[0];
        $this->method = $url[1];

        if(!isset($url)) {
            $this->controller = 'home';
            $this->method = 'index';
        }

        if(!file_exists('./app/controllers/' . $this->controller . '.php')) {
            header('Location: ../../special/404/404.php');
            die();
        }

        if (file_exists('./app/controllers/' . $this->controller . '.php')) {
            unset($url[0]);
        }
        require_once './app/models/model.php';
        require_once './app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller();

        if (isset($url[1])) {
            if (method_exists($this->controller, $this->method)) {
                unset($url[1]);
            } else {
                if(method_exists($this->controller, 'index')) {
                    $this->method = 'index';
                } else {
                    header('Location: ../../special/404/404.php');
                    die();
                }
            }
        } else {
            if(method_exists($this->controller, 'index')) {
                $this->method = 'index';
            } else {
                header('Location: ../../special/404/404.php');
                die();
            }
        }

        /**
         * If url is null, then no parameters exist, otherwise assign remaining values in url to parameters
         */
        if($url == null) {
            $this->params = [];
        } else {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
