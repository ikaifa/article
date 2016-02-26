<?php

class Help extends HomeCtrl {
    function __construct() {
        parent::__construct();
        $this->includeModel('help_model');
    }

    function index() {
        $this->view->title = 'Help';
        $this->layout('help/index');
    }

}