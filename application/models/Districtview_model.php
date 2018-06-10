<?php

class Districtview_model extends CI_model{

  public function viewlandsd($d){
		$this->db->select('*');
		$this->db->from('property');
    $this->db->where('propertyType',"Land");
		$this->db->where('postState',"APPROVED");
    $this->db->where('district',$d);

		if($query=$this->db->get()){
			return $query->result_array();
		}
		else{
			return false;
		}

	}
  public function viewhousesd($d){
		$this->db->select('*');
		$this->db->from('property');
    $this->db->where('propertyType',"Houses");
    $this->db->where('postState',"APPROVED");
    $this->db->where('district',$d);

		if($query=$this->db->get()){
			return $query->result_array();
		}
		else{
			return false;
		}

	}
  public function viewcomsd($d){
		$this->db->select('*');
		$this->db->from('property');
    $this->db->where('propertyType',"Commercial Property");
		$this->db->where('postState',"APPROVED");
    $this->db->where('district',$d);

		if($query=$this->db->get()){
			return $query->result_array();
		}
		else{
			return false;
		}

	}






}



?>
