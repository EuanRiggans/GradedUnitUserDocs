<?php

class controller
{

     public function view($view, $data = []) {
        require_once './app/views/' . $view . '.php';
    }

    public function fetchModel($model)
    {
        require_once './app/models/' . lcfirst($model) . '.php';
        return new $model();
    }

}
