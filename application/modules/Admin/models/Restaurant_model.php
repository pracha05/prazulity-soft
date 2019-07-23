<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant_model extends CI_Model
{	
    public $table_name = 'tbl_admin';

    public function exit_details()
	{
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->where('email',$this->input->post('email'));
		$query=$this->db->get();
		$result = $query->num_rows();						
		return $result;
	}	
	
	
	public function add_all_users()
	{		
		$set_data = array(
				'name'          => $this->input->post('name'),
				'email'         => $this->input->post('email'),
				'mob_num'       => $this->input->post('mobile'),
				'admin_level' 	=> 0,
				'created' 	    => date('Y-m-d H:i:s')
		);
		$result = $this->db->insert($this->table_name, $set_data); 
	    return $result;
    }	


	
	
		
}