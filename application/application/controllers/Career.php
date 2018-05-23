<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	public function index()
	{
		$data['page_title'] = "Student Career Guilde: Guilding student for their careers";
		$this->load->view('template/header', $data);
		$this->load->view('career-guide');
		$this->load->view('template/footer');
	}

	public function read($id) {
		$id = $this->uri->segment(3);

		$data['page_title'] = "Student Career Guilde: Guilding student for their careers";
		$this->load->view('template/header', $data);
		$this->load->view('view-guide');
		$this->load->view('template/footer');
	}
}
