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
		$this->load->model('Offer_model','My_model');
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
	
	public function addofferdeal(){
		$this->load->view($this->head);
		$this->load->view($this->header);
		$this->load->view($this->sidebar);
		
		if ($this->input->post('submit')) {	
		if($this->form_validation->run('addoffer')== TRUE){
               if($_FILES['image']['name'] != ''){   
				$config1['upload_path'] = './images/offers/';
				$config1['allowed_types'] = 'gif|jpeg|png|jpg';
				$config1['max_size'] = '0';
				$config1['max_width'] = '0';
				$config1['max_height'] = '0';
				$rand = substr(rand(1,1000000),0,3);
				$new_name = 'offer-'.$rand.'-'.$_FILES['image']['name'];
				$config1['file_name'] = $new_name;
				$this->load->library('upload', $config1);
				if (!$this->upload->do_upload('image')){
					$error = array('error' => $this->upload->display_errors());
					echo "<pre>";
					print_r($error);
					exit();
				}
				else {
					$fdata = $this->upload->data();
					$data['image'] = $fdata['file_name'];
				}
			   }else{
				$data['image'] = '';
			  }
			     $data['id'] =$this->session->userdata('id');
					$result = $this->My_model->add_record($data);
					if($result){
						$this->session->set_flashdata('msg_succ', 'Added Successfully...');
						redirect('sub-admin/offers-deals');
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