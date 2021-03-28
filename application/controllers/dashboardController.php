<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('user_name')){
			redirect( base_url('loginController/authenticate') ); 
		}
		
	}
   
    public function index() {
		
        $this->load->view('dashboard');
    }
	
	public function logout(){
		$userData = array('user_id' => '', 'user_name' => '');
        $this->session->set_userdata($userData);
		redirect( base_url('loginController/authenticate') ); 
	}
	

}	
?>