<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Changepassword extends MY_Controller
{
	public $listpage = 'changepassword-view';
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('form_validation');
        $this->load->library('session');	 
		$this->load->model('Home_model','My_model');
			if ($this->session->userdata('id') ==""){ 
				redirect(base_url());
			}
		
	    $this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
 		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
	}
	
	public function index()
	{
        $data['msg'] ='';
				$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));

			if($this->input->post('submit')){
			  if($this->form_validation->run('change_password')== TRUE){	  
		        	if($this->My_model->password_check() != 0){ 
						if($this->input->post('old_pwd') != $this->input->post('new_pwd')){
							$changepass=$this->My_model->change_password();
							if($changepass){
								$this->session->set_flashdata('msg_succ', 'Password has been changed successfully');
								redirect($this->redirectpage);
							}
						}else{	
							$this->session->set_flashdata('msg_succ', 'Old and New password should not be same');
							redirect($this->redirectpage);
						}
					}else{		
						$data['msg'] = 'Your Old password is incorrect';
					}
				}
			}
		//---end change password functionality--//
    	$this->load->view($this->listpage,$data);
    }

}