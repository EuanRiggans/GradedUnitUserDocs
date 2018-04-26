<?php

require_once './app/init.php';

class home extends controller
{
    private $model;

    public function index($name = '')
    {
        $this->view('home/index', ['name' => $name]);
        $this->model = new model("temp_session_token");
    }
}
