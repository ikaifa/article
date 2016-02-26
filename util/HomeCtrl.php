<?php

class HomeCtrl extends Controller {
    function __construct() {
        parent::__construct();
        $model = new Model();

        require_once 'Common.php';

        $sql = 'SELECT c.* FROM categorys c
            INNER JOIN `language` l ON c.langid = l.langid
            WHERE l.langtype = :lang';

        $this->lang = $language;
        $this->view->menuList = $model->db->select($sql, [':lang' => $this->lang]);
    }

    public function layout($view) {
        $this->view->render('header');
        $this->view->render($view);
        $this->view->render('footer');
    }
}