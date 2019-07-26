<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller
{	
    public $head = '../views/subadmin/head.php';
    public $footer = '../views/subadmin/footer.php';
    public $header = '../views/subadmin/header.php';
    public $script = '../views/subadmin/script.php';
    public $sidebar = '../views/subadmin/sidebar.php';
	public $listpage = 'dashoard-view';


	public function __construct() {
        parent::__construct();
		if($this->session->userdata('id') ==''){
			redirect(base_url());
		}
        $this->load->library('session');
		$this->load->model('Home_model','common_model');
    }
	
	
	
	public function index(){
		$this->load->view($this->head);
		$header['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
		$this->load->view($this->header,$header);
		$this->load->view($this->sidebar);
		
		$this->load->view($this->listpage);
		$this->load->view($this->script);
		$this->load->view($this->footer);
	}
	
	
	
}
?>