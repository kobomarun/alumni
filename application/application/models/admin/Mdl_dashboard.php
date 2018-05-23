<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_dashboard extends CI_Model {

  public function countMentor() {
    $this->db->select('mentor');
    $this->db->from('am_users');
    $this->db->where('mentor',1);
    $query = $this->db->count_all_results();
    return $query;
  }

  public function countMentee() {
    $this->db->select('mentor');
    $this->db->from('am_users');
    $this->db->where('mentor',2);
    $query = $this->db->count_all_results();
    return $query;
  }

  public function countMenteeAndMentor() {
    $this->db->select('mentor');
    $this->db->from('am_users');
    $this->db->where('mentor',3);
    $query = $this->db->count_all_results();
    return $query;
  }

  public function countUsers() {
    $this->db->select('id');
    $this->db->from('am_users');
    $query = $this->db->count_all_results();
    return $query;
  }

}
