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
		$data['title'] = 'Blog - Dashboard';
		$this->load->model('content');	
		$data['content'] = $this->content->get_content_by_category();
        $this->load->view('dashboard', $data);
    }
	
	public function logout(){
		$userData = array('user_id' => '', 'user_name' => '');
        $this->session->set_userdata($userData);
		redirect( base_url('loginController/authenticate') ); 
	}
	public function createContent (){
		$data['title'] = 'Blog - Create Content ';
		$this->load->model('content');	
		$data['category'] = $this->content->get_category();
		$this->form_validation->set_rules('contentTitle', 'content Title', 'trim|required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('contentDescription', 'content Description', 'trim|required');
		$this->form_validation->set_rules('contentCategory', 'content Category', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');
		if ($this->form_validation->run() === FALSE)
		{  
		   $this->load->view('createContent', $data);
		}
		else
		{ 
		$insertData = [
			'title' => $this->input->post('contentTitle'),
			'description' => $this->input->post('contentDescription'),
			'categoryId' => $this->input->post('contentCategory'),
			];
			
		
			$addContent = $this->content->addContent($insertData);
			if($addContent != false ){
				redirect( base_url('/dashboardController') ); 
			} else {
				$this->session->set_flashdata('wrongCreateContent','Something went wrong while adding new content');
			}
			$this->load->view('createContent', $data);
		}
		
	}
	

}	
?>