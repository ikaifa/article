<?php

class Category extends DashCtrl {
    public function __construct() {
        parent::__construct();
        $this->includeModel("category_model");
    }

    public function index() {
        $this->view->title = 'Category';
        $this->view->cateList = $this->model->cateList();
        $this->view->categoryList = $this->model->categoryList();

        $this->layout('category/index');
    }

    public function create() {
        $data = [
            'catename'    => $_POST['catename'],
            'parent_id'   => $_POST['parent_id'],
            'parent_name' => $_POST['parent_name']
        ];
        $this->model->create($data);
        redirect('category');
    }

    public function edit($id) {
        $this->view->category = $this->model->categorySingleList($id);
        $this->view->cateList = $this->model->cateList();

        if (empty($this->view->category)) {
            die('This is an invalid category!');
        }

        $this->view->title = 'Edit Category';

        $this->layout('category/edit');
    }

    public function editSave($categoryid) {
        $data = [
            'categoryid'  => $categoryid,
            'catename'    => $_POST['catename'],
            'parent_id'   => $_POST['parent_id'],
            'parent_name' => $_POST['parent_name']
        ];

        // @TODO: Do your error checking!

        $this->model->editSave($data);
        redirect('category');
    }

    public function delete($id) {
        $this->model->delete($id);
        redirect('category');
    }
}