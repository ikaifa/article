<?php

class Member extends DashCtrl {
    function __construct() {
        parent::__construct();
        $this->includeModel("member_model");
    }

    public function index() {
        $this->view->title = 'member';
        $this->view->memberList = $this->model->memberList();
        $this->layout('member/index');
    }
}

?>