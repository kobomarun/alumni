<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CareerModel extends CI_Model {

  public function viewAll() {
    $this->db->order_by("id", "DESC");
    $query = $this->db->get('couse_guide');
    return $query->result();
  }
  public function viewAllCourse() {
    $this->db->order_by("id", "DESC");
    $query = $this->db->get_where('couse_guide',array('type'=>'course'));
    return $query->result();
  }

  public function editCareer($id)
  {
    $result = $this->db->get_where('couse_guide', array('id'=>$id));
    return $result->result();
  }

}
