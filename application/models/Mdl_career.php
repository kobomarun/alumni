<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_career extends CI_Model {

	function allCareer() {
		$this->db->order_by("id","DESC");
    $query = $this->db->get('couse_guide');
    return $query->result();
  }

  function getFilter($query) {
		if($query != "All") {
			$title = $this->db->get('couse_guide')->result();
			foreach($title as $row) {

	    $this->db->select();
	    $this->db->from('couse_guide');
	    $this->db->like('title',$query, 'after');

	    $result = $this->db->get()->result();
	    return $result;
		}
	} else {
		$title = $this->db->get('couse_guide')->result();
		foreach($title as $row) {

    $this->db->select();
    $this->db->from('couse_guide');
    //$this->db->like('title',$query, 'after');

    $result = $this->db->get()->result();
    return $result;
		}
	}

  }

	function viewCareer($id) {
		$query = $this->db->get_where('couse_guide', array('id' => $id));
		if($query->num_rows() == 1) {

		 $row =  $query->row_array();
		 return $row;
		} else {

		 return false;
		}
	}

	function randomPost() {
		$this->db->order_by('id', 'RANDOM');
    $this->db->limit(3);
    $query = $this->db->get('couse_guide');
    return $query->result();
	}

	function getCoursePost() {
		$this->db->order_by("id","RANDOM");
		$this->db->limit(4);
    $query = $this->db->get_where('couse_guide', array('type'=>'course'));
    return $query->result();
	}

}
