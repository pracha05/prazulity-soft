<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends MY_Controller
{	
    public $head = '../views/subadmin/head.php';
    public $footer = '../views/subadmin/footer.php';
    public $header = '../views/subadmin/header.php';
    public $script = '../views/subadmin/script.php';
    public $sidebar = '../views/subadmin/sidebar.php';
	public $listpage = 'menu-view';
	public $addpage = 'add-menu-view';


	public function __construct() {
        parent::__construct();
        $this->load->library('session');
		$this->load->model('Menu_model','My_model');
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
	
	public function addmenu(){
		$this->load->view($this->head);
		$this->load->view($this->header);
		$this->load->view($this->sidebar);
		if($this->input->post('submit')){
			if($this->form_validation->run('addmenu')== TRUE){
				$result = $this->My_model->add_record($this->session->userdata('id'));
				if($result){
					$this->session->set_flashdata('msg_succ', 'Added Successfully...');
					redirect('sub-admin/add-table');
				}else{
					$data['msg'] = "Not Inserted...";
				}
			}
		}
		$this->load->view($this->addpage);
		$this->load->view($this->script);
		$this->load->view($this->footer);
	}
	
	
	
}
?>