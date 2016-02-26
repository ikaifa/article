<?php

class Note extends DashCtrl {
    public function __construct() {
        parent::__construct();
        $this->includeModel("note_model");
    }

    public function index() {
        $this->view->title = 'Notes';
        $this->view->noteList = $this->model->noteList();
        $this->view->cateList = $this->model->cateList();

        $this->layout('note/index');
    }

    public function image() {
        $upload = new FileUpload('publics/upload/');
        $upload->image('imageUpload1');

        $imageUploaded = $upload->getInfo()['name'];
        respone_json($upload->getInfo());
    }
}