<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->model("Login_model");
  }

	public function index()
	{
		$data['page_title'] = "Login";
		$this->load->view('template/header',$data);
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	public function authenticate() {
		if($this->input->post('submit')) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run() == false)
			{
				redirect('login');
			}
			else
			{
				//gets input
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));

				//verify user

				$row= $this->Login_model->verify_user($email,$password);
				if($row == true)
					{
						$userSessionData = array(
							'id' => $row['id'],
							'fname' => $row['fname'],
							'lname' => $row['lname'],
							'email' => $row['email'],
							'type' => $row['type'],
							'mentor' => $row['mentor'],
							'title' => $row['title'],
							'isLoggedIn' => true
						);


					//$user_id = $this->session->userdata('user_id');
					//$datetime = date('Y-m-d-H:i:s');
					//$this->Users_model->update_last_login($datetime,$user_id);
					$this->session->set_userdata($userSessionData);
					redirect(base_url());
				} else {

					$this->session->set_flashdata('error', 'Invalid emai or password');
					redirect('Login');
				}
			}
		}

	}

	public function signout() {
		$this->session->sess_destroy();
		$this->session->set_flashdata('error', 'You have successfully signed out');
		redirect('login');
	}
}
