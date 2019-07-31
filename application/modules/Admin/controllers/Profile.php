<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller
{	
    public $listpage = 'profile-view';


	public function __construct() {
        parent::__construct();
		$this->load->model('Home_model','common_model');
		if($this->session->userdata('id') ==''){
			redirect(base_url());
		}
    }
	
	
	
	
	public function index(){
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
	    $this->load->view($this->listpage,$data);
	}
	
	
	
	
}
?>