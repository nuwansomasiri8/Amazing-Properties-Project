<?php

class Detail_model extends CI_model{

  public function viewland($id){
		$this->db->select('*');
		$this->db->from('property');
    $this->db->join('Users', 'Users.username = property.Users_username', 'inner');
		$this->db->where('idproperty',$id);

		if($query=$this->db->get()){
			return $query->row_array();
		}
		else{
			return false;
		}

	}
  public function viewhouse($id){
		$this->db->select('*');
		$this->db->from('property');
    $this->db->join('Users', 'Users.username = property.Users_username', 'inner');
		$this->db->where('idproperty',$id);

		if($query=$this->db->get()){
			return $query->row_array();
		}
		else{
			return false;
		}

	}
  public function viewcom($id){
		$this->db->select('*');
		$this->db->from('property');
    $this->db->join('Users', 'Users.username = property.Users_username', 'inner');
		$this->db->where('idproperty',$id);

		if($query=$this->db->get()){
			return $query->row_array();
		}
		else{
			return false;
		}

	}






}



?>
