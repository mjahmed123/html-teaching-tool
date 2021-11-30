<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('user_model');
	}

	public function index()
	{
		// redirect to login if not logged in
		if (!isset($_SESSION['user_id'])) {
			redirect('/login', 'refresh');
			return;
		}
		$this->load->view('pages/dashboard_page');
	}
}