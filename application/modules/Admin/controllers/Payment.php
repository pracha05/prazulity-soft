<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends MY_Controller
{	
	public $listpage = 'payment-details';


	public function __construct() {
        parent::__construct();
        $this->load->library('session');
		if($this->session->userdata('id') ==''){
			redirect(base_url());
		}
		$this->load->model('Home_model','common_model');
		
    }
	
	
	
	public function index(){
		$header['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
		$this->load->view($this->listpage,$header);
	}
	
	
	
}
?>