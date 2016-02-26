<?php

class User extends DashCtrl {
    public function __construct() {
        parent::__construct();
        $this->includeModel("user_model");
    }

    public function index() {
        $this->view->title = 'Users';
        $this->view->userList = $this->model->userList();

        $this->layout('user/index');
    }

    public function create() {
        $data = [];
        $data['login'] = $_POST['login'];
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];
        $data['photo'] = $_POST['imgPath'];

        // @TODO: Do your error checking!

        $this->model->create($data);
        redirect('user');
    }

    public function edit($id) {
        $this->view->user = $this->model->userSingleList($id);

        // Com::dd($this->view->user['photo']);

        if (empty($this->view->user)) {
            die('This is an invalid user!');
        }
        $this->view->title = 'Edit User';

        $this->layout('user/edit');
    }

    public function editSave($id) {
        $data = [
            'userid'   => $id,
            'login'    => $_POST['login'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'role'     => $_POST['role'],
            'photo'    => $_POST['imgPath']
        ];
        // @TODO: Do your error checking!
        // print_r($data);die();
        $this->model->editSave($data);
        redirect('user');
    }

    public function delete($id) {
        $this->model->delete($id);
        redirect('user');
    }

    public function uploadImage() {
        $upload = new FileUpload('publics/upload/');
        $upload->image('imageUpload1');

        $imageUploaded = $upload->getInfo()['name'];

        respone_json($upload->getInfo());
    }
}