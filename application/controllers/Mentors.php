<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentors extends CI_Controller {

	function __construct() {
		parent:: __construct();
		error_reporting(0);

		$this->load->model('Mdl_mentors');
	}


	public function index()
	{
		$id = $this->session->userdata('id');
		$data['page_title'] = "Mentoring alumni";
		if(!$this->session->userdata('isLoggedIn')) {
			$data['mentors'] = $this->Mdl_mentors->getAllMentors();
			$data['checkMentor'] = $this->Mdl_mentors->checkMyMentorExist($id);

			$this->load->view('template/header',$data);
			$this->load->view('mentor-landing',$data);
			$this->load->view('template/footer');
		} else {

		$data['page_title'] = "Mentoring alumni";
		//check education table if alumni has filled education form
		$check = $this->db->get_where('education', array('userid'=>$id));
		$query = $check->result();
		foreach($query as $row) {
			$mm[] = $row->school_name;
		}
		if($check->num_rows() == 2 || $check->num_rows() == 3 || $check->num_rows() == 4) {
			$data['skul_1'] = $mm[0];
			$data['skul_2'] = $mm[1];
			$data['skul_3'] = $mm[2];

			$this->db->where('school_name',$mm[0]);
			$this->db->where('type','s');
			$this->db->where('mentor','1');
			$this->db->where('mentor','3');
			$data['skul1'] = $this->db->get('education')->result();

			$this->db->where('school_name',$mm[1]);
			$this->db->where('type','t');
			$this->db->where('mentor','1');
			$this->db->where('mentor','3');
			$data['skul2'] = $this->db->get('education')->result();

			$this->db->where('school_name',$mm[2]);
			$this->db->where('type','m');
			$this->db->where('mentor','1');
			$this->db->where('mentor','3');
			$data['skul3'] = $this->db->get('education')->result();

			$data['mentor'] = $this->Mdl_mentors->getAllMentors();
			$data['checkMentor'] = $this->Mdl_mentors->checkMyMentorExist($id);

			$this->load->view('template/header',$data);
			$this->load->view('mentor-landing-login',$data);
			$this->load->view('template/footer');
		} else {
		$this->session->set_flashdata("complete", "You need to complete your profile before you access mentors page");
		redirect("profile/updateprofile");
		}
	}
	}

	function addMentors() {

		$id = $this->input->post('id');
		//check if mentee has add upto 5 Mentors
		$this->db->where('menteeid', $this->session->userdata('id'));
		$this->db->from('mentor_list');
		$countMentor = $this->db->count_all_results();
		if($countMentor == 1) {
			echo "false";
		} else {



		$data = array(
			'mentorid' => $id,
			'menteeid' => $this->session->userdata('id'),
			'confirmed' => 2 ,// ask to be mentored.
			'disabled' => 1,
			'skul_type'=> $this->input->post('type')
		);

		$query = $this->db->insert('mentor_list', $data);
			if($query) {
				echo "true";
			} else {
				echo "false";
			}
		}

	}

	public function searchMentors($query) {
		$result = $this->Mdl_mentors->getSearch($query);
		if (!empty($result))
		 {
					foreach ($result as $row) {
						echo '<div class="col-sm-6 col-md-6">';
							echo '<div class="mentor">';
								echo '<div class="row">';
									echo '<div class="col-xs-3 col-sm-3 col-md-3 user_pic_area">';
										echo '<a href="#"><img class="img-responsive user_pic" src="' . base_url() . 'images/no_image_user.png" alt="profile-pic"></a>';
									echo '</div>';
									echo '<div class="col-xs-9 col-sm-9 col-md-9 user_content_area">';
										echo '<a href="#" class="link_alumni">';
											echo '<p class="user_id">' . strtoupper($this->db->get_where('am_users', array('id'=>$row->userid))->row()->fname ) . " " . strtoupper($this->db->get_where('am_users', array('id'=>$row->userid))->row()->lname) . '</p>';
											echo '<p class="user_detail"><span class="work">ALUMNI </span><span> - </span><span>';
												error_reporting(0);

											 echo $row->school_name . " | " .' </span></p>';
											echo '<p class="user_detail"><span class="work">WORK </span><span> - </span><span>'; if($this->db->get_where('experience', array('userid'=>$row->userid))->row()->userid==0) { echo "Not Completed"; } else {
											echo $this->db->get_where('experience', array('userid'=>$row->userid))->row()->company. ' </span></p>';
										echo '</a>';

											$q = $this->db->get_where('mentor_list', array('menteeid'=>$this->session->userdata('id')));
											echo '<div class="row button_options">';
												echo '<div class="col-md-12" >';
													echo '<form>';
														echo '<input type="submit" disabled value="Mentor added" class="add_mentor" onclick="confirmation(event, '. $row->id .','. $this->session->userdata('isLoggedIn').'") >';
													echo '</form>';
												echo '</div>';
											echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					}
		 		}
			}
	}


}
