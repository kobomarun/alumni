<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('isLoggedIn')) {
			$this->session->set_flashdata('success', 'Your session has expired, please login again');
			redirect('Login');
		}

		$this->load->model("Mdl_my");
		$this->load->model('Mdl_profile');
	}

	public function Mentees()
	{
		$data['page_title'] = "All My Mentees";
		$this->load->view('template/header',$data);
		$this->load->view('my-mentee');
		$this->load->view('template/footer');
	}

	public function Mentors()
	{
		$data['page_title'] = "All My Mentors";
		$id = $this->session->userdata('id');

		$data['myMentors'] = $this->Mdl_my->getMyMentors($id);
		$data['countMentors'] = $this->Mdl_my->countMentors($id);
		$data['countMentees'] = $this->Mdl_my->countMentees($id);
		$this->load->view('template/header',$data);
		$this->load->view('my-mentor', $data);
		$this->load->view('template/footer');
	}

	public function sendMessage() {
		$id = $this->input->post('id');
		$message = $this->input->post('message');
		$userid = $this->session->userdata('id');
		$time = date("F, j, Y");

		$data = array(
			'from_userid' => $userid,
			'from_msg' => $message,
			'to_userid' => $id,
			'time' => $time
		);

		$insert = $this->db->insert('messages', $data);
		if($insert) {
			$this->session->set_flashdata("success", "Message Successfully Sent");
			redirect("my/mentors");
		} else {
			echo false;
		}
	}

	public function viewProfile($id)
	{
		$id = $this->uri->segment(3);
		$data['users'] = $this->Mdl_my->getUsers($id);
		$data['edu'] = $this->Mdl_profile->getEducation($id);
		$data['cert'] = $this->Mdl_profile->getCertificate($id);
		$data['exp'] = $this->Mdl_profile->getExperience($id);
		$data['summary'] = $this->Mdl_profile->getPersonalSummary($id);

		$data['page_title'] = "My Profile";
		$this->load->view('template/header',$data);
		$this->load->view('view-men-profile', $data);
		$this->load->view('template/footer');

	}

	public function getMentees()
	{
		$data['page_title'] = "All My Mentors";
		$id = $this->input->post('id');

		$myMentees = $this->Mdl_my->getMyMentees($id);
		if(!empty($myMentees)) {
			foreach($myMentees as $row) {
			 echo '<div class="col-sm-6 col-md-6" >';
				echo ' <div class="mentor">';
					 echo '<div class="row">';
						 echo '<div class="col-xs-3 col-sm-3 col-md-3 user_pic_area">';
							echo ' <a href="#"><img class="img-responsive user_pic" src="' .base_url() .'images/rasheed.jpg" alt="user1"></a>';
						echo ' </div>';
						echo ' <div class="col-xs-9 col-sm-9 col-md-9 user_content_area">';
							 echo '<a href="'.base_url().'my/viewprofile/'.$row->mentorid.'" class="link_alumni">';
								echo ' <p class="user_id">';
									 echo $this->db->get_where('am_users', array('id'=>$row->menteeid))->row()->fname;
									 echo $this->db->get_where('am_users', array('id'=>$row->menteeid))->row()->lname;
									 echo '(MSc.) </p>';
								 echo '<p class="user_detail"><span class="work">ALUMNI </span><span> - </span><span>GCI | </span><span>LAUTECH | </span><span>City, Univ. of London UK</span></p>';
								echo ' <p class="user_detail"><span class="work">WORK </span><span> - </span><span> Founder/CEO DigiAfrik Tech. Ltd. UK |</span><span> MultiLinks Nig.</span></p>';
							 echo '</a>';
							echo ' <div class="row button_options">';
								 echo '<div class="col-md-12">';
									if($row->confirmed == 2) {
										echo '<a href="'.base_url().'my/confirmmentorship/'.$row->mentorid.'"><button class="add_mentor"> Confirm </button></a>';
										echo '<a href="'.base_url().'my/viewprofile/'.$row->mentorid.'"><button class="add_mentor"> Reject </button></a>';
								 } else {
									 echo ' <a href="<?php echo base_url(); ?>messaging/view/<?php echo $row->mentorid; ?>"><input type="button" value="Message" class="add_mentor"></a>';
									 echo '<a href="'.base_url().'my/viewprofile/'.$row->mentorid.'" class="link_alumni"><button class="add_mentor"> View Profile</button></a>';
								 }
								echo ' </div>';
							 echo '</div>';
						echo ' </div>';
					 echo '</div>';
				echo ' </div>';
			echo ' </div>';
	 		}
		} else {
			echo "<div style='margin-left:15px; font-weight:bold'>  Sorry, you do not currently have any mentee. </div>";

		}

	}

	public function getMentors()
	{
		$data['page_title'] = "All My Mentors";
		$id = $this->input->post('id');

		$myMentor = $this->Mdl_my->getMyMentors($id);
		if(!empty($myMentor)) {
			foreach($myMentor as $row) {
			 echo '<div class="col-sm-6 col-md-6" >';
				echo ' <div class="mentor">';
					 echo '<div class="row">';
						 echo '<div class="col-xs-3 col-sm-3 col-md-3 user_pic_area">';
							echo ' <a href="#"><img class="img-responsive user_pic" src="' .base_url() .'images/rasheed.jpg" alt="user1"></a>';
						echo ' </div>';
						echo ' <div class="col-xs-9 col-sm-9 col-md-9 user_content_area">';
							 echo '<a href="'.base_url().'my/viewprofile/'.$row->mentorid.'" class="link_alumni">';
								echo ' <p class="user_id">';
									 echo $this->db->get_where('am_users', array('id'=>$row->mentorid))->row()->fname;
									 echo $this->db->get_where('am_users', array('id'=>$row->mentorid))->row()->lname;
									 echo '(MSc.) </p>';
								 echo '<p class="user_detail"><span class="work">ALUMNI </span><span> - </span><span>GCI | </span><span>LAUTECH | </span><span>City, Univ. of London UK</span></p>';
								echo ' <p class="user_detail"><span class="work">WORK </span><span> - </span><span> Founder/CEO DigiAfrik Tech. Ltd. UK |</span><span> MultiLinks Nig.</span></p>';
							 echo '</a>';
							echo ' <div class="row button_options">';
								 echo '<div class="col-md-12">';
									echo ' <a href="'.base_url().'messaging/view/'.$row->mentorid.'"><input type="button" value="Message" class="add_mentor"></a>';
									 echo '<a href=" '.base_url() .'my/removeFromList/'. $row->mentorid .'/mentor_list/mentorid"><button class="add_mentor"> Remove </button></a>';
								echo ' </div>';
							 echo '</div>';
						echo ' </div>';
					 echo '</div>';
				echo ' </div>';
			echo ' </div>';
	 		}
		} else {
			echo "<div style='margin-left:15px; font-weight:bold'>  Sorry, you do not currently have any mentor. </div>";
		}

	}

	public function confirmMentorship($id){
		$id = $this->uri->segment(3);
		$data = array('confirmed'=>1);
		$this->db->where('mentorid', $id);
		$this->db->update('mentor_list', $data);
		redirect("my/mentors");
	}


	public function removeFromList($id, $tbl_name, $mid)
	{
		$id = $this->uri->segment(3);
		$tbl_name = $this->uri->segment(4);
		$mid = $this->uri->segment(5);

		$rem = $this->Mdl_my->removeFromList($id, $tbl_name, $mid);
		if($rem) {
			$this->session->set_flashdata('success', 'Mentor Successfully Removed');
			redirect('my/mentors');
		}

	}
}
