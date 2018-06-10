<?php

class Landview_model extends CI_model{

  public function viewlands(){
		$this->db->select('*');
		$this->db->from('property');
    $this->db->where('propertyType',"Land");
		$this->db->where('postState',"APPROVED");

		if($query=$this->db->get()){
			return $query->result_array();
		}
		else{
			return false;
		}

	}
  public function viewhouses(){
		$this->db->select('*');
		$this->db->from('property');
    $this->db->where('propertyType',"Houses");
    $this->db->where('postState',"APPROVED");

		if($query=$this->db->get()){
			return $query->result_array();
		}
		else{
			return false;
		}

	}
  public function viewcoms(){
		$this->db->select('*');
		$this->db->from('property');
    $this->db->where('propertyType',"Commercial Property");
		$this->db->where('postState',"APPROVED");

		if($query=$this->db->get()){
			return $query->result_array();
		}
		else{
			return false;
		}

	}






}



?>
