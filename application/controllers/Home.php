<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://localhost/index.php/home
	 *	- or -
	 * 		http://localhost/index.php/home/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://localhost.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->library('pagination');
		$data['title'] = 'Blog using PHP(CI) & MySQL';
		$category = '';
		if($this->input->get()){
			$inputGet = $data['inputGet'] = $this->input->get();
			if(isset($inputGet['category'])){
			$category = $inputGet['category'];	
			}
		}
		$this->load->model('content');	
		/* pagination per page 5 out of total records */
		
		$config['base_url'] = base_url('/home');
		$config['total_rows'] = $this->content->getCount($category);
		$config['per_page'] = 3;
        $config["uri_segment"] = 2;
		if(count($this->input->get()) > 0){
			$config["suffix"] = '?' . http_build_query($this->input->get(), '', "&");
			$config['first_url'] = $config['base_url'].'?'.http_build_query($this->input->get());
		}
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		$data["links"] = $this->pagination->create_links();
		$data['content'] = $this->content->get_content($category,'',$config["per_page"], $page);
		$data['category'] = $this->content->get_category();
		
		$this->load->view('home', $data);
	}
}
