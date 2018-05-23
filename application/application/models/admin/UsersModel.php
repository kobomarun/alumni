<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {

  public function getAllUsers() {
    $query = $this->db->get('am_users');
    return $query->result();
  }

}
