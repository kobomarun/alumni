<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$data['page_title'] = "All Events";
		$this->load->view('template/header', $data);
		$this->load->view('all-events');
		$this->load->view('template/footer');
	}


}
