<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model
{	
    public $tbl_orders = 'tbl_orders';
    public $tbl_table = 'tbl_table';

	
	 public function get_tabledata(){
		$query = $this->db->select('*')->from($this->tbl_table)->get();
		$result = $query->result_array();
		return $result;
	 
	 }
	 
	 	 public function get_data($id){
			$query = $this->db->select('*')->from($this->tbl_orders)->where('t_id',$id)->get();
		    $result = $query->result_array();
		    return $result; 
		}
		
		
		
		 public function update_data($id){
			$data =array(
			     "status" =>1	 
				 );
		    $this->db->where('id',$id);
			$query = $this->db->update($this->tbl_orders,$data);
		    return $query; 
		}
		
		
		
		 public function cancelupdate_data($id){
			$data =array(
			     "status" =>2	 
				 );
		    $this->db->where('id',$id);
			$query = $this->db->update($this->tbl_orders,$data);
		    return $query; 
		}


    
	
	
		
}