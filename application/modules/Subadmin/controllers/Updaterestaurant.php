<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Updaterestaurant extends MY_Controller
{	
    public $head = '../views/subadmin/head.php';
    public $footer = '../views/subadmin/footer.php';
    public $header = '../views/subadmin/header.php';
    public $script = '../views/subadmin/script.php';
    public $sidebar = '../views/subadmin/sidebar.php';
	public $listpage = 'updateregister-view';


	public function __construct() {
        parent::__construct();
		if($this->session->userdata('id') ==''){
			redirect(base_url());
		}
        $this->load->library('session');
		$this->load->model('Updatereg_model','My_model');
    }
	
	
	public function index(){
		$this->load->view($this->head);
		$this->load->view($this->header);
		$this->load->view($this->sidebar);
		$data['sess_data'] = $this->My_model->get_session_data($this->session->userdata('id'));
		
		if($this->input->post('submit')){
			//echo '<pre>';print_r($this->input->post());exit;
			//if($this->form_validation->run('updateadd')== TRUE){
				$result = $this->My_model->set_user_data($this->session->userdata('id'));
				if($result){
					$this->session->set_flashdata('msg_succ', ' Profile has been updated successfully.');
					redirect('subadmin/updaterestaurant');
				}else{
					$data['msg'] = "Some error occured. Please try again later";
				}
			//}
		}
		$this->load->view($this->listpage,$data);
		$this->load->view($this->script);
		$this->load->view($this->footer);
	}
	
	
	
}
?>