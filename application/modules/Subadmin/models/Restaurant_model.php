<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant_model extends CI_Model
{	
    public $table_name = 'tbl_admin';
	
	public function get_restarent_data(){
        $query = $this->db->select("*")->from($this->table_name)->where(['created_by'=>$this->session->userdata('id'),'admin_level'=>2])->order_by('id','desc')->get();
	    $result = $query->result_array();
		return $result;
    }
	
	public function add_record() {
	    $set_array = array( 
			'created_by'           => $this->session->userdata('id'),
			'name'                 => $this->input->post('reg_name'),
			'email'                => $this->input->post('email'),
			'mob_num'              => $this->input->post('mobile'),
			'admin_level'          => 2,
			'address'              => $this->input->post('address'),
			'created'              => date('Y-m-d H:i:s')
		); 
	    $query = $this->db->insert($this->table_name,$set_array);
	    return $query;
    }
	
	public function update_record($id) { 
	    $set_array = array( 
			'created_by'           => $this->session->userdata('id'),
			'name'                 => $this->input->post('reg_name'),
			'email'                => $this->input->post('email'),
			'mob_num'              => $this->input->post('mobile'),
			'address'              => $this->input->post('address'),
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