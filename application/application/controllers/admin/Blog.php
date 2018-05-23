<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct() {
		parent::__construct();

	 	if (!$this->session->userdata('isLoggedin')) {
		redirect( "index.php/admin/login" );
		}
    $this->load->model("admin/BlogModel");
		$this->load->model("admin/CategoryModel");

	}

  public function index() {
    $data['view'] = $this->BlogModel->getBlogPost();
		$data['cat'] = $this->CategoryModel->getCategory();
    $this->load->view('admin/template/header');
		$this->load->view('admin/blogpost', $data);
    $this->load->view('admin/template/footer');
  }

	public function add() {
		$data['cat'] = $this->CategoryModel->getCategory();
    $this->load->view('admin/template/header');
		$this->load->view('admin/add-post', $data);
    $this->load->view('admin/template/footer');
  }


		public function do_upload() {
				$config['upload_path'] = './images/';
				$config['allowed_types'] = 'jpeg|jpg|png|gif';
				$config['overwrite']  = false;
				$config['remove_spaces']  = true;
				$config['max_size'] = '2048000';
				$config['image_width']  = '768';
				$config['image_height']  = '1024';

				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload())
				{
					$pic_error = array('pic_error' => $this->upload->display_errors());

					$this->load->view('admin/template/header');
					$this->load->view('admin/add-post', $pic_error);
					$this->load->view('admin/template/footer');

				}

				else {
					$data1 = $this->upload->data();
					$data = array (
						'title'=>$this->input->post('title'),
						'content'=>$this->input->post('content'),
						'img' =>  $data1['file_name'],
						'status'=> 1,
						'catid' => $this->input->post('catid'),
						'date'=> date("M, j, Y")
					);

					$row = $this->BlogModel->insertBlog($data);
					if($row) {

						$this->session->set_flashdata('success', 'Blog Post Successfully added');
						redirect(base_url() . "admin/blog");


					} else {

						$datas['error'] = "one or two fields are incorrect";
						$this->load->view('admin/template/header');
						$this->load->view('admin/add-post');
						$this->load->view('admin/template/footer');

					}

				}
		}


}
