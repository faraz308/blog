<?php
class Content extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
    public function get_content($categoryId='', $number = 10, $start = 0)
    {
        $this->db->select();
        $this->db->from('content');
		if(!(empty($categoryId))){
			$this->db->where('categoryId', $categoryId);
		}
        $this->db->order_by('createdAt','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result_array();
		
    }
	public function get_category()
    {
        $this->db->select();
        $this->db->from('category');
        $query = $this->db->get();
        return $query->result_array();
		
    }
	
	public function get_content_by_category(){
	 $this->db->select();
     $this->db->from('content');
     $this->db->join('category', 'content.categoryId = category.id', 'INNER');
      $query = $this->db->get();
	 return $query->result_array();
	}
}
?>