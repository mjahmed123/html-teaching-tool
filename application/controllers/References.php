<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class References extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('pages/categories/references_page');
	}
}
