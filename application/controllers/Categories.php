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
	public function attributes() {
		$this->checkIfLoggedIn();
		$this->load->view('pages/categories/attributes_page');
	}
	public function styles() {
		$this->checkIfLoggedIn();
		$this->load->view('pages/categories/styles_page');
	}
	public function forms() {
		$this->checkIfLoggedIn();
		$this->load->view('pages/categories/forms_page');
	}
	public function media() {
		$this->checkIfLoggedIn();
		$this->load->view('pages/categories/media_page');
	}
	public function references() {
		$this->checkIfLoggedIn();
		$this->load->view('pages/categories/references_page');
	}


	private function checkIfLoggedIn() {
		// redirect to login if not logged in
		if (!isset($_SESSION['user_id'])) {
			redirect('/login', 'refresh');
			return;
		}
	}
}
