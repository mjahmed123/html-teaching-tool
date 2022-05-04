<?php
class Completed_quizzes_model extends CI_Model {
  public function insert($quiz_id, $category_id, $score) {


    $data = [
      'user_id' => $_SESSION['user_id'],
      'quiz_id'  => $quiz_id,
      'category_id'  => $category_id,
      'score'  => $score,
    ];
    $this->db->insert('completed_quizzes', $data);
  }
  public function getByUserId($user_id) {
    $this->db->select('*');
    $this->db->order_by('id','DESC');
    $this->db->from('completed_quizzes');
    $this->db->where('user_id', $user_id);
    $query = $this->db->get();
    $completed_quizzes = $query->result();
    return $completed_quizzes;
  }
  public function getCountByUserId($user_id, $quiz_id) {
    $this->db->select('*');
    $this->db->from('completed_quizzes');
    $this->db->where('user_id', $user_id);
    $this->db->where('quiz_id', $quiz_id);
    $query = $this->db->get();
    $completed_quizzes = $query->result();
    return count($completed_quizzes);
  }
}
?>