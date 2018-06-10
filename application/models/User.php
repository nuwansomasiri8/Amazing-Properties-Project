<?php

class User extends CI_Model {

	function test_user(){
		echo "This is model function";
	}


	function insert_data($data) {
		$this->db->insert("users",$data); 
	}

}