<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messaging extends CI_Controller {

	function __construct() {
		parent::__construct();

		if(!$this->session->userdata('isLoggedIn')) {
			$this->session->set_flashdata('success', 'Your session has expired, please login again');
			redirect('Login');
		}

		$this->load->model("Mdl_messaging");

	}

	public function index()
	{
		$data['page_title'] = "Messaging";
		$id = $this->session->userdata('id');

		$data['messages'] = $this->Mdl_messaging->getMessages($id);
		$this->load->view('template/header',$data);
		$this->load->view('chats', $data);
		$this->load->view('template/footer');
	}

	public function getMessages()
	{
		$from_id = $this->input->post('id');
		$to_id = $this->session->userdata('id');
		$fromMsg = $this->Mdl_messaging->retrieveFromMessages($from_id, $to_id);
		$toMsg = $this->Mdl_messaging->retrieveToMessages($from_id, $to_id);
		//print_r($fromMsg); exit ;
		foreach($fromMsg as  $frm) {
			//if($frm->$from_userid == $from_id) {
			if($frm->from_msg==NULL) { echo ""; } else {
			echo "
				<div class='row them'>
					<div class='col-md-12 col-lg-12'>
						<p class='ms_date_sent'>$frm->time</p>
					</div>
					<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
						<img class='img-responsive ms_pic' src='".base_url()."images/rasheed.jpg' alt='user1'>
					</div>
					<div class='col-xs-12 col-sm-12 col-md-12 col-lg-8'>
					<p>Message from ". $this->db->get_where('am_users',array('id'=>$frm->from_userid))->row()->fname." </p>
						<p class='ms_them'>$frm->from_msg</p>
					</div>
				</div>


			";
		 }
		}
		echo "<div class='row me' style='display: block' id='msg_sent'>

		</div>";
		//print_r($msg);
	}

	public function postData()
	{
		$id = $this->session->userdata('id');
		$toId = $this->input->post('id');
		$time = $this->input->post('time');
		$chat = $this->input->post('chat');

		$data = array(
			'from_userid' => $id,
			'to_userid' => $toId,
			'from_msg' => $chat,
			'time' => $time
		);

		$insert = $this->db->insert('messages',$data);

		if($insert) {
			echo true;
		} else {
			echo false;
		}
	}


}
