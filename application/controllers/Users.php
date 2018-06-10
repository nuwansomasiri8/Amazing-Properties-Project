<?php
defined('BASEPATH') OR exit('No direct script access is allowed');

class Users extends CI_Controller {

public function __construct() {
	parent::__construct();
	$this->load->model('User_model');
	$this->load->helper('url');
	$this->load->library('session');
	$this->load->model('Property_model');
	$this->load->library('form_validation');

}

public function index() {
	$this->load->view('signin');
}


public function registerUser() {
	$user = array(
		'firstName'=>$this->input->post('firstname'), 
		'lastName'=>$this->input->post('lastname'),
		'email'=>$this->input->post('email'),
		'telephone'=>$this->input->post('tpno'),
		'username'=>$this->input->post('username'),
		'password'=>md5($this->input->post('password'))
		);
	print_r($user);
	
	$email_check = $this->User_model->email_check($user['email']);
	$password_check = $this->User_model->passwordCheck($user['password']);
	$username_check = $this->User_model->userNameCheck($user['username']);
	if($email_check && $password_check && $username_check){
		$this->User_model->registerUser($user);
		$this->session->set_flashdata('success_msg','Registration Sucessfully.Now Login to Your Account');
		redirect('Users/index');
	}
	else{
		$this->session->set_flashdata('error_msg','Your E-mail or Password Already registered');
		redirect('Users/index');
	}	
}

public function loginUser(){
	$userLogin = array(
		'userEmail' => $this->input->post('username'),
		'userpassword'=>md5($this->input->post('password')) );
	$data=$this->User_model->loginUser($userLogin['userEmail'],$userLogin['userpassword']);
	if($data){
		$this->session->set_userdata('firstName',$data['firstName']);
		$this->session->set_userdata('lastName',$data['lastName']);
		$this->session->set_userdata('email',$data['email']);
		$this->session->set_userdata('telephoneNo',$data['telephone']);
		$this->session->set_userdata('userName',$data['username']);
		$this->load->model('Homeview_model');
		$data['land']=$this->Homeview_model->getland();
		$data['house']=$this->Homeview_model->gethouse();
		$data['com']=$this->Homeview_model->getcom();
		$this->load->view('headerAfterSignup');
		$this->load->view('home',$data);
		$this->load->view('footer');

	}
	else{
		 $this->session->set_flashdata('error_msg', 'Wrong UserName or Password');
		 $this->load->view("signin");
	}
}
public function userLogout(){
	$this->session->sess_destroy();
	redirect('Home/index','refresh');
}
public function loadAdminLogin(){
	$this->load->view('adminLogin');
}

public function loginAdminUser(){
	$userLogin = array(
		'userEmail' => $this->input->post('username'),
		'userpassword'=>$this->input->post('password') );
	$data=$this->User_model->loginAdminUser($userLogin['userEmail'],$userLogin['userpassword']);
	if($data){
		$this->session->set_userdata('userName',$data['userName']);
		$query = $this->Property_model->getAllPendingProperty();
		$data['PPROPERTIES'] = null;
		if($query){
			$data['PPROPERTIES'] = $query;
		}
		$this->load->view('basicAdmin');
		$this->load->view('pendingPosts',$data);



		

	}
	else {
		 $this->session->set_flashdata('error_msg', 'Error occured,Try again');
		 $this->load->view("adminLogin");
	}
}


}

?>