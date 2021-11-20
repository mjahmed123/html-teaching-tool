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
			redirect('/dashboard', 'refresh');
		}
		$this->load->view('pages/register_page', $data);
	}

	private function validate() {
		$email_exists = $this->user_model->user_exists();
		$field_errors = $this->empty_items_in_assoc_array($_POST);

		if ($_POST["password"] !== $_POST["confirm_password"]) {
			$field_errors["confirm_password"] = "Confirm password does not match";
		}

		if ($email_exists === true) {
			$field_errors["email"] = "Email already exists.";
		}
		return $field_errors;
	}

	private function empty_items_in_assoc_array($arr) {
		$empty_fields = [];
		foreach($arr as $field => $value) {

			if (empty($value)) {
				$empty_fields[$field] = $field . " is required.";
			}
		}
		return $empty_fields;
	}


	public function index()
	{
		$this->load->view('pages/register_page');
	}
}
