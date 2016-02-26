<?php

class Index extends HomeCtrl {
    function __construct() {
        parent::__construct();

        $this->includeModel("index_model");
        // list all dynamic menu at Post Page
        // $this->view->menuList = $this->model->menuList();

        //echo Hash::create('sha256', 'admin', HASH_PASSWORD_KEY);
        //echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);

    }

    public function index($page = 1) {
        $this->view->title = 'Home';

        $totalPosts = $this->model->countPosts();
        $pagePosts = 2; // post to display per page
        $this->view->currentPage = $page;
        $this->view->totalPages = ceil($totalPosts / $pagePosts);
        $this->view->listPosts = $this->model->listPosts($page, $pagePosts);

        $this->layout('index/index');
    }

}