<?php
class User_model extends CI_Model {

  public $email;
  public $username;
  public $password;

  public function insert()
  {
    $this->email = $_POST['email'];
    $this->username = $_POST['username'];
    $this->password = $_POST['password'];

    $this->db->insert('entries', $this);
  }
}
?>

