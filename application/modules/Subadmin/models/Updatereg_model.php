<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Updatereg_model extends CI_Model
{	
    public $table_name = 'tbl_admin';
	
	public function set_user_data($id) {
	    $set_array = array( 
			
			'name'             => $this->input->post('name'),
			'mob_num'              => $this->input->post('mobile'),
			'email'            => $this->input->post('email'),
			'address'             => $this->input->post('address'),
		); 
		$this->db->where('id',$id);
	    $query = $this->db->insert($this->table_name,$set_array);
	    return $query;
    }

	
	 public function get_session_data($id){
	    $query =$this->db->select('*')->from($this->table_name)->where('id',$id)->get(); 
	    $result = $query->row_array();
		return $result;
		
	}

   

	
	
		
}