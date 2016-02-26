<?php

class Note extends DashCtrl {
    public function __construct() {
        parent::__construct();
        $this->includeModel("note_model");
    }

    public function index($page = 1) {
        $this->view->title = 'Notes';
        $this->view->currentPage = $page;
        $totalNotes = $this->model->countNotes();
        $pageNotes = 10;
        $this->view->totalPages = ceil($totalNotes / $pageNotes);

        /*if (isset($_REQUEST['lang'])) {
        $this->view->noteList = $this->model->noteList($page, $pageNotes, $_REQUEST['lang']);
        } else {
        $this->view->noteList = $this->model->noteList($page, $pageNotes);
        }*/
        $this->view->noteList = $this->model->noteList($page, $pageNotes);

        $this->view->cateList = $this->model->cateList();

        $this->layout('note/index');
    }

    public function json() {
        /*if (isset($_REQUEST['lang'])) {
        $notes = $this->model->listSmall($_REQUEST['lang']);
        } else {
        $notes = $this->model->listSmall();
        }*/
        $notes = $this->model->listSmall();
        respone_json($notes);
    }

    public function get_cate_name($langType) {
        $data = $this->model->cateList($langType);
        respone_json($data);
    }

    public function insert() {
        $this->view->cateList = $this->model->cateList();
        $this->view->languageList = $this->model->languageList();
        $this->view->title = 'Create note';

        $this->layout('note/create');
    }

    public function create() {
        $data = [
            'title'      => $_POST['title'],
            'image'      => $_POST['imgPath'],
            /*'langid'     => $_POST['langid'],*/
            'video'      => $_POST['video'],
            'content'    => $_POST['content'],
            'categoryid' => $_POST['categoryid']
        ];
        $this->model->create($data);
        redirect('note');
    }

    public function edit($id) {
        $this->view->note = $this->model->noteSingleList($id);
        $this->view->cateList = $this->model->cateList();
        $this->view->languageList = $this->model->languageList();
        if (empty($this->view->note)) {
            die('This is an invalid note!');
        }

        $this->view->title = 'Edit Note';
        $this->layout('note/edit');
    }

    public function editSave($noteid) {
        $data = [
            'noteid'     => $noteid,
            'title'      => $_POST['title'],
            'image'      => $_POST['image'],
            /*'langid'     => $_POST['langid'],*/
            'video'      => $_POST['video'],
            'content'    => $_POST['content'],
            'categoryid' => $_POST['categoryid']
        ];

        // @TODO: Do your error checking!

        $this->model->editSave($data);
        redirect('note');
    }

    public function delete($id) {
        $this->model->delete($id);
        redirect('note');
    }

    public function uploadImage() {
        $upload = new FileUpload('publics/upload/');
        $upload->image('imageUpload1');

        $imageUploaded = $upload->getInfo()['name'];
        respone_json($upload->getInfo());
    }
}
