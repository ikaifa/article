<?php

class Help_Model extends Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function blah() {
        return 10 + 10;
    }

    public function menuList() {
        return $this->db->select('SELECT * FROM `category`');
    }

}