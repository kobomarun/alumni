<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_profile extends CI_Model {
	function getEducation($id) {
    $query = $this->db->get_where('education', array('userid'=>$id));
    return $query->result();
  }

	function getSecondayEducation($id) {
    $query = $this->db->get_where('education', array('userid'=>$id, 'type'=>'s'));
    return $query->result();
  }

	function getTertiaryEducation($id) {
    $query = $this->db->get_where('education', array('userid'=>$id, 'type'=>'t'));
    return $query->result();
  }

	function getMasterEducation($id) {
    $query = $this->db->get_where('education', array('userid'=>$id, 'type'=>'m'));
    return $query->result();
  }

	function getDoctorEducation($id) {
    $query = $this->db->get_where('education', array('userid'=>$id, 'type'=>'d'));
    return $query->result();
  }

	function getExperience($id) {
    $query = $this->db->get_where('experience', array('userid'=>$id));
    return $query->result();
  }

	function getMembership($id) {
    $query = $this->db->get_where('membership_cert', array('userid'=>$id));
    return $query->result();
  }

	function getPersonalSummary($id) {
    $query = $this->db->get_where('personal_summary', array('userid'=>$id));
    return $query->result();
  }

	function getProfileImage($id) {
    $query = $this->db->get_where('am_users', array('id'=>$id));
    return $query->row_array();
  }

	function getCertificate($id) {
    $query = $this->db->get_where('certificate', array('userid'=>$id));
    return $query->result();
  }

	function searchUni($search_item) {
    $this->db->select('*');
      $this->db->from('uni_schools');
      $this->db->like('name', $search_item);
      //$this->db->limit(8);
      $result = $this->db->get()->result();
      return $result;
  }

	function searchSec($search_item) {
    $this->db->select('*');
      $this->db->from('sec_schools');
      $this->db->like('name', $search_item);
      //$this->db->limit(8);
      $result = $this->db->get()->result();
      return $result;
  }

}
