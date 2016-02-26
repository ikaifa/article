<?php

class User_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function userList()
    {
        return $this->db->select('SELECT userid, login,username, role, photo FROM user');
    }
    
    public function userSingleList($userid)
    {
        return $this->db->select('SELECT userid, login,username, role,photo FROM user WHERE userid = :userid', 
        		array(':userid' => $userid))[0];
    }
    
    public function create($data)
    {
        $this->db->insert('user', array(
            'login' => $data['login'],
        	'username' => $data['username'],
            'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role'],
            'photo' => $data['photo']
        ));
    }
    
    public function editSave($data)
    {
        $postData = array(
            'login' => $data['login'],
        	'username' => $data['username'],
            'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role'],
            'photo' => $data['photo']
        );
        
        $this->db->update('user', $postData, 
        		"`userid` = '{$data['userid']}'");
       /*  print_r($data['userid']);
        die(); */
    }
    
    public function delete($userid)
    {
        $result = $this->db->select('SELECT role FROM user WHERE userid = :userid', array(':userid' => $userid));

        if ($result[0]['role'] == 'owner')
        return false;
        
        $this->db->delete('user', "userid = '$userid'");
    }
}