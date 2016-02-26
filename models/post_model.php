<?php

class Post_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function listPostByPage($parent = NULL, $child = NULL, $page = 1, $posts = 10, $lang = 'en') {
        $index = (int) (($page - 1) * $posts);
        $sql = 'SELECT n.noteid, n.title, n.image, n.content, n.date_added, u.username, u.photo,
            c.* FROM note n
            INNER JOIN user u ON u.userid = n.userid
            INNER JOIN categorys c ON c.categoryid = n.categoryid
            INNER JOIN language l ON c.langid = l.langid
            WHERE l.langtype = :lang';

        if (!empty($child)) {
            $sql .= ' AND c.parent_id = :parent';
            $data[':parent'] = $parent;

            $sql .= ' AND c.categoryid = :child';
            $data[':child'] = $child;
        } else {
            $sql .= ' AND c.categoryid = :parent';
            $data[':parent'] = $parent;
        }

        $data[':lang'] = $lang;
        $sql .= " ORDER BY n.noteid DESC LIMIT $index, $posts";
        return $this->db->select($sql, $data);
    }

    public function countPostByPage($parent, $child = NULL) {
        $sql = 'SELECT COUNT(n.noteid) AS total FROM note n
            INNER JOIN user u ON u.userid = n.userid
            INNER JOIN categorys c ON c.categoryid = n.categoryid
            WHERE c.parent_id = :parent';

        $data[':parent'] = $parent;
        if (!empty($child)) {
            $sql .= ' AND c.categoryid = :child';
            $data[':child'] = $child;
        }

        return $this->db->select($sql, $data)[0]['total'];
    }

    /**/
    public function listPostBySubMenu($main, $sub, $page = 1, $posts = 10) {
        $index = (int) (($page - 1) * $posts);
        // $sql = "SELECT n.noteid, n.title, n.image, n.content, n.date_added,
        //     u.username, u.photo, c.* FROM note n
        //     INNER JOIN user u ON u.userid = n.userid
        //     INNER JOIN categorys c ON c.categoryid = n.categoryid
        //     WHERE c.parent_name = :main AND c.catename = :sub
        //     ORDER BY n.noteid DESC LIMIT $index, $posts";
        $sql = "SELECT n.noteid, n.title, n.image, n.content, n.date_added,
            u.username, u.photo, c.* FROM note n
            INNER JOIN user u ON u.userid = n.userid
            INNER JOIN categorys c ON c.categoryid = n.categoryid
            WHERE c.parent_id = :main AND c.categoryid = :sub
    ORDER BY n.noteid DESC LIMIT $index, $posts";
        return $this->db->select($sql, [':main' => $main, ':sub' => $sub]);
    }

    public function countPostBySubMenu($main, $sub) {
        $sql = "SELECT COUNT(n.noteid) AS `totalPosts` FROM note n
            INNER JOIN user u ON u.userid = n.userid
            INNER JOIN categorys c ON c.categoryid = n.categoryid
            WHERE c.parent_name = :main AND c.catename = :sub";
        return $this->db->select($sql, [":main" => $main, ":sub" => $sub])[0]['totalPosts'];
    }

    /**/
    public function listPostByMainMenu($cate, $page = 1, $posts = 10) {
        $index = (int) (($page - 1) * $posts);
        $sql = "SELECT n.noteid, n.title, n.image, n.content, n.date_added,
            u.username, u.photo, c.* FROM note n
            INNER JOIN user u ON u.userid = n.userid
            INNER JOIN categorys c ON c.categoryid = n.categoryid
            WHERE c.categoryid = :cate
            ORDER BY n.noteid DESC LIMIT $index, $posts";
        return $this->db->select($sql, [':cate' => $cate]);
    }

    public function countPostByMainMenu($cate) {
        $sql = "SELECT COUNT(n.noteid) AS `totalPosts` FROM note n
            INNER JOIN user u ON u.userid = n.userid
            INNER JOIN categorys c ON c.categoryid = n.categoryid
            WHERE c.parent_name = :cate";
        return $this->db->select($sql, [':cate' => $cate])[0]['totalPosts'];
    }

    public function postList($catid, $page = 1, $posts = 10) {
        $index = (int) (($page - 1) * $posts);
        return $this->db->select(
            "SELECT p.*,
            (SELECT u.username FROM user u WHERE u.userid = p.userid) AS `username`
            FROM `note` p WHERE categoryid = :id ORDER BY p.noteid DESC LIMIT $index, $posts",
            [':id' => $catid]);
    }

    public function countNotes($id) {
        $sql = "SELECT COUNT(noteid) as `totalPosts` FROM `note` WHERE `categoryid` = $id";
        return $this->db->select($sql)[0]['totalPosts'];
    }

    public function postSingleList($id) {
        $sql = "SELECT c.catename, l.langtype,
             n.*, u.username FROM note n
            INNER JOIN categorys c ON c.categoryid = n.categoryid
            INNER JOIN user u ON u.userid = n.userid
            INNER JOIN language l ON l.langid = c.langid
            WHERE :noteid IN (n.noteid)
        ";

        $note = $this->db->select($sql, [':noteid' => $id]);
        if (!empty($note)) {
            return $note[0];
        }
    }

    public function listByCate($id, $page = 1, $posts = 10) {
        $index = (int) (($page - 1) * $posts);

        $sql = "SELECT p.*,
            (SELECT c.catename FROM categorys c WHERE c.categoryid=p.categoryid) AS `catename`,
            (SELECT u.username FROM user u WHERE u.userid = p.userid) AS `username`
            FROM `note` p WHERE p.categoryid = $id ORDER BY p.noteid DESC LIMIT $index, $posts
        ";
        return $this->db->select($sql);
    }
}