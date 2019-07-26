<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offersdeals extends MY_Controller
{	
  	public $listpage = 'offer-deals-list-view';
	public $addpage = 'offer-deals-view';
	public $editpage = 'edit-offer-deals-view';
	public $redirectpage = 'sub-admin/offers-deals-list';


	public function __construct() {
        parent::__construct();
		
		if($this->session->userdata('id') ==''){
			redirect(base_url());
		}
        $this->load->library('session');
		$this->load->model('Offer_model','My_model');
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
	
	public function addofferdeal(){
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
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
						redirect($this->redirectpage);
					}else{
						$data['msg'] = "Not Inserted...";
					}
		    }
				}
		$this->load->view($this->addpage,$data);
	}
	
	
	
		public function editoffer($id){
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
	    $data['record'] = $this->My_model->get_single_record($id);
		$old_image = $data['record']['image'];
		if ($this->input->post('submit') != '') {
				if ($_FILES['image']['name'] != '') {
				$config['upload_path'] = '../images/offers/'; /* NB! create this dir! */
				$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
				$config['max_size']  = '0';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$this->load->library('upload', $config);
				
				if(! $this->upload->do_upload('image')){
					$data['msg'] = $this->upload->display_errors();
				}else{
						$data = $this->upload->data();
						$uploadedImages['image'] = $data['file_name'];
					
						$ImgName = $uploadedImages['image'];
						$config_image = array();
						$config_image = array(
						  'image_library' => 'gd2',
						  'source_image' => '../images/offers/'.$ImgName,
						  'new_image' => '../images/offers/'.$ImgName,
						  'width' => 1500,
						  'height' => 620,
						  'maintain_ratio' => FALSE,
						  'rotate_by_exif' => TRUE,
						  'strip_exif' => TRUE,
						);					
						$this->load->library('image_lib', $config_image);
						$this->image_lib->initialize($config_image);
						$this->image_lib->resize();
						$this->image_lib->clear();
						$ImgData = array(
							'image' => $uploadedImages['image']
						);
					$result = $this->My_model->update_record($id,$ImgData);
					
					if($result){
					  $file = $config['upload_path'].$old_image;
						if(is_file($file)) 
						    unlink($file); // delete file
						//echo $file.'file deleted';
						$this->session->set_flashdata('msg_succ', 'Updated Successfully...');
						redirect($this->redirectpage);
					}else{
						$data['msg'] = "Not Updated...";
					}
				}
			}else{
				$ImgData = array(
					'image' => $data['record']['BannerImage']
				);
				$result = $this->My_model->update_record($id,$ImgData);
				if($result){
					$this->session->set_flashdata('msg_succ', 'Updated Successfully...');
					redirect($this->redirectpage);
				}else{
					$data['msg'] = "Not Updated...";
				}
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