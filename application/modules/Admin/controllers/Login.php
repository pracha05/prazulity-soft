<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{	
    public $head = '../views/admin/head.php';
	public $listpage = 'login-view';


	public function __construct() {
        parent::__construct();
        $this->load->library('session');
		$this->load->model('Login_model','My_model'); 

    }
	
	
	public function index(){
		$this->load->view($this->head);
		
		if($this->input->post('submit')!=''){
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
			}
			//echo '<pre>';print_r($this->input->post('submit'));exit;
		}
		$this->load->view($this->listpage);
	}
	
	
	
}
?>