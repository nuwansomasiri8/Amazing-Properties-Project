<?php

defined('BASEPATH') OR exit('No direct script access is allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->model('Homeview_model');
		$data['land']=$this->Homeview_model->getland();
		$data['house']=$this->Homeview_model->gethouse();
		$data['com']=$this->Homeview_model->getcom();
		if($this->session->userdata('userName')){

			$this->load->view('headerAfterSignup');
			$this->load->view('home',$data);
			$this->load->view('footer');
		}
		else{

			$this->load->view('header');
			$this->load->view('home',$data);
			$this->load->view('footer');
		}
		
	}


	public function showAddProperty() {
		if($this->session->userdata('userName')){
			$this->load->view('headerAfterSignup');
			$this->load->view('addProperty');
			$this->load->view('footer');
		}
		else{
			$this->load->view('signin');
		}
		
	}

	public function showhouses(){
		if($this->session->userdata('userName')){
			$this->load->view('headerAfterSignup');
			$this->load->view('lands');
			$this->load->view('footer');
		}
		else{
			$this->load->view('header');
			$this->load->view('lands');
			$this->load->view('footer');
		}

	}

	
}

?>
