<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends CI_Model {

  public function getCategory() {
    $query = $this->db->get('category');
    return $query->result();
  }

  public function editCategory($id) {
    $query = $this->db->get_where('category', array('id' => $id))->result();
    return $query;
  }

}
