<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('user_model');
	}

	public function tags() {
		$this->checkIfLoggedIn();
		$this->load->view('pages/categories/tags_page');
	}


	private function checkIfLoggedIn() {
		// redirect to login if not logged in
		if (!isset($_SESSION['user_id'])) {
			redirect('/login', 'refresh');
			return;
		}
	}
}
