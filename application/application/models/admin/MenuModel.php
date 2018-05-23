<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {

	function getAllMenu() {
    $query = $this->db->get('menu');
    return $query->result();
  }

	function getFooterMenu() {
		$query = $this->db->get('footerMenu');
    return $query->result();
	}

	function editMenu($id) {
		$query = $this->db->get_where('menu',array('id'=>$id));
		return $query->result();
	}

	function getSubMenu() {
    $query = $this->db->get('submenu');
    return $query->result();
  }

	function editSubMenu($id) {
		$query = $this->db->get_where('submenu',array('id'=>$id));
		return $query->result();
	}

	function editFooterMenu($id) {
		$query = $this->db->get_where('footerMenu',array('id'=>$id));
		return $query->result();
	}

}
