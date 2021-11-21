<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('user_model');
	}

	public function authenticate() {
		$data['validation'] = $this->validate();
		if (!empty($data['validation'])) {
			$this->load->view('pages/login_page', $data);
			return;
		}
		$user_id = $this->user_model->authenticate_user();
		if ($user_id == false) {
			$data['user_found'] = false;
			$this->load->view('pages/login_page', $data);
			return;
		}
		$_SESSION["user_id"] = $user_id;
		redirect('/dashboard', 'refresh');
	}

	private function validate() {
		$field_errors = $this->validate_fields($_POST);
		return $field_errors;
	}

	private function validate_fields($arr) {
		$field_errors = [];
		foreach($arr as $field => $value) {

			if (empty($value)) {
				$field_errors[$field] = str_replace("_", " ", ucfirst($field)) . " is required.";
			}
			$max_length = $this->field_max_values($field);

			
			if (strlen($value) > $max_length) {
				$field_errors[$field] = str_replace("_", " ", ucfirst($field)) . " must be less than " . $max_length . ' characters.';
			}
		}
		return $field_errors;
	}


	private function field_max_values($field_name) {
		switch ($field_name) {
			case 'email':
				return 25;
				break;
			case 'password':
				return 30;
				break;
			default:
				break;
		}
	}


	public function index()
	{
		// check if already logged in.
		if (isset($_SESSION['user_id'])) {
			redirect('/dashboard', 'refresh');
			return;
		}
		$this->load->view('pages/login_page');
	}
}
