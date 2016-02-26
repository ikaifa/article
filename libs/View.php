<?php

class View {
    public function render($name, $noInclude = false) {
        require 'views/' . $name . '.php';
    }

    public function limitText($text, $limit = 55) {
        if (!empty($text)) {
            if ($len = strlen($text) > $limit) {
                return substr($text, 0, $limit) . " ... ";
            }
            return $text;
        }
    }

    public function submenu($value, $id, $lang = 'en') {
        echo "<ul>";
        foreach ($this->menuList as $key => $value) {
            if ($value['parent_id'] == $id) {
                $parent = $value['parent_id'];
                echo "<li><a class='sub_menu' data-parent='$parent' data-child='{$value['categoryid']}' href='javascript:' >{$value['catename']}</a>";
                $this->submenu($value, $value['categoryid']);
                echo "</li>";
            }
        }
        echo "</ul>";
    }
}