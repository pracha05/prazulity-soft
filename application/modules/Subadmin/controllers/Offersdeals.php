<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offersdeals extends MY_Controller
{	
    public $head = '../views/subadmin/head.php';
    public $footer = '../views/subadmin/footer.php';
    public $header = '../views/subadmin/header.php';
    public $script = '../views/subadmin/script.php';
    public $sidebar = '../views/subadmin/sidebar.php';
	public $listpage = 'offer-deals-list-view';
	public $addpage = 'offer-deals-view';


	public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
	
	
	public function index(){
		$this->load->view($this->head);
		$this->load->view($this->header);
		$this->load->view($this->sidebar);
		
		
		$this->load->view($this->listpage);
		$this->load->view($this->script);
		$this->load->view($this->footer);
	}
	
	public function addofferdeal(){
		$this->load->view($this->head);
		$this->load->view($this->header);
		$this->load->view($this->sidebar);
		
		
		$this->load->view($this->addpage);
		$this->load->view($this->script);
		$this->load->view($this->footer);
	}
	
	
	
}
?>