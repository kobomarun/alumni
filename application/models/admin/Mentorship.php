<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentorship extends CI_Controller {

	public function __construct() {
		parent::__construct();

	 	if (!$this->session->userdata('isLoggedin')) {
		redirect( "index.php/admin/login" );
		}
    $this->load->model("admin/MentorshipModel");
	}

  public function AllMentors() {
    $data['view'] = $this->MentorshipModel->getMentors();
    $this->load->view('admin/template/header');
		$this->load->view('admin/viewMentor', $data);
    $this->load->view('admin/template/footer');
  }

	public function AllMentees() {
    $data['view'] = $this->MentorshipModel->getMentees();
    $this->load->view('admin/template/header');
		$this->load->view('admin/viewMentee', $data);
    $this->load->view('admin/template/footer');
  }

	public function showMentees($id) {
		$data['view'] = $this->MentorshipModel->showMentees($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/showMentee', $data);
    $this->load->view('admin/template/footer');
	}

	public function showMentors($id) {
		$data['view'] = $this->MentorshipModel->showMentors($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/showMentee', $data);
    $this->load->view('admin/template/footer');
	}


}
