<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
	
	function __construct() 
	{
		parent::__construct();
	}
	
	public function get_login_data($id){
        $query = $this->db->select("*")->from('tbl_admin')->where(['id'=>$id])->get();
	    $result = $query->row_array();
		return $result;
    }
	
	
		
}