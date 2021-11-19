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
		$data['query'] = $this->user_model->insert();
		$this->load->view('pages/register_page', $data);
	}

	public function index()
	{

		$this->load->view('pages/register_page');
	}
}
