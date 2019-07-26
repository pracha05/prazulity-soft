<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MY_Controller {
	
	public $listPage  = 'Admin/login';
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if($this->session->userdata('id') ==''){
			redirect($this->listPage);
		}
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
	}
	
	public function index(){	
		$user_data = $this->session->all_userdata();
		foreach ($user_data as $key => $value) {
			$this->session->unset_userdata($key);
		}
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('admin_level');
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', 'Logout Successfully...');
		redirect(site_url(),'refresh');
   }
  
}