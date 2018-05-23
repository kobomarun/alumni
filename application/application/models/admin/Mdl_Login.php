<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_Login extends CI_Model {

	function login($email,$pwd)
	{

		 $query =  $this->db->get_where('am_users',array('email'=>$email, 'pwd'=>$pwd, 'type' => 1));
		 if($query->num_rows() == 1) {

		 	$row =  $query->row_array();
		 	return $row;
		 } else {

		 	return false;
		 }
	}

}
