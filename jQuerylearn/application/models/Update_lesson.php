<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
	
class Update_lesson extends CI_Model
{
	 
		///////CATEGORY///////////////////////////////////	
		/////////////////////////////////////////////////
public function update($lesson_id,$lesson_title,$lesson_slug,$lesson_seo_title,$lesson_seo_keyword,$lesson_seo_description,$lesson_description)
	{ 
		
		$data=array('post_title'=>$lesson_title,'slug'=>$lesson_slug,'last_updated'=>date('Y-m-d H:i:s'),'post'=>$lesson_description,'seo_title'=>$lesson_seo_title,'seo_keyword'=>$lesson_seo_keyword,'seo_description'=>$lesson_seo_description,'updated_by'=>$this->session->userdata('username'));
		$this->db->where('id',$lesson_id);
		$this->db->update('lesson_post',$data);

		 
	}
}


?>