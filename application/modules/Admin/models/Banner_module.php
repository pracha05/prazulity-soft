<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Banner_module extends CI_Model {
	
      public $tbl_banners ='tbl_banner';
  

	
	public function __construct() {
        parent::__construct();
    }
	
	
	public function get_all_records(){
	     $this->db->select('*');
		$this->db->from($this->tbl_banners);
		$this->db->order_by('id','desc');
		$this->db->where("delete","N");
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
	
	
	
	
	public function add_record($ImgData){
		$set_data = array(
		
						'banner' => $ImgData['image'],
						'banner_title' => $this->input->post('slide_test'),
						'created' => date('Y-m-d H:i:s'),
						'created_by' =>  $this->session->userdata('id'),
						'status' => 1
					);
		$result = $this->db->insert($this->tbl_banners, $set_data); 
		return $result;
	}
	
	
	 public function update_record($id,$ImgData){
		  $post_data = array(
		    
						'banner' => $ImgData['image'],
						'banner_title' => $this->input->post('slide_test'),
						'created_by' =>  $this->session->userdata('id'),
						'created' => date('Y-m-d H:i:s'),
						'status' => 1
					);	
		$this->db->where('id',$id);
		$result = $this->db->update($this->tbl_banners, $post_data);		
		return $result;
	}
	
	
	public function get_single_record($id){
			$this->db->select("*");
			$this->db->from($this->tbl_banners);
			$this->db->where("id",$id);
			$query = $this->db->get();
			$result = $query->row_array();
		    return $result;
	      }
		  
		  
	public function status_record($id,$status){
		$sts = ($status == 1 ? 0 : 1);
		$set_data = array(
						'status' => $sts
					);
		$this->db->where('id',$id);
		$result = $this->db->update($this->tbl_banners, $set_data);
		return $result;
	}	

    public function delete_record($id){
		$this->db->where('id',$id);
		$result = $this->db->delete($this->tbl_banners); 
		return $result;
	}
	


	
	
}