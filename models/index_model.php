
<?php

	class Index_Model extends Model {
	    public function __construct() {
	        parent::__construct();
	    }

	    public function listPosts($page = 1, $posts = 5) {
	        $index = (int) (($page - 1) * $posts);

	        $sql = "SELECT p.noteid, p.title, p.image, p.description, p.date_added,
	(SELECT c.categoryname FROM category c WHERE c.categoryid=p.categoryid) AS `category`,
	(SELECT u.username FROM user u WHERE u.userid = p.userid) AS `author`
	FROM `note` p WHERE p.noteid ORDER BY p.noteid DESC LIMIT $index, $posts";
	        return $this->db->select($sql);
	    }

	    public function countPosts() {
	        $sql = "SELECT count(noteid) as `totalPosts` FROM note ";
	        return $this->db->select($sql)[0]['totalPosts'];
	    }

}