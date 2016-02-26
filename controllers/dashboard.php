<?php

class Dashboard extends DashCtrl {
    function __construct() {
        parent::__construct();
        $this->includeModel("dashboard_model");
        $this->view->js = ['dashboard/js/default.js'];
    }

    function index() {
        $this->view->title = 'Dashboard';
        $this->layout('dashboard/index');
    }

    function logout() {
        Session::destroy();
        redirect('index');
    }

    function xhrInsert() {
        $this->model->xhrInsert();
    }

    function xhrGetListings() {
        $this->model->xhrGetListings();
    }

    function xhrDeleteListing() {
        $this->model->xhrDeleteListing();
    }

}