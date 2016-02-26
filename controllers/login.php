<?php

class Login extends Controller {
    function __construct() {
        parent::__construct();
        $this->includeModel("login_model");

        $this->view->menuList = $this->model->menuList();
    }

    function index() {
        $this->view->title = 'Login';

        //$this->view->render('header');
        $this->view->render('login/index');
    }

    function run() {
        $this->model->run();
    }

}