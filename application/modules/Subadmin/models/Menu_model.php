<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model
{	
    public $table_name = 'tbl_menu';
	
	public function add_record($id) {
	    $set_array = array( 
			'suba_id'              => $id,
			'created_by'           => $id,
			'category'             => $this->input->post('category'),
			'sub_cat'              => $this->input->post('sub_category'),
			'item_name'            => $this->input->post('item_name'),
			'quantity'             => $this->input->post('quality'),
			'prise'                => $this->input->post('price'),
		); 
	    $query = $this->db->insert($this->table_name,$set_array);
	    return $query;
    }

	
	 public function get_session_data($id){
	    $query =$this->db->select('*')->from($this->table_name)->where('id',$id)->get(); 
	    $result = $query->row_array();
		return $result;
		
	}

   

	
	
		
}