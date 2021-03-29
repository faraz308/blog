<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
			if($this->session->userdata('user_name')){
			redirect( base_url('dashboardController') ); 
		}
	}
   
	public function authenticate(){
	    $data['title'] = 'Blog - Login';
		$this->form_validation->set_rules('userName', 'Username', 'trim|required|min_length[5]|max_length[30]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');
		if ($this->form_validation->run() === FALSE)
		{  
		    $this->load->view('login', $data);
		}
		else
		{   
			$data = [
			'userName' => $this->input->post('userName'),
			'password' => md5($this->input->post('password')),
			];
			
			$this->load->model('login');
			$check = $this->login->auth_check($data);
			//var_dump($check);exit;
			if($check != false ){
				$sessionData = array(
				'user_id' => $check->id,
				'user_name' => $check->userName
				);
				$this->session->set_userdata($sessionData);
				redirect( base_url('/dashboardController') ); 
			} else {
				$this->session->set_flashdata('wrongcreds','userName and Password doesn\'t match');
			}
			$this->load->view('login');
		}
		
	}


}	
?>