<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct() {
		parent::__construct();

	 	if (!$this->session->userdata('isLoggedin')) {
		redirect( "index.php/admin/login" );
		}

    $this->load->model("admin/SocialModel");
	}

  public function Socials () {
		$data['view'] = $this->SocialModel->getSocials();
    $this->load->view('admin/template/header');
		$this->load->view('admin/socials', $data);
    $this->load->view('admin/template/footer');
  }

  public function Insert() {

    $link = $this->input->post('field');
    $name = $this->input->post('name');
    $id = $this->input->post('id');

    foreach($name as $index => $name) {
      $data = array(
        'name' => $name,
        'link' => $link[$index]
      );
    $this->db->where('id', $id[$index]);
      $this->db->update('socials', $data);

    }

    $this->session->set_flashdata('success', 'Updated Successfully');
    redirect("admin/settings/socials");
  }


}
