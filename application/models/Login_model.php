<?php

class Login_model extends CI_model
{
	
	function can_login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('data_admin');

		if ($query->num_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
}

?>