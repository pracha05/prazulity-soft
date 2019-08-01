<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
	    public $table_name = 'tbl_admin';

	function __construct() 
	{
		parent::__construct();
	}
	
	public function get_login_data($id){
        $query = $this->db->select("*")->from('tbl_admin')->where(['id'=>$id])->get();
	    $result = $query->row_array();
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
	
	
		public function exist_detail($data_exists)
	{
	
		$this->db->select("*");
		$this->db->from($this->table_name);
		$this->db->where($data_exists);
		$query = $this->db->get();
		$result = $query->row_array();
		return $result;
	}
	
	public function active_add_link($email)
	{
		
		$data = array(
		              'status' => 1,
					 );
		$this->db->where('email',$email);
		$result = $this->db->update($this->table_name,$data);
		//echo '<pre>';print_r($result);exit;
		return $result;
	}
	
		public function change_password(){
		$datac = array(
		    'password'=>md5($this->input->post('new_pwd'))
		);
		$this->db->where('status',1);
		$this->db->where("id",$this->session->userdata('id'));
        $result = $this->db->update($this->table_name, $datac);
		return $result;
	}
	//--password check code --//
	public function password_check(){
		
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->where('password',md5($this->input->post('old_pwd')));
		$this->db->where('status',1);		
		$result=$this->db->get();
		return $result->num_rows();	
	}

	
		
}