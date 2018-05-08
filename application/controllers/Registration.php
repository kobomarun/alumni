<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function index()
	{
		$data['page_title'] = "Registration";
		$this->load->view('template/header',$data);
		$this->load->view('registration');
		$this->load->view('template/footer');
	}

	public function saveUser()
	{
		if($this->input->post('submit')) {
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required|is_unique[am_users.email]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|matches[password]');
			$this->form_validation->set_rules('surname', 'Surname', 'trim|required');

			if($this->form_validation->run() == FALSE) {

				$data['page_title'] = "Registration";
				$this->load->view('template/header',$data);
				$this->load->view('registration');
				$this->load->view('template/footer');

			}
			else
			{
				$lname = $this->input->post('surname');
				$fname = $this->input->post('fname');
				$password = md5($this->input->post('password'));
				$email = $this->input->post('email');
				$mentor = $this->input->post('mentor');
				$title = $this->input->post('title');

				//Send Email here
				$message = "You registred on Alumi Menoring. <br /> Kindly verify your email by clicking the link below. <br />";
				 $this->load->library('email');
				 $this->email->set_mailtype("html");
				 $this->email->from('no_reply@alumnimentoring.com', 'Alumni Mentoring');
         $this->email->to($email);
         $this->email->subject('Confirm Your Registration');
         $this->email->message($message);
				 if($this->email->send())  {
					 $data = array(
	 					'fname' => $fname,
	 					'lname' => $lname,
	 					'email' => $email,
	 					'pwd' =>$password,
	 					'mentor' => $mentor,
	 					'title' => $title,
	 					'type' => 0,
	 					'date' => date("d-m-Y")
	 				);

	 				$insertUsers = $this->db->insert('am_users', $data);

	 				if($insertUsers) {
	 					$userSessionData = array(
	 						'email' => $email,
	 						'fname' => $fname,
	 						'lname' => $lname,
	 						'type' => 0,
	 						'id' =>$this->db->insert_id(),
	 						'isLoggedIn' => true
	 					);
	 					$this->session->set_userdata($userSessionData);
	 					$this->session->set_flashdata('complete', '<strong>Info!</strong>&nbsp;&nbsp; Complete your Registration here.');
	 					redirect('profile/updateprofile');
	 				}
	 				else { echo "not registred"; }

				} else {
					echo "There is problem sending email";
				}
				 }


		}
	}
}
