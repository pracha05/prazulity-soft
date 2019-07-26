<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller
{	
    public $head = '../views/admin/head.php';
    public $footer = '../views/admin/footer.php';
    public $header = '../views/admin/header.php';
    public $script = '../views/admin/script.php';
    public $sidebar = '../views/admin/sidebar.php';
	public $listpage = 'dashoard-view';


	public function __construct() {
        parent::__construct();
        $this->load->library('session');
		if($this->session->userdata('id') ==''){
			redirect(base_url());
		}
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