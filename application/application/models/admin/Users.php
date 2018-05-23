<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();

	 	if (!$this->session->userdata('isLoggedin')) {
		redirect( "index.php/admin/login" );
		}
    $this->load->model("admin/UsersModel");
	}

  public function AllUsers() {
    $data['view'] = $this->UsersModel->getAllUsers();
    $this->load->view('admin/template/header');
		$this->load->view('admin/viewAllUsers', $data);
    $this->load->view('admin/template/footer');
  }


}
