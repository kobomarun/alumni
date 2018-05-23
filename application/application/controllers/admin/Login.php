<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model("admin/Mdl_Login");
		//$this->session->destroy('isLoggedin');
	}

	public function index()
	{
		if($this->input->post()) {
		$email = $this->input->post('email');
		$pwd = md5($this->input->post('password'));

		$data = array (
			'password'=>$pwd,
			'email'=>$email,

		);

		$row = $this->Mdl_Login->login($email,$pwd);
		if($row == true) {
			$usersdata = array(
				'id' => $row['id'],
				'fname' => $row['fname'],
        'lname' => $row['lname'],
				'email' => $row['email'],
				//'phone' => $row['phone'],
        //'gender' => $row['gender'],
        'address' => $row['address'],
        'date' => $row['date'],
        'country' => $row['country'],
				'state' => $row['state'],
				'isLoggedin' => true
			);

			$this->session->set_userdata($usersdata);
			redirect(base_url() . "index.php/admin/dashboard");


		} else {

			$datas['error'] = "Invalid Email or Password";
			$this->load->view('admin/login', $datas);

		}

  	}

		$this->load->view('admin/login');
	}

	public function createLogin() {

	}
}
