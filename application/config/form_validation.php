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
											 
	        )

  );    

/* End of file form_validation.php */
/* Location: ./application/config/form_validation.php */