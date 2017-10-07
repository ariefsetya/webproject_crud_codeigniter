<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		$this->load->model('crud_model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
