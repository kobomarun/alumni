<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepageModel extends CI_Model {
	function getAboutUs() {
		$query = $this->db->get_where('aboutus', array('type'=>'about'));
		return $query->result();
	}

	function getMentorBenefits() {
		$query = $this->db->get_where('aboutus', array('type'=>'mentor'));
		return $query->result();
	}

	function getMenteeBenefits() {
		$query = $this->db->get_where('aboutus', array('type'=>'mentee'));
		return $query->result();
	}

	function insertSlider($data) {
    $query = $this->db->insert('slider', $data);
    return $query;
  }

	function getSliders() {
    $query = $this->db->get('slider');
    return $query->result();
  }

	function editSlider($id) {
    $query = $this->db->get_where('slider', array('id'=>$id));
    return $query->result();
  }

	function getFeatures() {
    $query = $this->db->get('features');
    return $query->result();
  }

	function getCareer() {
		$this->db->order_by("id", "RANDOM");
		$this->db->limit(3);
    $query = $this->db->get('couse_guide');
    return $query->result();
  }

}
