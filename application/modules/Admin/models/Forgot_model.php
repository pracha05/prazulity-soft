<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Forgot_model extends CI_Model {
	
    public $tbl_admin ='tbl_admin';
  

	
	public function __construct() {
        parent::__construct();
    }
	
	public function get_email_check(){
		$this->db->select('*');
		$this->db->from($this->tbl_admin);
		$this->db->where('email',$this->input->post('email'));
		$this->db->where('status',1);
		$query=$this->db->get();
		$result = $query->row_array();	
		return $result;
	}	
	
	public function mail_send_forgot($to,$message){
		$this->load->library('email');
		$subject = 'Reset your password';
		$this->email->from('prazu.com','prazulity'); // change it to yours
		$this->email->to($to);// change it to yours
		$this->email->subject($subject);
		$this->email->message($message);
		$result = $this->email->send();	
		return $result;
	}

    public function get_update_password($id,$email)
	{			
		$set_data = array(
					'password'        => md5($this->input->post('password')),
				);
		$this->db->where('id',$id);
		$this->db->where('email',$email);		
		$result = $this->db->update($this->tbl_admin,$set_data); 
		return $result;
    }
		
}