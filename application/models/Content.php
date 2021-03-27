<?php
class Content extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    public function get_content($number = 10, $start = 0)
    {
		
		
        $this->db->select();
        $this->db->from('content');
        $this->db->order_by('createdAt','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result_array();
		
    }
}
?>