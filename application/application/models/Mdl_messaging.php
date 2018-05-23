<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_messaging extends CI_Model {

	function getMessages($id){
		$this->db->distinct();
		$this->db->group_by('from_userid');
		$this->db->order_by('id', 'desc');
		//$this->db->limit(1);
    $query = $this->db->get_where('messages', array('to_userid'=>$id));
    return $query->result();
  }

	function retrieveFromMessages($from_id, $to_id) {
		//$this->db->order_by('time', 'asc');
		$query = $this->db->query("SELECT * FROM messages WHERE from_userid = '$from_id' AND to_userid= '$to_id' OR from_userid='$to_id' AND to_userid='$from_id'");

		return $query->result();

	}

	function retrieveToMessages($from_id, $to_id) {
		//$this->db->order_by('time', 'asc');
		$this->db->where('from_userid', $to_id);
		$this->db->where('to_userid', $from_id);
		$query = $this->db->get('messages');
    return $query->result();

	}

}
