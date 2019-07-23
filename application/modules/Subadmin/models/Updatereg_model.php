<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Updatereg_model extends CI_Model
{	
    public $table_name = 'tbl_admin';
	
	public function set_user_data($id) {
	    $set_array = array( 
			'name'               => $this->input->post('name'),
			'address'            => $this->input->post('address'),
			'email'              => $this->input->post('email'),
			'mob_num'            => $this->input->post('mobile'),
		); 
		$this->db->where('id',$id);
	    $query = $this->db->update($this->table_name,$set_array);
	    return $query;
    }

	
	 public function get_session_data($id){
	    $query =$this->db->select('*')->from($this->table_name)->where('id',$id)->get(); 
	    $result = $query->row_array();
		return $result;
		
	}

   

	
	
		
}