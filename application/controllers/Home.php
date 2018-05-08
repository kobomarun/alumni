<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
    $this->load->model("admin/homepageModel");
		$this->load->helper("text");
	}

	public function index()
	{
		$data['page_title'] = "Home: Welcome to Mentors Hub";
		$data['feature'] = $this->homepageModel->getFeatures();
		$data['about'] = $this->homepageModel->getAboutUs();
		$data['mentor'] = $this->homepageModel->getMentorBenefits();
		$data['mentee'] = $this->homepageModel->getMenteeBenefits();
		$data['slide'] = $this->homepageModel->getSliders();
		$data['career'] = $this->homepageModel->getCareer();

		$this->load->view('template/header', $data);
		$this->load->view('home',$data);
		$this->load->view('template/footer');
	}

	public function phonesubscriber() {
		$num = $this->input->post('pnum');
		$data = [
			'content' => $num,
			'type' => 'phone'
		];

		$insert = $this->db->insert('subscribers', $data);
		if($insert) {
			echo true;
		} else {
			echo false;
		}
	}

	public function emailsubscriber() {
		$email = $this->input->post('email');
		$data = [
			'content' => $email,
			'type' => 'email'
		];

		$insert = $this->db->insert('subscribers', $data);
		if($insert) {
			echo true;
		} else {
			echo false;
		}
	}


}
