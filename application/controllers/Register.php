<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('user_model');
	}


	public function insert()
	{
		$data['validation'] = $this->validate();
		if (empty($data['validation'])) {
			$data['user_id'] = $this->user_model->insert();
			$_SESSION["user_id"] = $data['user_id'];
			redirect('/dashboard', 'refresh');
		}
		$this->load->view('pages/register_page', $data);
	}

	private function validate() {
		$email_exists = $this->user_model->user_exists();
		$field_errors = $this->validate_fields($_POST);

		if ($email_exists === true) {
			$field_errors["email"] = "Email already exists.";
		}

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
		if ($_POST["password"] !== $_POST["confirm_password"]) {
			$field_errors["confirm_password"] = "Confirm password does not match";
		}
		return $field_errors;
	}

	private function field_max_values($field_name) {
		switch ($field_name) {
			case 'email':
				return 25;
				break;
			case 'username':
				return 15;
				break;
			case 'password':
				return 30;
				break;
			case 'confirm_password':
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
		$this->load->view('pages/register_page');
	}
}
