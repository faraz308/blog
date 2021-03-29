<?php
class Content extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
    public function get_content($categoryId='', $id='', $number = 10, $start = 0)
    {
        $this->db->select();
        $this->db->from('content');
		if(!(empty($categoryId))){
			$this->db->where('categoryId', $categoryId);
		}
		if(!(empty($id))){
			$this->db->where('id', $id);
		}
        $this->db->order_by('createdAt','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return (!empty($id)? $query->row_array() : $query->result_array());
		
    }
	 public function getCount($categoryId = '') {
		 if(!(empty($categoryId))){
			$this->db->where('categoryId', $categoryId);
		}
		$this->db->from("content");
        $result = $this->db->count_all_results();
		//echo $this->db->last_query();exit;
		return $result;
    }
	public function get_category()
    {
        $this->db->select();
        $this->db->from('category');
        $query = $this->db->get();
        return $query->result_array();
		
    }
	
	public function get_content_by_category(){
	 $this->db->select('content.id,content.title,content.description,category.categoryName');
     $this->db->from('content');
     $this->db->join('category', 'content.categoryId = category.id', 'INNER');
      $query = $this->db->get();
	 return $query->result_array();
	}
	
	public function addContent($data){
		$insert = $this->db->insert('content', $data);
		if ($insert) {
		   return $this->db->insert_id();
		} else {
		   return false;
		}
	}
	public function editContent($id,$data){
		$this->db->where('id', $id);
        $update = $this->db->update('content', $data);
		if ($update) {
		   return true;
		} else {
		   return false;
		}
	}
	public function deleteContent($id){
		$this->db->where('id', $id);
        $delete = $this->db->delete('content');
		if ($delete) {
		   return true;
		} else {
		   return false;
		}
	}
}
?>