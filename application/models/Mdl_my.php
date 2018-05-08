<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_my extends CI_Model {

	function getMyMentors($id) {
		$this->db->group_by('mentorid');
    $query = $this->db->get_where('mentor_list', array('menteeid'=>$id));
    return $query->result();
  }

	function getMyMentees($id) {
		$this->db->group_by('menteeid');
    $query = $this->db->get_where('mentor_list', array('mentorid'=>$id));
    return $query->result();
  }

	function countMentors($id) {
		$this->db->group_by('mentorid');
		$this->db->select('*');
		$this->db->from('mentor_list');
		$this->db->where('menteeid', $id);
		$query = $this->db->count_all_results();
		return $query;
	}

	function countMentees($id) {
		$this->db->group_by('menteeid');
		$this->db->select('mentorid');
		$this->db->from('mentor_list');
		$this->db->where('mentorid', $id);
		$query = $this->db->count_all_results();
		return $query;
	}

	function removeFromList($id, $tbl_name, $mid) {
		$query = $this->db->delete($tbl_name, array($mid=>$id));
		return $query;
	}

	function getUsers($id) {
		$query = $this->db->get_where('am_users', array('id'=>$id));
    return $query->result();
	}

}
