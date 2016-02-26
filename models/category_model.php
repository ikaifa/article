<?php

class Category_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function categoryList() {
        $sql = 'SELECT categoryid,catename,parent_id,parent_name,langtype
            FROM categorys c
            INNER JOIN language l ON l.langid = c.langid ';
        return $this->db->select($sql);
    }

    public function categorySingleList($categoryid) {
        return $this->db->select('SELECT * FROM categorys WHERE categoryid = :categoryid',
            ['categoryid' => $categoryid]);
    }

    public function cateList() {
        return $this->db->select('SELECT * FROM categorys');
    }

    public function create($data) {
        $this->db->insert('categorys', [
            'catename'    => $data['catename'],
            'parent_id'   => $data['parent_id'],
            'parent_name' => $data['parent_name']
        ]);
    }

    public function editSave($data) {
        $cateName = $data['catename'];
        $parent_id = $data['parent_id'];
        $parent_name = $data['parent_name'];

        $cateName = trim($cateName);
        $cateName = stripslashes($cateName);
        $cateName = htmlspecialchars($cateName);

        $postData = [
            'catename'    => $cateName,
            'parent_id'   => $parent_id,
            'parent_name' => $parent_name
        ];

        $this->db->update('category', $postData,
            "`categoryid` = '{$data['categoryid']}'");
    }

    public function delete($id) {
        $r = $this->db->delete('categorys', "`categoryid` = '{$id}'");
    }

}