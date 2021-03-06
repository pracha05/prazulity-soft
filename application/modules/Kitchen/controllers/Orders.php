<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends MY_Controller
{	
   public $listpage = 'orders-view';


	public function __construct() {
        parent::__construct();
        $this->load->library('session');
		if($this->session->userdata('id') ==''){
			redirect(base_url());
		}
		$this->load->model('Order_model','My_model');
    }
	
	
	
	public function index(){
		
		$data['table_data'] =$this->My_model->get_tabledata();
		$this->load->view($this->listpage,$data);
	
	}
	
	public function orderdetails($id) {
		$result = $this->My_model->get_data($id);
		echo json_encode($result);
        exit;
		
	}
	
	public function updateorderdata($id) {
		$result = $this->My_model->update_data($id);
		echo json_encode($result);exit;
	}
	
	public function cancelorderdata($id) {
		$result = $this->My_model->cancelupdate_data($id);
		echo json_encode($result);exit;
	}
	
	
	
	
}
?>