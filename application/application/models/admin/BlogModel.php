<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogModel extends CI_Model {

  public function getBlogPost() {
    $query = $this->db->get('blog');
    return $query->result();
  }

  public function insertBlog($data) {
    $query = $this->db->insert("blog",$data);
    return $query;
  }

}
