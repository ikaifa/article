<?php

class Login_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function run() {
        $sth = $this->db->prepare("SELECT userid, role, username, photo FROM user WHERE
                login = :login AND password = :password");
        $sth->execute([
            ':login'    => $_POST['login'],
            // ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
            ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
        ]);

        $data = $sth->fetch();

        $count = $sth->rowCount();
        if ($count > 0) {
            // login
            Session::init();

            $data['loggedIn'] = true;
            Session::set('user', (object) $data);

            Session::set('role', $data['role']);
            Session::set('username', $data['username']);
            Session::set('photo', $data['photo']);
            Session::set('loggedIn', true);
            Session::set('userid', $data['userid']);
            header('location: ../dashboard');
        } else {
            header('location: ../login');
        }
    }

    public function menuList() {
        return $this->db->select('SELECT * FROM `category`');
    }
}