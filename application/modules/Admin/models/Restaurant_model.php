<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant_model extends CI_Model
{	
    public $table_name = 'tbl_admin';

    public function exit_details()
	{
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->where('email',$this->input->post('email'));
		$query=$this->db->get();
		$result = $query->num_rows();						
		return $result;
	}

    public function get_restarent_data(){
        $query = $this->db->select("*")->from($this->table_name)->where(['created_by'=>$this->session->userdata('id'),'admin_level'=>0])->order_by('id','desc')->get();
	    $result = $query->result_array();
		return $result;
    }	
	
	
	public function add_all_users()
	{		
		$set_data = array(
				'name'          => $this->input->post('name'),
				'email'         => $this->input->post('email'),
				'mob_num'       => $this->input->post('mobile'),
				'admin_level' 	=> 0,
				'created' 	    => date('Y-m-d H:i:s'),
				'created_by' 	  => $this->session->userdata('id')
		);
		$result = $this->db->insert($this->table_name, $set_data); 
	    return $result;
    }

    public function update_record($id) { 
	    $set_array = array( 
			'name'          => $this->input->post('name'),
			'email'         => $this->input->post('email'),
			'mob_num'       => $this->input->post('mobile'),
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
	
	public function mail_send_register($to,$message){
		$this->load->library('email');
		$subject = 'Verify your account';
		$this->email->from('shailu.gattu26@gmail.com','prazulity'); // change it to yours
		$this->email->to($to);// change it to yours
		$this->email->subject($subject);
		$this->email->message($message);
		$result = $this->email->send();
		return $result;
	}
	
		


	
	
		
}