<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$data['page_title'] = "Blog";
		$this->load->view('template/header', $data);
		$this->load->view('blog');
		$this->load->view('template/footer');
	}

	public function view()
	{
		$data['page_title'] = "Blog";
		$this->load->view('template/header', $data);
		$this->load->view('blog-post');
		$this->load->view('template/footer');
	}
}
