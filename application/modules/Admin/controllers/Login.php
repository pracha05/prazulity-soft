<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{	
    public $head = '../views/admin/head.php';
	public $listpage = 'login-view';


	public function __construct() {
        parent::__construct();
		if($this->session->userdata('id') !='' && $this->session->userdata('admin_level') ==1 ){
			redirect('admin/Dashboard');
		}
		if($this->session->userdata('id') !='' && $this->session->userdata('admin_level') ==0){
			redirect('Subadmin/Dashboard');
		}
		if($this->session->userdata('id') !='' && $this->session->userdata('admin_level') ==2){
			redirect('Kitchen/Dashboard');
		}
        $this->load->library('session');
		$this->load->model('Login_model','My_model'); 
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red; font-size:11px;margin-top:-11px;font-weight:700;">', '</div>');
 		$this->form_validation->set_message('regex_match', 'Please enter a valid %s.');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off');
    }
	
	
	public function index(){
		
		$this->load->view($this->head);
		if($this->input->post('submit')!=''){
			if($this->form_validation->run('login_add')== TRUE){
			$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('pwd')
			);
			$user_details = $this->My_model->get_login_details($data);
			if(!empty($user_details) && $user_details['admin_level'] == 1){				
				$newdata = array(
					'id'  => $user_details['id'],		
					'email'  => $user_details['email'],						
					'name'  => $user_details['name'],
					'admin_level'  => $user_details['admin_level']	
				);
				$this->session->set_userdata($newdata);
				$admin_login_details = $this->My_model->admin_login();
				if($admin_login_details){
				  redirect('admin/dashboard');
				} 	
			}elseif(!empty($user_details) && $user_details['admin_level'] == 0){
				$newdata = array(
				    'id'  => $user_details['id'],		
					'email'  => $user_details['email'],						
					'name'  => $user_details['name'],
					'admin_level'  => $user_details['admin_level']	
				);
				$this->session->set_userdata($newdata);
				$admin_login_details = $this->My_model->admin_login();
				if($admin_login_details){
				  redirect('subadmin/dashboard');
				} 					
			}elseif(!empty($user_details) && $user_details['admin_level'] == 2){
				$newdata = array(
				    'id'  => $user_details['id'],		
					'email'  => $user_details['email'],						
					'name'  => $user_details['name'],
					'admin_level'  => $user_details['admin_level']	
				);
				$this->session->set_userdata($newdata);
				$admin_login_details = $this->My_model->admin_login();
				if($admin_login_details){
				  redirect('kitchen/dashboard');
				} 					
			}else{
				$this->session->set_flashdata('msg_error', 'Invalid email and password...');
			    redirect($this->redirectpage);
				
			}
		}
			//echo '<pre>';print_r($this->input->post('submit'));exit;
		}
		$this->load->view($this->listpage);
	}
	
	
	
}
?>