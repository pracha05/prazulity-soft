<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Offer_model extends CI_Model
{	
    public $table_name = 'tbl_offerndeal';
	
	public function add_record($data) {
	    $set_array = array( 
			'suba_id'           => $data['id'],
			'created_by'        => $data['id'],
			'image'             => $data['image'],
			'offer_type'        => $this->input->post('offer_type'),
			'item'              => $this->input->post('item'),
			'ofer_des'          => $this->input->post('offer_des'),
			//'created'           => ,
		); 
	    $query = $this->db->insert($this->table_name,$set_array);
	    return $query;
    }

	
	 public function get_session_data($id){
	    $query =$this->db->select('*')->from($this->table_name)->where('id',$id)->get(); 
	    $result = $query->row_array();
		return $result;
		
	}

   

	
	
		
}