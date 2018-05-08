<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribers extends CI_Controller {

	public function __construct() {
		parent::__construct();

	 	if (!$this->session->userdata('isLoggedin')) {
		redirect( "index.php/admin/login" );
		}
	}

  public function index() {
		$data['email'] = $this->db->get_where('subscribers', array('type'=>'email'))->result();
    $data['phone'] = $this->db->get_where('subscribers', array('type'=>'phone'))->result();
    $this->load->view('admin/template/header');
		$this->load->view('admin/subscribers', $data);
    $this->load->view('admin/template/footer');
  }

	public function edit($id) {
		$id = $this->uri->segment(4);
		$data['sub'] = $this->db->get_where('subscribers', array('id'=>$id))->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/edit-subscribers', $data);
    $this->load->view('admin/template/footer');
  }

	public function update() {
		$data =array(
			'content' => $this->input->post('name'),
			'type' => $this->input->post('type')
		);

		$this->db->where('id',$this->input->post('id'));
		$insert = $this->db->update('subscribers', $data);
		if($insert) {
			redirect("admin/subscribers");
		}
	}

	public function delete($id) {
		$id = $this->uri->segment(4);
		$del = $this->db->where('id',$id);
		if($this->db->delete('subscribers')) {
			redirect("admin/subscribers");
		} else {
			echo "Nothing";
		}
	}



}
