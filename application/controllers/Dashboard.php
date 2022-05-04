<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->model('completed_quizzes_model');

	}


	public function tags() {
		$this->checkIfLoggedIn();

		
		$this->load->view('pages/categories/tags_page');
	}
	
	public function index()
	{
		$this->checkIfLoggedIn();
		$data['completed_quizzes'] = $this->completed_quizzes_model->getByUserId($_SESSION['user_id']);
		$this->load->view('pages/dashboard_page', $data);
	}
	private function checkIfLoggedIn() {
		// redirect to login if not logged in
		if (!isset($_SESSION['user_id'])) {
			redirect('/login', 'refresh');
			return;
		}
	}
}
