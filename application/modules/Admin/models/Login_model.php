<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{	
    public $table_name = 'tbl_admin';


    public function get_login_details($data){
		$this->db->select("*");
		$this->db->where('email', $data['email']);
		$this->db->where('password', md5($data['password']));
		$this->db->where('admin_level','1');
		$query = $this->db->get($this->table_name);
		$result = $query->row_array();
		if(empty($result)){
			$this->db->select("*");
			$this->db->where('email', $data['email']);
		    $this->db->where('password', md5($data['password']));
		    $this->db->where('admin_level','0');
			$query = $this->db->get($this->table_name);
			$result = $query->row_array();			
		}
		if(empty($result)){
		//	echo '<pre>';print_r($data);exit;
			$this->db->select("*");
			$this->db->where('email', $data['email']);
		    $this->db->where('password', md5($data['password']));
		    $this->db->where('admin_level','2');
			$query = $this->db->get($this->table_name);
			$result = $query->row_array();
				//echo '<pre>';print_r($result);exit;
		}
		return $result;
	}
	
	    public function admin_login(){	
		    $login_st_data = array(
			   'admin_last_login'  => date('Y-m-d H:i:s'),  
			      );
		  	$admin_result   = $this->db->update($this->table_name, $login_st_data);
		    return $admin_result;
		
	    }


	
	
		
}