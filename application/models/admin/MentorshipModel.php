<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MentorshipModel extends CI_Model {

  public function getMentees() {
    $query = $this->db->get_where('am_users', array('mentor'=>2));
    return $query->result();
  }

  public function getMentors() {
    $query = $this->db->get_where('am_users', array('mentor'=>1));
    return $query->result();
  }

  public function showMentees($id) {
    $query = $this->db->get_where('mentor_list', array('mentorid'=>$id))->result();
    return $query;
  }

  public function showMentors($id) {
    $query = $this->db->get_where('mentor_list', array('menteeid'=>$id))->result();
    return $query;

  }

}
