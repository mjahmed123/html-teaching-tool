<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quizzes extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->model('quiz_model');
		$this->load->model('completed_quizzes_model');
	}


	public function submit_tags() {
		$this->submit('pages/quizzes/identify_tags_page', 0);
	}
	public function submit_attributes() {
		$this->submit('pages/quizzes/identify_attributes_page', 1);
	}


	private function submit($path, $category_id) {
		$quiz_id = $_GET["id"];

		$quizCount = $this->completed_quizzes_model->getCountByUserId($_SESSION['user_id'], $quiz_id);

    if ($quizCount >= 3) {
      echo "<script>alert('You can only attempt this quiz a maximum of three times!'); history.go(-2);</script>";
      return;
    }
		$db_answers = $this->quiz_model->get_questions_by_quiz_id($quiz_id);
		$user_answers = $this->parse_input();

		$answer_status = array();
		$correct_answers = array();
		
		$total = 0;
		$total_correct = 0;
		
		
		foreach ($db_answers as $value) {
			$total = $total + 1;
			$answer = $value->answer;
			$question_id = $value->question_id;
			$answer_id = $value->answer_id;
			$correct_answers[$question_id] = isset($answer) ? $answer : $answer_id;
			$user_answer_key = array_search($question_id, array_column($user_answers, 'question_id'));

			if ($user_answer_key === false) {
				$answer_status[$question_id] = "missing";
				continue;
			}

			$user_answer = $user_answers[$user_answer_key];
			if ($user_answer["is_input"]) {
				if (empty($user_answer["answer"])) {
					$answer_status[$question_id] = "missing";
					continue;
				}
				if ($user_answer["answer"] == $answer) {
					$total_correct = $total_correct + 1;
					$answer_status[$question_id] = "correct";
				} else {
					$answer_status[$question_id] = "incorrect";
				}
				continue;
			}
			if ($user_answer["answer"] == $answer_id) {
				$total_correct = $total_correct + 1;
				$answer_status[$question_id] = "correct";
			} else {
				$answer_status[$question_id] = "incorrect";
			}
		}
		$score = $total_correct . "/" . $total;

		$this->completed_quizzes_model->insert($quiz_id, $category_id, $score);

		$data['answer_status'] = $answer_status;
		$data['correct_answers'] = $correct_answers;


		$this->load->view($path, $data);
	}

	private function parse_input() {
		// q3a1_i
		$answers = array();
		foreach ($_POST as $key => $value) {
			$answer = array();
			$answer["question_id"] = intval($key[1]);
			$answer["is_input"] = substr($key, -1) == "i";
			$answer["answer"] = $answer["is_input"] ? $value : intval($value);
			array_push($answers, $answer);
		}
		return $answers;
	}

	public function identify_tags() {
		$this->checkIfLoggedIn();
		$data['answer_status'] = null;
		$data['correct_answers'] = null;
		$this->load->view('pages/quizzes/identify_tags_page', $data);
	}

	public function identify_attributes() {
		$this->checkIfLoggedIn();
		$data['answer_status'] = null;
		$data['correct_answers'] = null;
		$this->load->view('pages/quizzes/identify_attributes_page', $data);
	}


	private function checkIfLoggedIn() {
		// redirect to login if not logged in
		if (!isset($_SESSION['user_id'])) {
			redirect('/login', 'refresh');
			return;
		}
	}
}
