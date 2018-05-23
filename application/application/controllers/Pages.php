<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("Mdl_career");
		//$this->load->model("Users_model");
	}

	public function About()
	{
		$data['page_title'] = "About us";
		$this->load->view('template/header', $data);
		$this->load->view('blog');
		$this->load->view('template/footer');
	}

	public function Contact()
	{
		$data['page_title'] = "Contact us";
		$this->load->view('template/header', $data);
		$this->load->view('contactus');
		$this->load->view('template/footer');
	}

  public function Terms()
	{
		$data['page_title'] = "Terms and Conditions";
		$this->load->view('template/header', $data);
		$this->load->view('terms');
		$this->load->view('template/footer');
	}

  public function Support()
	{
		$data['page_title'] = "Support us";
		$this->load->view('template/header', $data);
		$this->load->view('support-us');
		$this->load->view('template/footer');
	}

  public function Free_counselling()
	{
		$data['random'] = $this->Mdl_career->randomPost();
		$data['course'] = $this->Mdl_career->getCoursePost();

		$data['page_title'] = "Free Counselling";
		$this->load->view('template/header', $data);
		$this->load->view('free-counseling');
		$this->load->view('template/footer');
	}

	public function PostFree() {

		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'call' => $this->input->post(' call'),
			'their_name' => $this->input->post('tname'),
			'their_phone' => $this->input->post('tphone'),
			'their_email' => $this->input->post('temail'),
			'position' => $this->input->post('position'),
			'age' => $this->input->post('age'),
			'type' => $this->input->post('type'),
			'call' => $this->input->post('call'),
			'state' => $this->input->post('state'),
			'gender' => $this->input->post('gender'),
			'comment' => $this->input->post('comment'),
		);

		$insert = $this->db->insert('freecounsel',$data);
		if($insert) {
			$this->session->set_flashdata('success', 'Your request has been submitted successfully. We will get back to you shortly');
			redirect('pages/free_counselling');
		}
	}
}
