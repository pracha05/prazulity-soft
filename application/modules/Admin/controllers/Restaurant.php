<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends MY_Controller
{	
    public $head = '../views/admin/head.php';
    public $footer = '../views/admin/footer.php';
    public $header = '../views/admin/header.php';
    public $script = '../views/admin/script.php';
    public $sidebar = '../views/admin/sidebar.php';
	public $listpage = 'restaurant-list-view';
	public $addpage = 'add-restaurant-view';


	public function __construct() {
        parent::__construct();
        $this->load->library('session');
		$this->load->model('Restaurant_model','My_model');
		$this->load->library('form_validation');
		$this->load->helper('security');
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off');
    }
	
	public function index(){
		$this->load->view($this->head);
		$this->load->view($this->header);
		$this->load->view($this->sidebar);
		
		$this->load->view($this->listpage);
		$this->load->view($this->script);
		$this->load->view($this->footer);
	}
	
	public function addrestaurant(){
		$this->load->view($this->head);
		$this->load->view($this->header);
		$this->load->view($this->sidebar);
		if($this->input->post('submit') != ''){
			if($this->form_validation->run('adddata')== TRUE){
			$num =$this->My_model->exit_details();
			if($num == 0){
				$result= $this->My_model->add_all_users();
				if($result){
					$this->session->set_flashdata('msg_succ', 'Registration successful, Please check your email to activate your account');
					redirect('admin/add-restaurant');
				}else{
					$this->session->set_flashdata('msg_error_register', 'This email already exists. Please Login.');	
				}
			}else{
				$this->session->set_flashdata('msg_error_register', 'This email already exists. Please Login.');
			}
			}
		}
		$this->load->view($this->addpage);
	    $this->load->view($this->footer);
		$this->load->view($this->script);
	}
	
	
	
}
?>