<?php

class Note_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    // list specific field for json to use datatable
    public function listSmall() {
        $sql = 'SELECT n.noteid, n.title, n.date_added, u.username, c.catename, l.langtype
            FROM note n
            INNER JOIN user u ON u.userid = n.userid
            INNER JOIN categorys c ON c.categoryid = n.categoryid
            INNER JOIN language l ON l.langid = c.langid
            WHERE n.userid = :uid';
        /*$data[':cate'] = $cate;*/
        $data[':uid'] = auth_user()->userid;
        return $this->db->select($sql, $data);
    }

    public function noteList($page = 1, $posts = 10) {
        $index = (int) (($page - 1) * $posts);

        $sql = "SELECT n.noteid, n.title, n.date_added, u.username, c.catename, l.langtype
            FROM note n
            INNER JOIN user u ON u.userid = n.userid
            INNER JOIN categorys c ON c.categoryid = n.categoryid
            INNER JOIN language l ON l.langid = c.langid
            WHERE n.userid = :uid ";

        $data[':uid'] = auth_user()->userid;
        $sql .= " ORDER BY n.noteid DESC LIMIT $index , $posts";

        /*array(':uid' => $_SESSION['userid']);*/
        return $this->db->select($sql, $data);
    }

    /*public function cateList(){
    return $this->db->select("SELECT * FROM categorys");
    }*/

    public function cateList($lang = NULL) {
        $sql = "SELECT categoryid AS `value`, catename AS `name` FROM categorys WHERE";

        if (is_numeric($lang)) {
            $sql .= " langid = :lang";
        } else {
            $sql .= " langtype = :lang";
        }

        $data[':lang'] = $lang;
        return $this->db->select($sql, $data);
    }

    public function languageList() {
        return $this->db->select('SELECT * FROM language');
    }

    public function noteSingleList($noteid) {
        $sql = "SELECT n.*, u.username, l.langtype, c.catename
			FROM note n
			INNER JOIN user u ON u.userid = n.userid
			INNER JOIN categorys c ON c.categoryid = n.categoryid
			INNER JOIN language l ON l.langid = c.langid
			WHERE n.noteid = :noteid";
        $note = $this->db->select($sql, ['noteid' => $noteid]);
        return (count($note)) ? $note[0] : '';
    }

    public function create($data) {
        $this->db->insert('note', [
            'title'      => $data['title'],
            'userid'     => Session::get('userid'),
            'categoryid' => $data['categoryid'],
            'image'      => $data['image'],
            'content'    => $data['content'],
            'date_added' => date('Y-m-d H:i:s'),
            /*'langid'     => $data['langid'],*/
            'video'      => $data['video']
        ]///use GMT aka UTC 0:00
        );
        /*echo $data ['title'];
    echo "<pre>";
    print_r($data['categoryid']);
    die();*/
    }

    public function editSave($data) {
        $postData = [
            'title'      => $data['title'],
            'categoryid' => $data['categoryid'],
            'image'      => $data['image'],
            /*'langid'     => $data['langid'],*/
            'video'      => $data['video'],
            'content'    => $data['content']
        ];

        $this->db->update('note', $postData, "`noteid` = '{$data['noteid']}' AND userid = " . auth_user()->userid);
    }

    public function delete($id) {
        $this->db->delete('note', "`noteid` = {$id} AND userid = " . auth_user()->userid);
    }

    public function countNotes() {
        $sql = "SELECT count(noteid) as `totalPosts` FROM note ";
        return $this->db->select($sql)[0]['totalPosts'];
    }
}