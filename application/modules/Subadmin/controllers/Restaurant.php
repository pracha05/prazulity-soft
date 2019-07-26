<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends MY_Controller
{	
   
	public $addpage = 'add-restaurant';
	public $listpage = 'restaurant-list';
	public $editpage = 'edit-restaurant';
	public $redirectpage = 'sub-admin/restaurant-list';


	public function __construct() {
        parent::__construct();
		
		if($this->session->userdata('id') ==''){
			redirect(base_url());
		}
        $this->load->library('session');
		$this->load->model('Restaurant_model','My_model');
		$this->load->model('Home_model','common_model');
		$this->load->library('form_validation');
		$this->load->helper('security');
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off');
    }
	
	
	
	
	public function index(){
		$data['record'] = $this->My_model->get_restarent_data();
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
		$this->load->view($this->listpage,$data);
	}
	
	public function addrestarent(){
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
		if($this->input->post('submit')){
			if($this->form_validation->run('addrestarent')== TRUE){
				$result = $this->My_model->add_record();
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
	
	public function editrestarent($id){
		$data['msg'] ='';
		$data['record'] = $this->My_model->get_single_record($id);
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
		    if($this->input->post('submit') != ''){
				$result = $this->My_model->update_record($id);
				if($result){
					$this->session->set_flashdata('msg_succ', 'Updated Successfully...');
					redirect($this->redirectpage);
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