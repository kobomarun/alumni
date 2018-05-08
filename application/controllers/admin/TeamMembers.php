<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeamMembers extends CI_Controller {

	public function __construct() {
		parent::__construct();

	 	if (!$this->session->userdata('isLoggedin')) {
		redirect( "index.php/admin/login" );
		}
    $this->load->model("admin/Mdl_Team");
	}

  public function index() {
    $data['view'] = $this->Mdl_Team->getTeamMembers();
    $this->load->view('admin/template/header');
		$this->load->view('admin/viewTeam', $data);
    $this->load->view('admin/template/footer');
  }

	public function addTeam()
	{
    $this->load->model("admin/Mdl_Team");
    if($this->input->post('userfile')) {
      $config['upload_path'] = './uploads/profile/';
			$config['allowed_types'] = 'jpeg|jpg|gif|png';
			$config['overwrite']  = false;
			$config['remove_spaces']  = true;
			$config['image_width']  = '200';
			$config['image_height']  = '200';

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$pic_error = array('pic_error' => $this->upload->display_errors());

				$this->load->view('admin/addteam', $pic_error);
			}

      else {
        $data1 = $this->upload->data();
			  $data = array (
    			'name'=>$this->input->post('name'),
    			'position'=>$this->input->post('position'),
          'fb'=>$this->input->post('fb'),
          'tw'=>$this->input->post('tw'),
          'gplus'=>$this->input->post('gplus'),
          'img' =>  $data1['file_name']
    		);

    		$row = $this->Mdl_Team->insertTeam($data);
    		if($row) {

    			$this->session->set_flashdata('success', 'Team Member Successfully added');
    			redirect(base_url() . "index.php/admin/TeamMembers");


    		} else {

    			$datas['error'] = "one or two fields are incorrect";
          $this->load->view('admin/template/header');
      		$this->load->view('admin/addTeam');
          $this->load->view('admin/template/footer');

    		}

      }

  	}
    $this->load->view('admin/template/header');
		$this->load->view('admin/addTeam');
    $this->load->view('admin/template/footer');
	}
}
