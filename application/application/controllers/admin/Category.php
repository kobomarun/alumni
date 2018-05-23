<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct() {
		parent::__construct();

	 	if (!$this->session->userdata('isLoggedin')) {
		redirect( "index.php/admin/login" );
		}
    $this->load->model("admin/CategoryModel");
	}

	public function index() {
		$data['view'] = $this->CategoryModel->getCategory();
		$this->load->view('admin/template/header');
		$this->load->view('admin/view-category',$data);
		$this->load->view('admin/template/footer');
	}

	public function createCategory() {
		$this->load->view('admin/template/header');
		$this->load->view('admin/create-category');
		$this->load->view('admin/template/footer');
	}

	public function addCategory() {
		$data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description')
		);

		$insert = $this->db->insert('category', $data);

		if($insert) {
			$this->session->set_flashdata('sucess', 'Category Successfully Added');
			redirect('admin/category');
		} else {
			echo "Something went wrong!!!";
		}
	}

	public function editCategory($id) {
		$id = $this->uri->segment(4);
		$data['edit'] = $this->CategoryModel->editCategory($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/edit-category', $data);
		$this->load->view('admin/template/footer');
	}

	public function updateCategory() {
		$data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description')
		);
		$this->db->where('id',$this->input->post('id'));
		
		$update = $this->db->update('category',$data);
		if($update) {
			$this->session->set_flashdata('sucess', 'Category Successfully Updated]');
			redirect('admin/category');
		} else {
			echo "Something went wrong!!!";
		}

	}

}
