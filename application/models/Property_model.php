<?php
	class Property_model extends CI_model {

		public function insertProperty($property) {
			$this->db->insert('property',$property);
		}
		
		public function getProperty($userId){
			$this->db->select('*');
			$this->db->from('property');
			$this->db->where('postState',"APPROVED");
			$this->db->where('Users_username',$userId);	
			$query = $this->db->get();	
			return $query->result();	
		}

		public function getPendingProperty($userId){
			$this->db->select('*');
			$this->db->from('property');
			$this->db->where('postState',"PENDING");
			$this->db->where('Users_username',$userId);	
			$query = $this->db->get();
			return $query->result();
		}

		public function dodDeleteProperty($id) {
			$this->db->where('idproperty',$id);
			$this->db->delete('property');
		}


		public function getAllPendingProperty(){
			$this->db->select('*');
			$this->db->from('property');
			$this->db->where('postState',"PENDING");
			$query = $this->db->get();	
			return $query->result();	
		}

		public function getOnePropertyForReview($propertyId){
			$this->db->select('*');
			$this->db->from('property');
			$this->db->where('idproperty',$propertyId);
			$query = $this->db->get();
			return $query->result();
		}

		public function doApproveProperty($propertyId){
			$this->db->set('postState', "APPROVED");
			$this->db->where('idproperty', $propertyId);
			$this->db->update('property');
		}
		public function getAllApprovedPropertyForPagination(){
			$this->db->select('*');
			/*$this->db->from('property');*/
			$this->db->where('postState',"APPROVED");
			$this->db->order_by('Date',"DESC");
			$this->db->order_by('curTime',"DESC");
			$query = $this->db->get('property','4',$this->uri->segment(3));
			return $query->result();
		}

		public function getAllApprovedProperty(){
			$this->db->select('*');
			$this->db->from('property');
			$this->db->where('postState',"APPROVED");
			$this->db->order_by('Date',"DESC");
			$this->db->order_by('curTime',"DESC");
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function getApprovedSelections($propertyType){
			$this->db->select('*');
			$this->db->from('property');
			$this->db->where('postState',"APPROVED");
			$this->db->where('propertyType',$propertyType);
			$this->db->order_by('Date',"DESC");
			$this->db->order_by('curTime',"DESC");
			$query = $this->db->get();
			return $query->result();
		}

		






		
		

	}

?>