<?php

class Controller {
    public $data = [];

    function __construct() {
        $this->view = new View();
    }

    public function loadModel($name, $modelPath = 'models/') {
        $path = $modelPath . $name . '_model.php';

        if (file_exists($path)) {
            require $modelPath . $name . '_model.php';
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }

    public function includeModel($name, $path = "models/") {
        $file = $path . $name . ".php";
        if (file_exists($file)) {
            require $file;
            $this->model = new $name();
        }
    }

    public function initModel($path) {
        $file = "models/$path.php";
        if (file_exists($file)) {
            require_once $file;
            $name = basename($file);
            return new $name();
        }
    }
}