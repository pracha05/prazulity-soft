<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat extends MY_Controller
{	
	public $listpage = 'chat';


	public function __construct() {
        parent::__construct();
        $this->load->library('session');
		$this->load->model('Home_model','common_model');
		
    }
	
	public function index(){
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
		$this->load->view($this->listpage,$data);
	}
	
	
	
}
?>