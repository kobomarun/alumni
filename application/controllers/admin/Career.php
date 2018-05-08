<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("admin/CareerModel");
		if ( !$this->session->userdata('isLoggedin') ) {
		redirect( "admin/login" );
		}
		$this->load->model("admin/CategoryModel");
	}

	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/viewcareer');
		$this->load->view('admin/template/footer');
	}

	public function add() {
		$data['view'] = $this->CategoryModel->getCategory();
		$this->load->view('admin/template/header');
		$this->load->view('admin/add-career',$data);
		$this->load->view('admin/template/footer');
	}

	public function insertCareer() {
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$catid = $this->input->post('category');
		$title1 = $this->input->post('title1');
		$content1 =$this->input->post('content1');
		$title2 = $this->input->post('title2');
		$content2=$this->input->post('content2');
		$title3 = $this->input->post('title3');
		$content3 =$this->input->post('content3');
		$title4 = $this->input->post('title4');
		$content4 =$this->input->post('content4');
		$title5 = $this->input->post('title5');
		$content5 =$this->input->post('content5');
		$title6 = $this->input->post('title6');
		$content6 =$this->input->post('content6');
		$title7 = $this->input->post('title7');
		$content7 =$this->input->post('content7');
		$title8 = $this->input->post('title8');
		$content8 =$this->input->post('content8');
		$title9 = $this->input->post('title9');
		$content9 =$this->input->post('content9');


		$config['upload_path'] = './images/';
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
			$data = array(
				'title' => $title,
				'description' => $description,
				'catid' => $catid,
				'tab1' => $title1,
				'tab1_content' => $content1,
				'tab2' => $title2,
				'tab2_content' => $content2,
				'tab3' => $title3,
				'tab3_content' => $content3,
				'tab4' => $title4,
				'tab4_content' => $content4,
				'tab5' => $title5,
				'tab5_content' => $content5,
				'tab6' => $title6,
				'tab6_content' => $content6,
				'tab7' => $title7,
				'tab7_content' => $content7,
				'tab8' => $title8,
				'tab8_content' => $content8,
				'tab9' => $title9,
				'tab9_content' => $content9,
				'date' => date("M, j, Y"),
				'status' => 1,
				'img' => $data1['file_name'],
				'type' => 'career',
				'postby' => $this->session->userdata('id')
			);

			$row = $this->db->insert('couse_guide',$data);
			if($row) {

				$this->session->set_flashdata('success', 'Successfully added');
				redirect(base_url() . "admin/career/viewAll");


			} else {

				$datas['error'] = "one or two fields are incorrect";
				$this->load->view('admin/template/header');
				$this->load->view('admin/addSlider');
				$this->load->view('admin/template/footer');

			}
		}
	}

	public function viewAll()
	{
		$data['view']= $this->CareerModel->viewAll();
		$this->load->view('admin/template/header');
		$this->load->view('admin/viewCareer', $data);
		$this->load->view('admin/template/footer');
	}

	public function editCareer($id) {
		$id = $this->uri->segment(4);

		$data['result'] = $this->CareerModel->editCareer($id);

		$this->load->view('admin/template/header');
		$this->load->view('admin/edit-career',$data);
		$this->load->view('admin/template/footer');
	}

	public function updateCareer()
	{
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$title1 = $this->input->post('title1');
		$content1 =$this->input->post('content1');
		$title2 = $this->input->post('title2');
		$content2=$this->input->post('content2');
		$title3 = $this->input->post('title3');
		$content3 =$this->input->post('content3');
		$title4 = $this->input->post('title4');
		$content4 =$this->input->post('content4');
		$title5 = $this->input->post('title5');
		$content5 =$this->input->post('content5');
		$title6 = $this->input->post('title6');
		$content6 =$this->input->post('content6');
		$title7 = $this->input->post('title7');
		$content7 =$this->input->post('content7');
		$title8 = $this->input->post('title8');
		$content8 =$this->input->post('content8');
		$title9 = $this->input->post('title9');
		$content9 =$this->input->post('content9');
		$id = $this->input->post('id');

		$data = array(
			'title' => $title,
			'description' => $description,
			'tab1' => $title1,
			'tab1_content' => $content1,
			'tab2' => $title2,
			'tab2_content' => $content2,
			'tab3' => $title3,
			'tab3_content' => $content3,
			'tab4' => $title4,
			'tab4_content' => $content4,
			'tab5' => $title5,
			'tab5_content' => $content5,
			'tab6' => $title6,
			'tab6_content' => $content6,
			'tab7' => $title7,
			'tab7_content' => $content7,
			'tab8' => $title8,
			'tab8_content' => $content8,
			'tab9' => $title9,
			'tab9_content' => $content9,
			'date' => date("M, j, Y"),
			'status' => 1,
			'postby' => $this->session->userdata('id'),
			'type' => 'career'
		);

		$this->db->where('id', $id);
		$row = $this->db->update('couse_guide',$data);
		if($row) {

			$this->session->set_flashdata('success', 'Post Successfully Edited');
			redirect(base_url() . "admin/career/viewAll");


		} else {

			$datas['error'] = "one or two fields are incorrect";
			$this->load->view('admin/template/header');
			$this->load->view('admin/addSlider');
			$this->load->view('admin/template/footer');

		}

	}

	public function deleteCareer($id)
	{
		$id = $this->uri->segment(4);
		$this->db->where('id', $id);
		$del = $this->db->delete('couse_guide');
		$this->session->set_flashdata("success", "Post Successfully Deleted");
		redirect("admin/career/viewall");
	}

}
