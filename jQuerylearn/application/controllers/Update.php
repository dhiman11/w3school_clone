<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {
 
	 public function  __construct()
	{
		  parent::__construct();   
		 $this->load->model('Update_lesson');  
		   
	}
	public function lesson()
	{
		print_r($_POST); 
		
		$lesson_id = $this->input->POST('lesson_id');	
		$lesson_title = $this->input->POST('lesson_title');	
		$lesson_slug = $this->input->POST('lesson_slug');	
		$lesson_seo_keyword = $this->input->POST('lesson_seo_keyword');	
		$lesson_seo_description = $this->input->POST('lesson_seo_description');	
		$lesson_description = $this->input->POST('lesson_description');	 
		$lesson_seo_title = $this->input->POST('lesson_seo_title');	
		
		$this->Update_lesson->update($lesson_id,$lesson_title,$lesson_slug,$lesson_seo_title,$lesson_seo_keyword,$lesson_seo_description,$lesson_description);
		ECHO "Saved Successfully ";
	}
	 
 
}
