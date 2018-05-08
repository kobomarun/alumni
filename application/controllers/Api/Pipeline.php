<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pipeline extends CI_Controller {

	public function Login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('pass'));
		$response = $username . "--" . $password;
		$query =  $this->db->get_where('am_users',array('email'=>$username, 'pwd'=>$password));
		if($query->num_rows() == 1) {

		 $row =  $query->row_array();
		 $userSessionData = array(
			 'id' => $row['id'],
			 'fname' => $row['fname'],
			 'lname' => $row['lname'],
			 'email' => $row['email'],
			 'type' => $row['type'],
			 'type' => $row['mentor'],
			 'isLoggedIn' => true
		 );

		 $this->session->set_userdata($userSessionData);
		 echo json_encode($userSessionData);
	 }
	 else {
			echo json_encode('error');
		}
	}


}
