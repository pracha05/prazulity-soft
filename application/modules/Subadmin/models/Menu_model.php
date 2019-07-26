<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model
{	
    public $table_name = 'tbl_menu';
	
	public function get_menu_data(){
        $query = $this->db->select("*")->from($this->table_name)->order_by('id','desc')->get();
	    $result = $query->result_array();
		return $result;
    }
	
	public function add_record($id,$postData) {
	    $set_array = array( 
			'suba_id'              => $id,
			'created_by'           => $id,
			'category'             => $this->input->post('category'),
			'sub_cat'              => $this->input->post('sub_category'),
			'item_name'            => $this->input->post('item_name'),
			'quantity'             => $this->input->post('quality'),
			'prise'                => $this->input->post('price'),
			'barcode'              => $postData['bar_code'],
			'created'              => date('Y-m-d H:i:s')
		); 
	    $query = $this->db->insert($this->table_name,$set_array);
	    return $query;
    }
	
	public function update_record($id) { 
	    $set_array = array( 
			'category'             => $this->input->post('category'),
			'sub_cat'              => $this->input->post('sub_category'),
			'item_name'            => $this->input->post('item_name'),
			'quantity'             => $this->input->post('quality'),
			'prise'                => $this->input->post('price'),
			'modified'              => date('Y-m-d H:i:s')
		); 
		$this->db->where('id',$id);
	    $query = $this->db->update($this->table_name,$set_array);
	    return $query;
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
	
	public function delete_record($id){
		$this->db->where('id',$id);
		$result = $this->db->delete($this->table_name); 
		return $result;
	}
	
	

   

	
	
		
}