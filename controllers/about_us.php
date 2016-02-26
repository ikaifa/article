<?php

class About_us extends HomeCtrl {
    function __construct() {
        parent::__construct();
        $this->includeModel("About_us_Model");

    }

    function index() {
        $this->view->title = 'About us';
        $this->layout('about_us/index');
    }

}