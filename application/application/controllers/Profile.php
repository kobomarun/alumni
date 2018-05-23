<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct() {
		parent::__construct();


		$this->load->model('Mdl_profile');
	}


	public function index() {
		if(!$this->session->userdata('isLoggedIn')) {
			$this->session->set_flashdata('success', 'Your session has expired, please login again');
			redirect('Login');
		}

		$id = $this->session->userdata('id');
		$data['edu'] = $this->Mdl_profile->getEducation($id);
		$data['sec'] = $this->Mdl_profile->getSecondayEducation($id);
		$data['ter'] = $this->Mdl_profile->getTertiaryEducation($id);
		$data['mas'] = $this->Mdl_profile->getMasterEducation($id);
		$data['dr'] = $this->Mdl_profile->getDoctorEducation($id);


		$data['cert'] = $this->Mdl_profile->getCertificate($id);
		$data['mem'] = $this->Mdl_profile->getMembership($id);
		$data['exp'] = $this->Mdl_profile->getExperience($id);
		$data['summary'] = $this->Mdl_profile->getPersonalSummary($id);
		$data['profile'] = $this->Mdl_profile->getProfileImage($id);


		$data['page_title'] = "My Profile";
		$this->load->view('template/header',$data);
		$this->load->view('user/view-profile', $data);
		$this->load->view('template/footer');

	}

	public function updateProfile() {
		$id = $this->session->userdata('id');
		$data['page_title'] = "Complete Your Profile";
		$data['profile'] = $this->Mdl_profile->getProfileImage($id);
		$this->load->view('template/header',$data);
		$this->load->view('user/update-profile');
		$this->load->view('template/footer');
	}

	public function updatePersonalSummary()	{

		$personal_summary = $this->input->post('personal_summary');
		$linkedin = $this->input->post('linkedin');
		$twitter = $this->input->post('twitter');
		$userid = $this->session->userdata('id');

		$data = array(
			'summary' => $personal_summary,
			'linkedin' => $linkedin,
			'twitter' => $twitter,
			'userid' => $userid
		);

		//$this->db->where('id',$id);
		$checkId = $this->db->get_where('personal_summary',array('userid'=>$userid));
		if($checkId->num_rows() != 1) {
			$this->db->insert('personal_summary', $data);
			echo true;
		}
		 else {
			echo "false";
		}

	}

	public function updateEducation() {
		$schoolName = $this->input->post('schoolName');
		$degree = $this->input->post('degree');
		$field = $this->input->post('field');
		$userid = $this->session->userdata('id');
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$award = $this->input->post('award');
		$activity = $this->input->post('activity');
		$type = $this->input->post('type');

		$data = array(
			'school_name' => $schoolName,
			'degree' => $degree,
			'field' => $field,
			'userid' => $userid,
			'year' => $from . " to " . $to,
			'awards' => $award,
			'activities' => $activity,
			'type' => $type,
			'mentor' => $this->input->post('mentor')
		);

		if($this->db->insert('education', $data)) {
			echo true;
		}
		 else {
			echo "false";
		}
	}

	public function addExperience() {

		$title = $this->input->post('title');
		$company = $this->input->post('company');
		$location = $this->input->post('location');
		$userid = $this->session->userdata('id');
		$type = $this->input->post('type');
		$from = $this->input->post('e_from');
		$to = $this->input->post('e_to');

		$this->db->where('userid',$userid);
		$count = $this->db->count_all_results('experience');
			$data = array(
				'title' => $title,
				'company' => $company,
				'location' => $location,
				'userid' => $userid,
				'frm' => $from,
				'too' => $to,
				'type' => $type
			);

			//$this->db->where('id',$id);
			$query = $this->db->insert('experience', $data);
			if($query) {
				echo "true";
			} else {
				echo "false";
			}
		}

	public function addCertificate() {
		$name = $this->input->post('name');
		$authority = $this->input->post('authority');
		$userid = $this->session->userdata('id');
		$this->db->where('userid',$userid);
		$count = $this->db->count_all_results('certificate');
		if($count != 5 && $count < 5 ) {
			$data = array(
				'name' => $name,
				'authority' => $authority,
				'userid' => $userid,
			);

			//$this->db->where('id',$id);
			$query = $this->db->insert('certificate', $data);
			if($query) {
				echo "true";
			} else {
				echo "false";
			}

		} else {
			echo "completed";
		}

	}

	public function addMembership() {
		$name = $this->input->post('name');
		$level = $this->input->post('level');
		$url = $this->input->post('url');
		$userid = $this->session->userdata('id');
		$this->db->where('userid',$userid);
		$count = $this->db->count_all_results('membership_cert');
		if($count != 5 && $count < 5 ) {
			$data = array(
				'name' => $name,
				'level' => $level,
				'userid' => $userid,
				'url'=> $url
			);

			//$this->db->where('id',$id);
			$query = $this->db->insert('membership_cert', $data);
			if($query) {
				echo "true";
			} else {
				echo "false";
			}
		}
		else {
			echo "completed";
		}


	}

	function editPersonalSummary() {
		$personal_summary = $this->input->post('personal_summary');
		$linkedin = $this->input->post('mylinkedin');
		$twitter = $this->input->post('twitter');
		$userid = $this->session->userdata('id');

		$data = array(
			'summary' => $personal_summary,
			'linkedin' => $linkedin,
			'twitter' => $twitter,
			'userid' => $userid
		);

		$this->db->where('userid', $userid);
		$update = $this->db->update('personal_summary', $data);

		if($update) {
			redirect('profile');
		} else {
			echo "not yet";
		}
	}

	public function editEducation() {
		$schoolName = $this->input->post('schoolName');
		$degree = $this->input->post('degree');
		$field = $this->input->post('field');
		$userid = $this->session->userdata('id');
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$award = $this->input->post('award');
		$activity = $this->input->post('activities');
		$type = $this->input->post('type');
		$id = $this->input->post('id');

		$data = array(
			'school_name' => $schoolName,
			'degree' => $degree,
			'field' => $field,
			'userid' => $userid,
			'year' => $from . " to " . $to,
			'awards' => $award,
			'activities' => $activity,
			'type' => $type
		);

		$this->db->where("id", $id);
		$update = $this->db->update('education', $data);

		if($update) {
			redirect('profile');
		} else {
			echo "not yet";
		}
	}

	public function editExperience() {
		$title = $this->input->post('title');
		$company = $this->input->post('company');
		$location = $this->input->post('location');
		$userid = $this->session->userdata('id');
		$type = $this->input->post('type');
		$from = $this->input->post('e_from');
		$to = $this->input->post('e_to');
		$id = $this->input->post('id');

		$data = array(
			'title' => $title,
			'company' => $company,
			'location' => $location,
			//'userid' => $userid,
			'frm' => $from,
			'too' => $to,
			'type' => $type
		);

		$this->db->where('id',$id);
		$query = $this->db->update('experience', $data);
		if($query) {
			redirect('profile');
		} else {
			echo "false";
		}
	}

	public function editCertificate() {
		$name = $this->input->post('name');
		$authority = $this->input->post('authority');
		$userid = $this->session->userdata('id');
		$id =$this->input->post('id');

		$data = array(
			'name' => $name,
			'authority' => $authority,
			'userid' => $userid,
		);

		$this->db->where('id',$id);
		$query = $this->db->update('certificate', $data);
		if($query) {
			redirect('profile');
		} else {
			echo "false";
		}

	}

	public function editMembership() {
		$name = $this->input->post('name');
		$url = $this->input->post('url');
		$level = $this->input->post('level');
		$userid = $this->session->userdata('id');
		$id =$this->input->post('id');

		$data = array(
			'name' => $name,
			'url' => $url,
			'level'=>$level,
			'userid' => $userid,
		);

		$this->db->where('id',$id);
		$query = $this->db->update('membership_cert', $data);
		if($query) {
			redirect('profile');
		} else {
			echo "false";
		}

	}

 	public function do_upload() {
			$config['upload_path'] = './uploads/profile/';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['overwrite']  = true;
			$config['remove_spaces']  = true;
			$config['max_size'] = '500';
			$config['image_width']  = '200';
			$config['image_height']  = '200';

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$pic_error = array('pic_error' => $this->upload->display_errors());

				$this->session->set_flashdata('success', 'Something went wrong with the picture you are trying to upload');
				redirect("profile");
			}

			else {
				$data1 = $this->upload->data();
				$data = array (
					'img' =>  $data1['file_name'],
				);
				$this->db->where('id', $this->session->userdata('id'));
				$row = $this->db->update('am_users',$data);
				if($row) {

					$this->session->set_flashdata('success', 'Profile Picture Successfully Changed');
					redirect("profile");


				} else {

					echo "AWWW!!! Something went wrong!!!";

				}

			}
	}

	 public function deleteSec($id) {
		$id = $this->uri->segment(3);

		$this->db->where('id', $id);
		$del = $this->db->delete('education');
		if($del) {
			$this->session->set_flashdata('success', 'Successfully Deleted!!!! ');
			redirect('profile');
		}
	}

	 public function deleteExp($id) {
				$id = $this->uri->segment(3);

		$this->db->where('id', $id);
		$del = $this->db->delete('experience');
		if($del) {
			$this->session->set_flashdata('success', 'Successfully Deleted!!!! ');
			redirect('profile');
		}
	}

	 function deleteCert($id) {
		$id = $this->uri->segment(3);

		$this->db->where('id', $id);
		$del = $this->db->delete('certificate');
		if($del) {
			$this->session->set_flashdata('success', 'Successfully Deleted!!!!');
			redirect('profile');
		}
	}

	 function deleteMembership($id) {
		$id = $this->uri->segment(3);

		$this->db->where('id', $id);
		$del = $this->db->delete('membership_cert');
		if($del) {
			$this->session->set_flashdata('success', 'Successfully Deleted!!!!');
			redirect('profile');
		}
	}

	function uniSearch() {
		$search_item = $this->input->post('search');
    $result = $this->Mdl_profile->searchUni($search_item);
    //return json_encode($products);
    if (!empty($result))
     {
          foreach ($result as $row):
		?>
               <li onclick="add2field('<?php echo $row->name; ?>');" id="load"><?php echo  $row->name . ",  " .$row->city; ?></li>
		<?php
          endforeach;
     }
     else
     {
           echo "<li> <em> School not found ... </em> </li>";
     }
	}

	function secSearch() {
		$search_item = $this->input->post('search');
    $result = $this->Mdl_profile->searchSec($search_item);
    //return json_encode($products);
    if (!empty($result))
     {
          foreach ($result as $row):
		?>
               <li onclick="add2sec('<?php echo $row->name; ?>');" id="sec"><?php echo  $row->name . ",  " .$row->city; ?></li>
		<?php
          endforeach;
     }
     else
     {
           echo "<li> <em> School not found ... </em> </li>";
     }
	}



}
