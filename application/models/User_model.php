<?php
class User_model extends CI_Model {

  public $email;
  public $username;
  public $password;

  public function insert()
  {
    $this->email = $_POST['email'];
    $this->username = $_POST['username'];
    $options = [
      'cost' => 12,
    ];
    $this->password = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);

    $this->db->insert('users', $this);

    return $this->db->insert_id();
  }
  public function user_exists() {
    $this->email = $_POST['email'];
    $this->db->where('email', $this->email);
    $query = $this->db->get('users');
    return !empty($query->result_array());
  }

  public function authenticate_user() {
    $this->email = $_POST['email'];
    $this->password = $_POST['password'];

    $this->db->select('email, password, id');
    $this->db->from('users');
    $this->db->where('email', $this->email);
    $query = $this->db->get();
    $user =  $query->row();

    if (!isset($user)) {
      return false;
    }
    $is_valid_password = password_verify($this->password, $user->password);
    if (!$is_valid_password) {
      return false;
    }
    return $user->id;
  }
}
?>

