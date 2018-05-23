<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requests extends CI_Controller {

	public function __construct() {
		parent::__construct();

	 	if (!$this->session->userdata('isLoggedin')) {
		redirect( "index.php/admin/login" );
		}
	}

  public function freeCounselling() {
		$data['view'] = $this->db->get('freecounsel')->result();
    $this->load->view('admin/template/header');
		$this->load->view('admin/freecounselling', $data);
    $this->load->view('admin/template/footer');
  }


}
