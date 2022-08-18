<?php
require_once('mysqldata.class.php');

class userdata extends mysqldata{
    public function verif_username($username, $password){
        return $this->query('SELECT id, user, pass FROM user WHERE user = :username and pass = :password',
        [ ':username' => $username,
          ':password' => $password]);
    }
    public function add_username($username, $password){
        return $this->execute('INSERT INTO user (user, pass) VALUES (:username, :password)',
        [ ':username' => $username,
          ':password' => $password]);
    }
}
?>