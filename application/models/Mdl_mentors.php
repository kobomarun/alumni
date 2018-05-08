<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_mentors extends CI_Model {

	function getAllMentors() {
		$this->db->order_by('id','desc');
		$this->db->where('mentor',1);
		//$this->db->where('mentor',3);
    $query = $this->db->get('am_users');
    return $query->result();
  }

	function checkMyMentorExist($id) {
		$query = $this->db->get_where('mentor_list', array('menteeid'=>$id));
    return $query->result();
	}

	function checkMentorRequest($id) {
		$this->db->select('*');
		$this->db->from('mentor_list');
		$this->db->where('mentorid', $id);
		$this->db->where('confirmed', 2);
		$countMentor = $this->db->count_all_results();
		return $countMentor;

	}

	function getSearch($query) {

	    $this->db->select();
	    $this->db->from('education');
	    $this->db->like('school_name',$query, 'after');

	    $result = $this->db->get()->result();
	    return $result;

  }


}
