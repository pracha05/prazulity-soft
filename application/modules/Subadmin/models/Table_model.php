<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Table_model extends CI_Model
{	
    public $table_name = 'tbl_table';
	
	public function add_record($id,$postData) { 
	//echo '<pre>';print_r($postData);exit;
	    $set_array = array( 
			'suba_id'         => $id,
			'floor_num'       => $this->input->post('floor_num'),
			'table_name'      => $this->input->post('table_num'),
			'num_of_seats'    => $this->input->post('no_of_seats'),
			'barcode'         => $postData['bar_code']
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