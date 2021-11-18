<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
    $this->load->helper('html');
		$this->load->helper('url');

		$this->load->view('pages/register_page');
	}
}
