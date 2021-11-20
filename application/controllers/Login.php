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
		$user_id = $this->user_model->authenticate_user();
		if ($user_id == false) {
			$data['user_found'] = false;
			$this->load->view('pages/login_page', $data);
			return;
		}
		redirect('/dashboard', 'refresh');
	}

	private function validate() {
		$field_errors = $this->empty_items_in_assoc_array($_POST);
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
    $this->load->helper('html');
		$this->load->helper('url');

		$this->load->view('pages/login_page');
	}
}
