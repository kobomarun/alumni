<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class career_guide extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("Mdl_career");
		//$this->load->model("Users_model");
	}

	public function index()
	{
		$data['page_title'] = "Student Career Guilde: Guilding student for their careers";
		$data['career'] = $this->Mdl_career->allCareer();
		$this->load->view('template/header', $data);
		$this->load->view('career-guide', $data);
		$this->load->view('template/footer');
	}

	public function read($id,$title) {
		$id = $this->uri->segment(3);
		$title = $this->uri->segment(4);
		$data['random'] = $this->Mdl_career->randomPost();
		$data['course'] = $this->Mdl_career->getCoursePost();
		$data['view'] = $this->Mdl_career->viewCareer($id);

		$data['page_title'] = $title;
		$this->load->view('template/header', $data);
		$this->load->view('view-guide', $data);
		$this->load->view('template/footer');
	}

	public function filter($query) {
		$result = $this->Mdl_career->getFilter($query);
		if (!empty($result))
     {
          foreach ($result as $row):
               echo "<div class='col-sm-4 col-md-4' id='result'>";
				 				echo "<div class='gallery'>";
				 					echo "<a  href='career_guide/read/". $row->id ."/". url_title($row->title) ."'>";
				 						echo "<img src='" . base_url() . "images/". $row->img ."'alt='Electrical Enigineer'>";
				 					echo "</a>";
				 					echo "<div class='desc'>". $row->title . "</div>";
				 				echo "</div>";
				 			echo "</div>";
          endforeach;
     }
     else
     {
           echo "<div class='filter-label'>  Sorry, no career found. </div>";
     }
	}
}
