<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Packages_model extends CI_Model
{	
    public $table_name = 'tbl_packages';

    public function exit_details()
	{
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->where('email',$this->input->post('email'));
		$query=$this->db->get();
		$result = $query->num_rows();						
		return $result;
	}

    public function get_payment_data(){
        $query = $this->db->select("*")->from($this->table_name)->where(['created_by'=>$this->session->userdata('id')])->order_by('id','desc')->get();
	    $result = $query->result_array();
		return $result;
    }	
	
	
	public function add_record()
	{		
		$set_data = array(
				'package_name'          => $this->input->post('package_name'),
				'cost_package'         => $this->input->post('cost_package'),
				'billing'       => $this->input->post('billing'),
				'created' 	    => date('Y-m-d H:i:s'),
				'created_by' 	  => $this->session->userdata('id')
		);
		$result = $this->db->insert($this->table_name, $set_data); 
	    return $result;
    }

    public function update_record($id) { 
	    $set_array = array( 
			'package_name'          => $this->input->post('package_name'),
			'cost_package'         => $this->input->post('cost_package'),
			'billing'       => $this->input->post('billing'),
			//'modified'              => date('Y-m-d H:i:s')
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