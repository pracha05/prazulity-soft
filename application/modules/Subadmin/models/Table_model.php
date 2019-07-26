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

	 
	public function get_table_data(){
        $query = $this->db->select("*")->from($this->table_name)->order_by('id','desc')->get();
	    $result = $query->result_array();
		return $result;
    }
	
	public function get_single_record($id=''){
        $this->db->select("*");
		$this->db->from($this->table_name);
		if($id != ''){
			$this->db->where("id",$id);
			$query = $this->db->get();
			$result = $query->row_array();
		}
		return $result;
	}
	
	public function update_record($id) { 
	    $set_array = array( 
			'floor_num'       => $this->input->post('floor_num'),
			'table_name'      => $this->input->post('table_num'),
			'num_of_seats'    => $this->input->post('no_of_seats'),
		); 
		$this->db->where('id',$id);
	    $query = $this->db->update($this->table_name,$set_array);
	    return $query;
    }
	
	public function delete_record($id){
		$this->db->where('id',$id);
		$result = $this->db->delete($this->table_name); 
		return $result;
	}

   

	
	
		
}