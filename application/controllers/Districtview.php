<?php

defined('BASEPATH') OR exit('No direct script access is allowed');

class Districtview extends CI_Controller {
  public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
	}




  public function showhouses(){
    $d=$this->input->post('district');
    $this->load->model('Districtview_model');
    $data['result'] = $this->Districtview_model->viewhousesd($d);
		if ($this->Districtview_model->viewhousesd($d)) {
			if($this->session->userdata('userName')){
				$this->load->view('headerAfterSignup');
				$this->load->view('houses',$data);
				$this->load->view('footer');
			}
			else{
				$this->load->view('header');
				$this->load->view('houses',$data);
				$this->load->view('footer');
			}
		}
		else {
			if($this->session->userdata('userName')){
				$this->session->set_flashdata('success8','NO HOUSES');
				$this->load->view('headerAfterSignup');
				$this->load->view('houses');
				$this->load->view('footer');
        unset($_SESSION["success8"]);

			}
			else{
				$this->session->set_flashdata('success8','NO HOUSES');
				$this->load->view('header');
				$this->load->view('houses');
				$this->load->view('footer');
				unset($_SESSION["success8"]);
			}

		}


	}
	public function showlands(){
    $d=$this->input->post('district');
    $this->load->model('Districtview_model');
    $data['result'] = $this->Districtview_model->viewlandsd($d);
		if ($this->Districtview_model->viewlandsd($d)) {
			if($this->session->userdata('userName')){
				$this->load->view('headerAfterSignup');
				$this->load->view('lands',$data);
				$this->load->view('footer');
			}
			else{
				$this->load->view('header');
				$this->load->view('lands',$data);
				$this->load->view('footer');
			}
		}
		else {
			if($this->session->userdata('userName')){
				$this->session->set_flashdata('success8','NO LANDS');
				$this->load->view('headerAfterSignup');
				$this->load->view('lands');
				$this->load->view('footer');
        unset($_SESSION["success8"]);

			}
			else{
				$this->session->set_flashdata('success8','NO LANDS');
				$this->load->view('header');
				$this->load->view('lands');
				$this->load->view('footer');
				unset($_SESSION["success8"]);
			}
		}


	}

	public function showcoms(){
    $d=$this->input->post('district');
    $this->load->model('Districtview_model');
    $data['result'] = $this->Districtview_model->viewcomsd($d);
		if ($this->Districtview_model->viewcomsd($d)) {
			if($this->session->userdata('userName')){
				$this->load->view('headerAfterSignup');
				$this->load->view('buildings',$data);
				$this->load->view('footer');
			}
			else{
				$this->load->view('header');
				$this->load->view('buildings',$data);
				$this->load->view('footer');
			}
		}
		else {
			if($this->session->userdata('userName')){
				$this->session->set_flashdata('success8','NO BUILDINGS');
				$this->load->view('headerAfterSignup');
				$this->load->view('buildings');
				$this->load->view('footer');
        unset($_SESSION["success8"]);
			}
			else{
				$this->session->set_flashdata('success8','NO BUILDINGS');
				$this->load->view('header');
				$this->load->view('buildings');
				$this->load->view('footer');
				unset($_SESSION["success8"]);
			}
		}


	}


}
?>
