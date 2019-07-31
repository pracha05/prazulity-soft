<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bannerslider extends My_Controller
{
	
  
	
	    public function __construct()
	    {
		    parent::__construct();			
		    $this->load->library('session');
			$this->load->model('Home_model','common_model');
		    $this->load->model('Banner_module','My_model');
		    if($this->session->userdata('id') ==''){
			    redirect(site_url());
		    }
	    }
	
	    public function index() {
			    $data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
				$data['record'] = $this->My_model->get_all_records();
		        $this->load->view('banner-list-view',$data);
	    }
		
		public function addbanner() {
			$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
			if ($this->input->post('submit')) {	
               if($_FILES['image']['name'] != ''){
				$config1['upload_path'] = './images/banners/';
				$config1['allowed_types'] = 'gif|jpeg|png|jpg';
				$config1['max_size'] = '0';
				$config1['max_width'] = '0';
				$config1['max_height'] = '0';
				$rand = substr(rand(1,1000000),0,3);
				$new_name = 'ban-'.$rand.'-'.$_FILES['image']['name'];
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
					$result = $this->My_model->add_record($data);
					if($result){
						$this->session->set_flashdata('msg_succ', 'Added Successfully...');
						redirect('admin/banner-list');
					}else{
						$data['msg'] = "Not Inserted...";
					}
				}
				$this->load->view('add_banner',$data);
	    }
		
		
		public function editslider($id){
		$data['sess_data']=$this->common_model->get_login_data($this->session->userdata('id'));
		$data['custm_data'] = $this->My_model->get_single_record($id);
		if($this->input->post('submit')){
			
			$old_image = $data['custm_data']['banner'];
			if ($_FILES['image']['name'] != ''){
				$config['upload_path'] = './images/banners/'; /* NB! create this dir! */
				$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
				$config['max_size']  = '0';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$rand = substr(rand(1,1000000),0,3);
				$new_name = 'ban-'.$rand.'-'.$_FILES['image']['name'];
				$config['file_name'] = $new_name;
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
						  'source_image' => './images/banners/'.$ImgName,
						  'new_image' => './images/banners/'.$ImgName,
						  'width' => 0,
						  'height' => 0,
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
						$this->session->set_flashdata('msg_succ', ' Profile has been updated successfully.');
						redirect('admin/banner-list');
					}else{
						$data['msg'] = "Some error occured. Please try again later";
					}
				}
			}else{
				$ImgData = array(
					'image' => $data['custm_data']['banner']
				);
				$result = $this->My_model->update_record($id,$ImgData);
				if($result){
					$this->session->set_flashdata('msg_succ', ' Slider has been updated successfully.');
					redirect('admin/banner-list');
				}else{
					$data['msg'] = "Some error occured. Please try again later";
				}
			}
			
		}	
		$this->load->view('edit_banner',$data);
	}
	
	
	public function delete($id){ 
		$data['msg'] ='';
		if($id){
			$data['record'] = $this->My_model->get_single_record($id);
			$result = $this->My_model->delete_record($id);
			if($result){
				$this->session->set_flashdata('msg_succ', 'Deleted Successfully...');
				redirect('admin/banner-list');
			}else{
				$this->session->set_flashdata('msg_error', 'Not Deleted...');
				redirect('admin/banner-list');
			}
		}
	}
	
	public function status($id,$status){
		$data['msg'] ='';
		//echo $status;
		$statu = ($status == 1 ? 'Deactive' : 'Active');
		if($id){
			$result = $this->My_model->status_record($id,$status);
			if($result){
				$this->session->set_flashdata('msg_succ', $statu.' Successfully...');
				redirect('admin/banner-list');
			}else{
				$this->session->set_flashdata('msg_succ', 'Status Not Updated...');
				redirect('admin/banner-list');
			}
		}
	}
	
	
	
	

	
		
}