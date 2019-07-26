<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends MY_Controller
{	
	public $listpage = 'menu-view';
	public $addpage = 'add-menu-view';
	public $editpage = 'edit-menu-view';
	public $redirectpage = 'sub-admin/menu-list';

	public function __construct() {
        parent::__construct();
		
		if($this->session->userdata('id') ==''){
			redirect(base_url());
		}
        $this->load->library('session');
		$this->load->model('Menu_model','My_model');
		$this->load->model('Home_model','common_model');
		$this->load->library('form_validation');
		$this->load->helper('security');
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off');
    }
	
	public function index(){
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
		$data['record'] = $this->My_model->get_menu_data();
		$this->load->view($this->listpage,$data);
	}
	
	public function addmenu(){
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
		if($this->input->post('submit')){
			if($this->form_validation->run('addmenu')== TRUE){
				$rand = substr(rand(1,1000000),0,5);
				$postData['bar_code'] = $this->set_barcode($rand);
				$result = $this->My_model->add_record($this->session->userdata('id'),$postData);
				if($result){
					$this->session->set_flashdata('msg_succ', 'Added Successfully...');
					redirect($this->redirectpage);
				}else{
					$data['msg'] = "Not Inserted...";
				}
			}
		}
		$this->load->view($this->addpage,$data);
	}
	
	function set_barcode($code){
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
        $file = Zend_Barcode::draw('code128', 'image', array('text' => $code), array());
        $code = time().$code;
        $store_image = imagepng($file,"./barcode/menu/{$code}.png");
        return $code.'.png';
   }
   
     public function editmenu($id){
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id')); 
		$data['msg'] ='';
		$data['record'] = $this->My_model->get_single_record($id);
		    if($this->input->post('submit') != ''){
				$result = $this->My_model->update_record($id);
				if($result){
					$this->session->set_flashdata('msg_succ', 'Updated Successfully...');
					redirect('sub-admin/menu-list');
				}else{
					$data['msg_not'] = "Not Updated...";
				}
		    }
		$this->load->view($this->editpage,$data);
	}
	
	public function delete($id){ 
		$data['msg'] ='';
		if($id){
			$data['record'] = $this->My_model->get_single_record($id);
			$result = $this->My_model->delete_record($id);
			if($result){
				$this->session->set_flashdata('msg_succ', 'Deleted Successfully...');
				redirect($this->redirectpage);
			}else{
				$this->session->set_flashdata('msg_error', 'Not Deleted...');
				redirect($this->redirectpage);
			}
		}
	}
	
	
	
}
?>