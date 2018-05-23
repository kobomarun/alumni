<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentee extends CI_Controller {


	public function index()
	{
		$data['page_title'] = "All Mentees";
		$this->load->view('template/header',$data);
		$this->load->view('mentee-landing');
		$this->load->view('template/footer');
	}
}
