<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Offer_model extends CI_Model
{	
    public $table_name = 'tbl_offerndeal';
	
	
	public function get_table_data(){
        $query = $this->db->select("*")->from($this->table_name)->order_by('id','desc')->get();
	    $result = $query->result_array();
		return $result;
    }
	
	public function add_record($data) {
	    $set_array = array( 
			'suba_id'           => $data['id'],
			'created_by'        => $data['id'],
			'image'             => $data['image'],
			'offer_type'        => $this->input->post('offer_type'),
			'item'              => $this->input->post('item'),
			'ofer_des'          => $this->input->post('offer_des'),
		); 
	    $query = $this->db->insert($this->table_name,$set_array);
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
	
	public function update_record($id,$ImgData) {
	    $set_array = array( 
		    'image'             =>$ImgData['image'],
			'offer_type'        => $this->input->post('offer_type'),
			'item'              => $this->input->post('item'),
			'ofer_des'          => $this->input->post('offer_des'),
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