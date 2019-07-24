<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        $config = array(	
			
	       'adddata' => array(	 
						array(
								'field' => 'name',
								'label' => 'Name',
								'rules' => 'trim|required|xss_clean'
							),

                        array(
								'field' => 'email',
								'label' => 'Email',
								'rules' => 'trim|required|regex_match[/^[\w-.]{2,}@.{2,}$/]|valid_email|xss_clean'
							 ),	 

							 
                        array(
								'field' => 'mobile',
								'label' => 'Mobile Number',
								'rules' => 'trim|required|numeric|min_length[10]|max_length[12]|xss_clean',
								'errors' => array('numeric' => 'The Mobile Number you entered does not seem to be valid.','max_length' => 'The Mobile Number field cannot exceed 12 digits.')
						    ),				
											 
	        ),
			
			'addtable' => array(	 
						array(
								'field' => 'floor_num',
								'label' => 'Floor Number',
								'rules' => 'trim|required|xss_clean'
							),
							array(
								'field' => 'table_num',
								'label' => 'Table Number',
								'rules' => 'trim|required|xss_clean'
							),
							array(
								'field' => 'no_of_seats',
								'label' => 'Number of Seats',
								'rules' => 'trim|required|xss_clean'
							),		 
	        ),
			
			'addtable' => array(	 
						array(
								'field' => 'floor_num',
								'label' => 'Floor Number',
								'rules' => 'trim|required|xss_clean'
							),
							array(
								'field' => 'table_num',
								'label' => 'Table Number',
								'rules' => 'trim|required|xss_clean'
							),
							array(
								'field' => 'no_of_seats',
								'label' => 'Number of Seats',
								'rules' => 'trim|required|xss_clean'
							),		 
	        ),
			'addoffer' => array(	 
						array(
								'field' => 'offer_type',
								'label' => 'Offer type',
								'rules' => 'trim|required|xss_clean'
							),
							array(
								'field' => 'item',
								'label' => 'Item',
								'rules' => 'trim|required|xss_clean'
							),
							array(
								'field' => 'offer_des',
								'label' => 'Offer description',
								'rules' => 'trim|required|xss_clean'
							),	
                           								
	        ),
			'addmenu' => array(	 
						array(
								'field' => 'category',
								'label' => 'Category',
								'rules' => 'trim|required|xss_clean'
							),
							array(
								'field' => 'sub_category',
								'label' => 'Sub Category',
								'rules' => 'trim|required|xss_clean'
							),
							array(
								'field' => 'item_name',
								'label' => 'Item Name',
								'rules' => 'trim|required|xss_clean'
							),
							
							array(
								'field' => 'quality',
								'label' => 'Quantity',
								'rules' => 'trim|required|xss_clean'
							),
							array(
								'field' => 'price',
								'label' => 'Price',
								'rules' => 'trim|required|xss_clean'
							),

                           								
	                )

  );    

/* End of file form_validation.php */
/* Location: ./application/config/form_validation.php */