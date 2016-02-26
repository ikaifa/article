<?php

class Post extends HomeCtrl {
    public function __construct() {
        parent::__construct();
        $this->includeModel("post_model");
    }

    public function index($cate) {
        redirect('post/cate/1');
    }

    public function page($parent, $child = NULL, $page = 1) {
        $link = URL . '/post/page/' . $parent;
        if (!empty($child)) {
            $link .= "/$child";
        }

        $this->view->pageLink = $link;
        $this->view->postList = $this->model->listPostByPage($parent, $child, $page, PAGE_POSTS, $this->lang);
        $totalNotes = $this->model->countPostByPage($parent, $child);
        $this->view->currentPage = $page;
        $this->view->totalPages = ceil($totalNotes / PAGE_POSTS);

        $this->layout('post/index');
    }

    // menu/news/sport/2  //list by page
    public function submenu($main, $sub, $page = 1) {
        /*pp(func_get_args());
        echo "<hr/> $main  $sub <br/>";*/
        $this->view->menu = $main;
        $this->view->sub = $sub;
        // $this->view->pageLink = "post/submenu/";
        $this->view->pageLink = "post/menu/";

        // pass all notes by catename to view
        $this->view->postList = $this->model->listPostBySubMenu($main, $sub, $page, PAGE_POSTS);

        /* pp($this->model->listPostBySubMenu($main, $sub, $page, PAGE_POSTS));
        pp($this->model->listPostBySubMenu('ពត៏មាន', 'ពាណិជ្ជកម្ន', $page, PAGE_POSTS));*/

        // pass page with current and total page to view
        $totalNotes = $this->model->countPostBySubMenu($main, $sub);
        $this->view->currentPage = $page;
        $this->view->totalPages = ceil($totalNotes / PAGE_POSTS);

        // echo "{$totalNotes} {$this->view->currentPage} {$this->view->totalPages}";

        // make view page
        $this->layout('post/index');
    }

    public function menu($name = '', $page = 1) {
        $this->view->menu = $name;
        $this->view->pageLink = "post/menu/";
        $this->view->postList = $this->model->listPostByMainMenu($name, $page, PAGE_POSTS);

        $totalNotes = $this->model->countPostByMainMenu($name);
        $this->view->currentPage = $page;
        $this->view->totalPages = ceil($totalNotes / PAGE_POSTS);

        $this->layout('post/index');
    }

    public function detail($id) {
        $this->view->post = $this->model->postSingleList($id);
        if ($this->view->post['langtype'] != $this->lang) {
            redirect();
        }

        if (empty($this->view->post)) {
            die('This is an invalid note!');
        }

        $this->view->title = 'Post Detail';
        $this->layout('post/detail');
    }
}
