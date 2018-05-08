<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentors extends CI_Controller {

	function __construct() {
		parent:: __construct();

		if(!$this->session->userdata('isLoggedIn')) {
			$this->session->set_flashdata('error', 'You will need to login to have access to the Mentors page');
			redirect('Login');
		}

		$this->load->model('Mdl_mentors');
	}


	public function index()
	{
		$id = $this->session->userdata('id');
		$data['page_title'] = "Mentoring alumni";
		//check education table if alumni is in the users table
		$check = $this->db->get_where('education', array('userid'=>$id));
		if($check->num_rows() == 2 || $check->num_rows() == 3) {
			//$checks = $this->db->get_where('education', array('userid'=>$id))->result();
			//foreach($checks as $row) {}

			$data['mentors'] = $this->Mdl_mentors->getAllMentors();
			$data['mentor'] = $this->Mdl_mentors->getAllMentors();
			$data['checkMentor'] = $this->Mdl_mentors->checkMyMentorExist($id);

			$this->load->view('template/header',$data);
			$this->load->view('mentor-landing',$data);
			$this->load->view('template/footer');
		} else
		$this->session->set_flashdata("complete", "You need to complete your profile before you access mentors page");
		redirect("profile/updateprofile");
	}

	function addMentors() {

		$id = $this->input->post('id');

		$data = array(
			'mentorid' => $id,
			'menteeid' => $this->session->userdata('id'),
			'confirmed' => 2 // ask to be mentored.
		);

		$query = $this->db->insert('mentor_list', $data);
			if($query) {
				echo "true";
			} else {
				echo "false";
			}

	}

}
