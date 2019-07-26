<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forgot extends MY_Controller
{	
    public $head = '../views/admin/head.php';
	public $listpage = 'forgot-password';


	public function __construct() {
        parent::__construct();
		if($this->session->userdata('id') !='' && $this->session->userdata('admin_level') ==1 ){
			redirect('admin/Dashboard');
		}
		if($this->session->userdata('id') !='' && $this->session->userdata('admin_level') ==0){
			redirect('Subadmin/Dashboard');
		}
		if($this->session->userdata('id') !='' && $this->session->userdata('admin_level') ==2){
			redirect('Kitchen/Dashboard');
		}
       
    }
	
	
	public function index(){
		
		$this->load->view($this->head);
		$this->load->view($this->listpage);
	}
	
	
	
}
?>