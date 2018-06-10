<?php

defined('BASEPATH') OR exit('No direct script access is allowed');

class Detailview extends CI_Controller {

  public function index() {

    //$userid = $this->input->get('userid', TRUE);
    //$data['view'] = $this->Detail_model->viewmore_user(1);

    $this->load->view('header');
    $this->load->view('detailview');
    $this->load->view('footer');
}

 function viewmore(){
    if ($this->input->post('submit1')) {
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
    if ($this->input->post('submit2')) {
      $id=$this->input->post('id2');
      $this->load->model('Detail_model');
      $data['res'] = $this->Detail_model->viewhouse($id);
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
    if ($this->input->post('submit3')) {
      $id=$this->input->post('id3');
      $this->load->model('Detail_model');
      $data['res'] = $this->Detail_model->viewcom($id);
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


 


}
?>
