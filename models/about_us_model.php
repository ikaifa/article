
<?php
class About_us_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function menuList() {
        return $this->db->select('SELECT * FROM `category`');
    }
}
?>