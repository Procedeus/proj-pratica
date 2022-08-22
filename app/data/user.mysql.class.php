<?php
require_once('mysqldata.class.php');

class userdata extends mysqldata{
  public function verif_email($email){
    return $this->query('SELECT email FROM user WHERE email = :email',
    [ ':email' => $email]);
}
    public function verif_username($username, $password){
        return $this->query('SELECT id, user, pass FROM user WHERE user = :username and pass = :password',
        [ ':username' => $username,
          ':password' => $password]);
    }
    public function add_username($username, $password, $email, $nome, $sobrenome){
        return $this->execute('INSERT INTO user (user, pass, email, nome, sobrenome) VALUES (:username, :password, :email, :nome, :sobrenome)',
        [ ':username' => $username,
          ':password' => $password,
          ':email' => $email,
          ':nome' => $nome,
          ':sobrenome' => $sobrenome,
        ]);
    }
}
?>