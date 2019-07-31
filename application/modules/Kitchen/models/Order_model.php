<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model
{	
    public $tbl_table = 'tbl_table';

	
	 public function get_tabledata(){
		$query = $this->db->select('*')->from($this->tbl_table)->get();
		$result = $query->result_array();
		return $result;
	 
	 }

    
	
	
		
}