<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("admin/Mdl_dashboard");
	 	if ( !$this->session->userdata('isLoggedin') ) {
		redirect( "admin/login" );
		}


	}

	public function index()
	{
		$this->load->model("admin/Mdl_dashboard");

		$data['countMentor'] = $this->Mdl_dashboard->countMentor();
		$data['countMentee'] = $this->Mdl_dashboard->countMentee();
		$data['countUser'] = $this->Mdl_dashboard->countUsers();

    $this->load->view('admin/template/header');
		$this->load->view('admin/dashboard',$data);
    $this->load->view('admin/template/footer');
	}
}
