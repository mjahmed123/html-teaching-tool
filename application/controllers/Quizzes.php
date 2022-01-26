<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quizzes extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('user_model');
	}


	public function submit() {
		$this->parse_input();
	}

	private function parse_input() {
		// q3a1_i
		$answers = array();
		foreach ($_POST as $key => $value) {
			$answer = array();
			$answer["question"] = $key[1];
			$answer["answer"] = $value;
			$answer["isInput"] = substr($key, -1) == "i";
			array_push($answers, $answer);
		}
		echo print_r($answers);
	}

	public function identify_tags() {
		$this->checkIfLoggedIn();
		$this->load->view('pages/quizzes/identify_tags_page');
	}


	private function checkIfLoggedIn() {
		// redirect to login if not logged in
		if (!isset($_SESSION['user_id'])) {
			redirect('/login', 'refresh');
			return;
		}
	}
}
