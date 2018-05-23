<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentor extends CI_Controller {


	public function index()
	{
		$data['page_title'] = "Mentoring alumni";
		$this->load->view('template/header',$data);
		$this->load->view('mentor-landing');
		$this->load->view('template/footer');
	}
}
