<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model("admin/MenuModel");
	}

	public function index()
	{
		$data['view'] = $this->MenuModel->getAllMenu();
		$data['sub'] = $this->MenuModel->getSubMenu();
		$data['footer'] = $this->MenuModel->getFooterMenu();

		$this->load->view('admin/template/header');
		$this->load->view('admin/viewmenu',$data);
		$this->load->view('admin/template/footer');
	}


	public function editMenu($id) {
		$id = $this->uri->segment(4);
		$data['edit']= $this->MenuModel->editMenu($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/editmenu',$data);
		$this->load->view('admin/template/footer');
	}

	public function updateMenu() {
		$id = $this->input->post('id');
		$data = array('name'=>$this->input->post('name'));
		$this->db->where('id',$id);
		$this->db->update('menu',$data);
		$this->session->set_flashdata('success', 'Menu Successfully Updated');
		redirect("admin/menu");
	}

	public function editSubMenu($id) {
		$id = $this->uri->segment(4);
		$data['edit']= $this->MenuModel->editSubMenu($id);
		$data['view'] = $this->MenuModel->getAllMenu();
		$this->load->view('admin/template/header');
		$this->load->view('admin/editsubmenu',$data);
		$this->load->view('admin/template/footer');
	}

	public function updateSubMenu() {
		$id = $this->input->post('id');
		$data = array('name'=>$this->input->post('name'),'parentid'=>$this->input->post('parent'));
		$this->db->where('id',$id);
		if($this->db->update('submenu',$data)) {
		$this->session->set_flashdata('success', 'Sub Menu Successfully Updated');
		redirect("admin/menu");
		} else { echo ""; }
	}

	public function editFooterMenu($id) {
		$id = $this->uri->segment(4);
		$data['edit']= $this->MenuModel->editFooterMenu($id);
		$data['view'] = $this->MenuModel->getAllMenu();
		$this->load->view('admin/template/header');
		$this->load->view('admin/editfootermenu',$data);
		$this->load->view('admin/template/footer');
	}

	public function updateFooterMenu() {
		$id = $this->input->post('id');
		$data = array('name'=>$this->input->post('name'));
		$this->db->where('id',$id);
		if($this->db->update('footerMenu',$data)) {
		$this->session->set_flashdata('success', 'Footer Menu Successfully Updated');
		redirect("admin/menu");
		} else { echo ""; }
	}


}
