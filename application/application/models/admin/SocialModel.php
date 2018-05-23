<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SocialModel extends CI_Model {

  public function getSocials() {
    $query = $this->db->get('socials');
    return $query->result();
  }

}
