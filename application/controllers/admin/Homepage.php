<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct() {
		parent::__construct();

	 	if (!$this->session->userdata('isLoggedin')) {
		redirect( "index.php/admin/login" );
		}
    $this->load->model("admin/homepageModel");
	}

  public function aboutus() {
    $data['about'] = $this->homepageModel->getAboutUs();
    $this->load->view('admin/template/header');
		$this->load->view('admin/aboutus', $data);
    $this->load->view('admin/template/footer');
  }

	public function updateAboutus() {
		$title = $this->input->post('title');
		$content = $this->input->post('content');

		$data = array(
			'title' => strtoupper($title),
			'content' => $content
		);
		$this->db->where('type', 'about');
		$update = $this->db->update('aboutus',$data);
		if($update) {
			$this->session->set_flashdata('success', 'About us page updated!!!');
			redirect('admin/homepage/aboutus');
		}  else {
			$this->session->set_flashdata('success', 'AWWW!!! Something went wrong');
			redirect('admin/homepage/aboutus');
		}
	}

	public function mentorBenefit() {
    $data['mentor'] = $this->homepageModel->getMentorBenefits();
    $this->load->view('admin/template/header');
		$this->load->view('admin/mentorbenefit', $data);
    $this->load->view('admin/template/footer');
  }

	public function updateMentors() {
		$title = $this->input->post('title');
		$content = $this->input->post('content');

		$data = array(
			'title' => strtoupper($title),
			'content' => $content
		);
		$this->db->where('type', 'mentor');
		$update = $this->db->update('aboutus',$data);
		if($update) {
			$this->session->set_flashdata('success', 'About us page updated!!!');
			redirect('admin/homepage/mentorBenefit');
		}  else {
			$this->session->set_flashdata('success', 'AWWW!!! Something went wrong');
			redirect('admin/homepage/mentorBenefit');
		}
	}

	public function menteeBenefit() {
    $data['mentee'] = $this->homepageModel->getMenteeBenefits();
    $this->load->view('admin/template/header');
		$this->load->view('admin/menteebenefit', $data);
    $this->load->view('admin/template/footer');
  }

	public function updateMentee() {
		$title = $this->input->post('title');
		$content = $this->input->post('content');

		$data = array(
			'title' => strtoupper($title),
			'content' => $content
		);
		$this->db->where('type', 'mentee');
		$update = $this->db->update('aboutus',$data);
		if($update) {
			$this->session->set_flashdata('success', 'About us page updated!!!');
			redirect('admin/homepage/menteeBenefit');
		}  else {
			$this->session->set_flashdata('success', 'AWWW!!! Something went wrong');
			redirect('admin/homepage/menteeBenefit');
		}
	}

	public function features() {
		$data['view'] = $this->homepageModel->getFeatures();
    $this->load->view('admin/template/header');
		$this->load->view('admin/viewfeatures', $data);
    $this->load->view('admin/template/footer');
	}

	public function addFeature() {
		$this->load->view('admin/template/header');
		$this->load->view('admin/addfeature');
    $this->load->view('admin/template/footer');
	}

	public function do_uploadFeatures() {
			$config['upload_path'] = './images';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['overwrite']  = false;
			$config['remove_spaces']  = true;
			$config['max_size'] = '5024';
			$config['image_width']  = '400';
			$config['image_height']  = '289';

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$pic_error = array('pic_error' => $this->upload->display_errors());

				$this->load->view('admin/template/header');
				$this->load->view('admin/addfeature', $pic_error);
		    $this->load->view('admin/template/footer');
			}

			else {
				$data1 = $this->upload->data();
				$data = array (
					'title'=>$this->input->post('title'),
					'text'=>$this->input->post('texx'),
					'img' =>  $data1['file_name'],
					'link'=> $this->input->post('link')
				);

				$row = $this->db->insert('features', $data);
				if($row) {

					$this->session->set_flashdata('success', 'Feature Successfully added');
					redirect(base_url() . "admin/homepage/features");


				} else {

					$datas['error'] = "one or two fields are incorrect";
					$this->load->view('admin/template/header');
					$this->load->view('admin/addSlider');
					$this->load->view('admin/template/footer');

				}

			}
	}

	public function viewSlider() {
    $data['view'] = $this->homepageModel->getSliders();
    $this->load->view('admin/template/header');
		$this->load->view('admin/viewSlider', $data);
    $this->load->view('admin/template/footer');
  }

	public function addSlider() {

		$this->load->view('admin/template/header');
		$this->load->view('admin/addSlider');
    $this->load->view('admin/template/footer');
	}

	public function do_upload() {
			$config['upload_path'] = './uploads/slider/';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['overwrite']  = false;
			$config['remove_spaces']  = true;
			$config['max_size'] = '2048000';
			$config['image_width']  = '768';
			$config['image_height']  = '1024';

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$pic_error = array('pic_error' => $this->upload->display_errors());

				$this->load->view('admin/addSlider', $pic_error);
			}

			else {
				$data1 = $this->upload->data();
				$data = array (
					'title'=>$this->input->post('title'),
					'description'=>$this->input->post('description'),
					'img' =>  $data1['file_name'],
					'link'=> $this->input->post('link'),
					'cta'=>$this->input->post('cta')
				);

				$row = $this->homepageModel->insertSlider($data);
				if($row) {

					$this->session->set_flashdata('success', 'Team Member Successfully added');
					redirect(base_url() . "admin/homepage/viewslider");


				} else {

					$datas['error'] = "one or two fields are incorrect";
					$this->load->view('admin/template/header');
					$this->load->view('admin/addSlider');
					$this->load->view('admin/template/footer');

				}

			}
	}

	public function editSlider() {
		$id = $this->uri->segment(4);
		$data['edit'] = $this->homepageModel->editSlider($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/editSlider',$data);
    $this->load->view('admin/template/footer');
	}

	public function processSlider() {
		$data = [
			'id'=> $this->input->post('id'),
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'cta'=>$this->input->post('cta'),
			'link'=>$this->input->post('link')
		];

		$this->db->where('id', $this->input->post('id'));
		$update = $this->db->update('slider', $data);

		if($update) {
			$this->session->set_flashdata('success', 'Slider Sucessfully edited!!!');
			redirect("admin/homepage/viewslider");
		} else {
			$this->session->set_flashdata('success', 'Something went wrong. Try again!!!');
			redirect("admin/homepage/viewslider");
		}

	}

	public function deleteSlider($id) {
		$id = $this->uri->segment(4);
		$this->db->where('id', $id);
		$del = $this->db->delete('slider');
		$this->session->set_flashdata("success", "Slider Successfully Deleted");
		redirect("admin/homepage/viewSlider");
	}

	public function deleteFeatures($id) {
		$id = $this->uri->segment(4);
		$this->db->where('id', $id);
		$del = $this->db->delete('features');
		$this->session->set_flashdata("success", "Features Successfully Deleted");
		redirect("admin/homepage/features");
	}
}
