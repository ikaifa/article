<?php

	class Member_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function memberList()
	    {
	        return $this->db->select('SELECT m_id, m_en_name, m_kh_name, m_ar_name, m_gender, m_university, 
	        	m_skill, m_year, m_phone, m_facebook, m_mail, m_birthdate, m_place_of_birth, m_address, m_photo FROM tbl_member');
	    }
	}

?>
