<?php

class DashCtrl extends Controller {
    function __construct() {
        parent::__construct();
        $model = new Model();

        Auth::handleLogin();
        $model = new Model();
        $this->view->languageList = $model->db->select('SELECT * FROM language');
    }

    public function layout($view) {
        $this->view->render('admin_header');
        $this->view->render($view);
        $this->view->render('admin_footer');
    }
}