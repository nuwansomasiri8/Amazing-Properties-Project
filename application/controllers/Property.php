<?php

defined('BASEPATH') OR exit('No direct script access is allowed');

class Property extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Property_model');
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->library('session');

	}
	
	public function insertProperty() {
		$this->load->library('form_validation');

		$config = array(
			'upload_path' =>"./uploads/" ,
			'allowed_types'=>"jpg|png|jpeg",
			'overwrite'=> TRUE,
			'max_size' => "4096000",
			'max_height'=>"768",
			'max_width'=>"2048"

			 );
		$this->load->library('upload',$config);
		if($this->upload->do_upload('imageName'))
		{
			$data = array('upload_data' => $this->upload->data());
			$upload_data = $this->upload->data();
			$file_name = $upload_data['file_name'];
			$property = array(
			'propertyType'=>$this->input->post('propertyType') ,
			'district'=>$this->input->post('district') ,
			'addressLine1'=>$this->input->post('addressL1') ,
			'addressLine2'=>$this->input->post('addressL2') ,
			'city'=>$this->input->post('city') ,
			'revenue'=>$this->input->post('revenue') ,
			'description'=>$this->input->post('description') ,
			'propertyType'=>$this->input->post('propertyType') ,
			'imgName'=> $file_name ,
			'Date'=> date("Y-m-d"),
				'curTime' =>date("Y-m-d H:i:s"),
			'Users_username'=>$this->session->userdata('userName') ,

			 );
			$this->Property_model->insertProperty($property);
			$this->session->set_flashdata('success_msg2', 'Your post has been added to the pending list');
			$this->loadPropertyDetails();
			
			
		}
		
		else {
			$error = array('error'=>$this->upload->display_errors());
			print_r($error);
			
		}
		
	}

	public function loadPendingPropertyDetails() {
		$userId = $this->session->userdata('userName'); 
		$query = $this->Property_model->getPendingProperty($userId);
		
	}


	public function loadPropertyDetails() {
		$userId = $this->session->userdata('userName'); 
		$query = $this->Property_model->getPendingProperty($userId);
		$data['PPROPERTIES'] = null;
		if($query){
			$data['PPROPERTIES'] = $query;
		}
		$query = $this->Property_model->getProperty($userId);
		$data['PROPERTIES'] = null;
		if($query){
			$data['PROPERTIES']= $query;
		}
		
		$this->load->view('headerAfterSignup');
		$this->load->view('propertylist',$data);
		$this->load->view('footer');

	}

	public function deleteProperty($propertyId) {
		
		$this->Property_model->dodDeleteProperty($propertyId);
		$this->session->set_flashdata('success_msg', 'Successfully Deleted');
		$this->loadPropertyDetails();

	}

	public function loadAllPendingPosts() {
		$query = $this->Property_model->getAllPendingProperty();
		$data['PPROPERTIES'] = null;
		if($query){
			$data['PPROPERTIES'] = $query;
		}
		$this->load->view('basicAdmin');
		$this->load->view('pendingPosts',$data);

	}

	public function loadPropertyForReview($propertyId) {
		$query = $this->Property_model->getOnePropertyForReview($propertyId);
		$data['PROPERTY'] = null;
		if($query){
			$data['PROPERTY'] = $query;
		}
		$this->load->view('basicAdmin');
		$this->load->view('propertyReview',$data);
	}

	public function loadPropertyForMoreInfo($propertyId) {
		$query = $this->Property_model->getOnePropertyForReview($propertyId);
		$data['PROPERTY'] = null;
		if($query){
			$data['PROPERTY'] = $query;
		}
		$this->load->view('basicAdmin');
		$this->load->view('viewMoreProperty',$data);
	}

	public function approveProperty($propertyId) {
		$this->Property_model->doApproveProperty($propertyId);
		$this->session->set_flashdata('success_msg', 'Successfully Approved');
		// load library
		//// set response format: xml or json, default json
		$this->nexmo->set_format('json');
		$from = 'Prime Property';
		$to = '+94717594991';
		$message = array('text' => 'PRIME ALERTS: New Offers are available. visit us: https://www.primepropertyservices.com ');
		$response = $this->nexmo->send_message($from, $to, $message);
		/*$this->nexmo->d_print($response);*/
		$this->loadAllPendingPosts();
	}


	public function deleteSubmittedPosts($propertyId){
		$this->Property_model->dodDeleteProperty($propertyId);
		$this->session->set_flashdata('success_msg', 'Successfully Deleted');
		$this->loadAllPendingPosts();

	}
	public function loadAllApprovedPosts() {
		$query1 = $this->Property_model->getAllApprovedProperty();
		$query2 = $this->Property_model->getAllApprovedPropertyForPagination();
		$data['APROPERTIES'] = null;
		if($query2){
			$data['APROPERTIES'] = $query2;
			$config['base_url'] = "http://localhost/primePropertyManagementSystem/index.php/Property/loadAllApprovedPosts/";
			$config['total_rows'] = $query1 	;
			$config['per_page'] = 4;

			$config['full_tag_open'] = '<ul class="pagination pagination-lg">';
			$config['full_tag_close'] = '</ul>';

			$config['first_tag_open'] = '<li>';
			$config['last_tag_open'] = '<li>';

			$config['next_tag_open'] = '<li>';
			$config['prev_tag_open'] = '<li>';

			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';

			$config['first_tag_close'] = '</li>';
			$config['last_tag_close'] = '</li>';

			$config['next_tag_close'] = '</li>';
			$config['prev_tag_close'] = '</li>';

			$config['cur_tag_open'] = '<li class="active"> <span> <b>';
			$config['cur_tag_close'] = '</b></span></li>';
			$this->pagination->initialize($config);

			$this->load->view('basicAdmin');
			$this->load->view('allApprovedProperties',$data);

		}

	}
	public function searchProperties() {
		$propertyType = $this->input->post('advance-search');
		$query = $this->Property_model->getApprovedSelections($propertyType);
		$data['SPROPERTIES'] =null;
		if($query) {
			$data['SPROPERTIES'] = $query;
			$this->load->view('basicAdmin');
			$this->load->view('loadSearchedProperties',$data);
		}
		else {
			$this->session->set_flashdata('no_result', 'no_result');
			$this->load->view('basicAdmin');
			$this->load->view('showingEmptyResult');
		}



	}


}