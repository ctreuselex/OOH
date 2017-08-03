<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function index() {	
		$data['tabSelect'] = "billboards";

		$this->load->view('admin/header');
		$this->load->view('admin/dash', $data);
		$this->load->view('admin/base');
		$this->load->view('admin/footer');
	}

	public function addnew() {	
		$data['tabSelect'] = "billboards";

		$this->load->view('admin/header');
		$this->load->view('admin/dash', $data);
		$this->load->view('admin/addnew');
		$this->load->view('admin/footer');
	}

}
