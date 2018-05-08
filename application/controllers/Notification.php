<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {
	function __construct() {
		parent:: __construct();

		$this->load->model('Mdl_mentors');
	}

	public function index()
	{
		$id = $this->session->userdata('id');
		$countMentor = $this->Mdl_mentors->checkMentorRequest($id);

		echo $countMentor;
	}
}
