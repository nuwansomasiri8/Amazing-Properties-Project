<?php

defined('BASEPATH') OR exit('No direct script access is allowed');

class Lands extends CI_Controller {
  public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
	}




  function viewland(){


      $id=$this->input->post('id1');
      $this->load->model('Detail_model');
      $data['res'] = $this->Detail_model->viewland($id);
      if($this->session->userdata('userName')){

  			$this->load->view('headerAfterSignup');
  			$this->load->view('detailview',$data);
  			$this->load->view('footer');
  		}
  		else{

  			$this->load->view('header');
  			$this->load->view('detailview',$data);
  			$this->load->view('footer');
  		}





}


}
?>
