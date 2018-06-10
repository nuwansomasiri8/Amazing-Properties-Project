<?php

class Homeview_model extends CI_model{




	public function getland(){

    $query= "SELECT * FROM property WHERE idproperty=(SELECT MAX(idproperty) FROM property WHERE propertyType='Land') AND propertyType='Land' ";
		if($result=$this->db->query($query)){
			return $result->row_array();
		}
		else{
			return false;
		}

	}

  public function gethouse(){

    $query= "SELECT * FROM property WHERE idproperty=(SELECT MAX(idproperty) FROM property WHERE propertyType='Houses') AND propertyType='Houses' ";
		if($result=$this->db->query($query)){
			return $result->row_array();
		}
		else{
			return false;
		}

	}


  public function getcom(){

    $query= "SELECT * FROM property WHERE idproperty=(SELECT MAX(idproperty) FROM property WHERE propertyType='Commercial Property') AND propertyType='Commercial Property' ";
		if($result=$this->db->query($query)){
			return $result->row_array();
		}
		else{
			return false;
		}

	}





}



?>
