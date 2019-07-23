<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
	
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	//public $customer = 'customers';
	public function index()
	{
	}
	public function add_data()
	{
		$set_data = array(       									
					'first_name'       => trim(strip_tags($this->input->post('first_name'))),
					'last_name'        => trim(strip_tags($this->input->post('last_name'))),						
					'mob_number'       => trim(strip_tags($this->input->post('mob_number'))),
					'pan_number'       => trim(strip_tags($this->input->post('pan'))),
					'email'            => trim(strip_tags($this->input->post('email'))),
					'pwd'              => md5($this->input->post('password')),
					'status'           => 1,
					'created' 	       => date('Y-m-d H:i:s')
		);
		$result = $this->db->insert('customers', $set_data); 
	    return $result;
    }
	
		
}