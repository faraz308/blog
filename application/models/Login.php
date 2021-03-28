<?php
class Login extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function auth_check($data)
	{
		$query = $this->db->get_where('user', $data);
	
		if($query->num_rows() == 1){   
		   return $query->row();
		}
		return false;
	}
}
?>