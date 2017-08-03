<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function index()
	{	
		$this->load->view('admin/header');
		$this->load->view('admin/dash');
		$this->load->view('admin/base');
		$this->load->view('admin/footer');
	}

}
