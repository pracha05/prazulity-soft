<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Table extends MY_Controller
{	
    public $listpage = 'table-view';
	public $addpage = 'add-table-view';
	public $editpage = 'edit-table-view';
	public $redirectpage = 'sub-admin/table-list';


	public function __construct() {
        parent::__construct();
		
		if($this->session->userdata('id') ==''){
			redirect(base_url());
		}
        $this->load->library('session');
		$this->load->model('Table_model','My_model');
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
		$data['record'] = $this->My_model->get_table_data();
		$this->load->view($this->listpage,$data);
		
	}
	
	public function addtable(){
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
		if($this->input->post('submit')){
			if($this->form_validation->run('addtable')== TRUE){
				$temp = rand(10000, 99999);
				$postData['bar_code'] = $this->set_barcode($temp);
				//echo '<pre>';print_r($postData);exit;
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
        $store_image = imagepng($file,"./barcode/{$code}.png");
        return $code.'.png';
   }
   
   public function edittable($id){
		$data['msg'] ='';
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
		$data['record'] = $this->My_model->get_single_record($id);
		    if($this->input->post('submit') != ''){
				$result = $this->My_model->update_record($id);
				if($result){
					$this->session->set_flashdata('msg_succ', 'Updated Successfully...');
					redirect('sub-admin/table-list');
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