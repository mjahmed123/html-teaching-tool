<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
    $this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->view('pages/home_page');
	}
}
