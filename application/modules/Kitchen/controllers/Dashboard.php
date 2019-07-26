<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller
{	
   public $listpage = 'dashoard-view';


	public function __construct() {
        parent::__construct();
        $this->load->library('session');
		if($this->session->userdata('id') ==''){
			redirect(base_url());
		}
    }
	
	public function index(){
		
		$this->load->view($this->listpage);
	
	}
	
	
	
}
?>