<?php
class Quiz_model extends CI_Model {
  public function get_questions_by_quiz_id($quiz_id) {
    $this->db->select('*');
    $this->db->from('quizzes');
    $this->db->where('quiz_id', $quiz_id);
    $query = $this->db->get();
    $quizzes = $query->result();
    return $quizzes;
  }
}
?>